<?php
// $Id: singlefile.php,v 0.80 2004/10/24 10:00:00 frankblack Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //

include '../../mainfile.php';

$xoopsOption['template_main'] = 'debaser_singlefile.html';

include XOOPS_ROOT_PATH.'/header.php';

function construir_tocador_mp3($link)
{
	$buffer = "";

	$buffer .= '<object type="application/x-shockwave-flash" data="dewplayer.swf" width="200" height="20">'."\n";
	$buffer .= '<param name="movie" value="dewplayer.swf?mp3=' . $link . '" />'."\n";
	$buffer .= '<param name="flashvars" value="mp3='.$link.'" />'."\n";
	$buffer .= "</object>\n";
	return $buffer;

}

function construir_tocador_flv($link)
{
	$buffer = "";

	$pathparts = pathinfo($link);
	$fileext = $pathparts['extension'];

	$link = str_replace(strtolower($fileext), 'flv', $link);

	#$link = "http://10.74.50.108/~fernando/videos/alive.flv";
	$link = "http://10.1.1.10/~fernando/every_six_minutes.flv";

	$buffer .=  "<div id=\"video\" >Video</div>\n";
	$buffer .= "<script type=\"text/javascript\">\n";
	$buffer .= "var so = new SWFObject('codigos_tvs/player.swf','mpl','445','327','8');\n";
	$buffer .= "so.addParam('allowscriptaccess','always');\n";
	$buffer .= "so.addParam('allowfullscreen','true');\n";
	$buffer .= "so.addVariable('height','260');\n";
	$buffer .= "so.addVariable('width','780');\n";
	$buffer .= "so.addVariable('video','{$link}');\n";
	$buffer .= "so.addVariable('backcolor','#F7F7F7');\n";
	$buffer .= "so.addVariable('frontcolor','0xffffff');\n";
	$buffer .= "so.addVariable('lightcolor','0x909db9');\n";
	$buffer .= "so.addVariable('displayheight','245');\n";
	$buffer .= "so.addVariable('displaywidth','325');\n";
	$buffer .= "so.addVariable('searchbar','false');\n";
	$buffer .= "so.addVariable('shuffle','false');\n";
	$buffer .= "so.write('video');\n";
	$buffer .= "</script>\n";

	return $buffer;
}

$myts =& MyTextSanitizer::getInstance();

if (isset($_GET['id'])) {
	$id = $_GET['id'];
}

$ratesong = array();

$sql = "
SELECT d.xfid, d.added, d.filename, d.fileext, d.artist, d.title, d.album, d.year, d.addinfo, d.track, d.genre, d.length, d.bitrate, d.link, d.frequence, d.rating, d.votes, d.approved, d.hits, d.views, t.genreid, t.genretitle
FROM ".$xoopsDB->prefix('debaser_files')." d, ".$xoopsDB->prefix('debaser_genre')." t
WHERE d.xfid = ".intval($id)."
AND d.approved = 1
AND d.genre = t.genretitle";

$result = $xoopsDB->query($sql);

list($id, $added, $filename, $fileext, $artist, $title, $album, $year, $addinfo, $track, $genre, $length, $bitrate, $link, $frequence, $rating, $votes, $approved, $hits, $views, $genreid, $genretitle) = $xoopsDB->fetchRow($result);

$videos = array("mpg","mpeg","avi","divx","mp4");
if(in_array($fileext, $videos))
{
	$tocador = construir_tocador_flv($link);
} else {
	$tocador = construir_tocador_mp3($link);
}
$play_file = "play.gif";

$xoopsDB->queryF("
		UPDATE ".$xoopsDB->prefix('debaser_files')." 
		SET views = views+1 
		WHERE xfid = ".$id."");
$addinfo = stripslashes ($addinfo);
$title = stripslashes ($title);
$dataAux = getDate($added);
$added = $dataAux['mday'].'/'.$dataAux['mon'].'/'.$dataAux['year'];



$xoopsTpl->assign(array('id' => $id, 'added' => $added, 'filename' => $filename, 'artist' => $artist, 'title' => $title, 'album' => $album, 'year' => $year, 'addinfo' => $myts->displayTarea($addinfo, 1, 1, 1, 1, 0), 'track' => $track, 'genre' => $genre, 'length' => $length, 'bitrate' => $bitrate, 'link' => $link, 'frequence' => $frequence, 'genreid' => $genreid, 'hits' => $hits, 'views' => $views, 'win_width' => $win_width, 'win_height' => $win_height, 'play_file' => $play_file, 'tocador' => $tocador));

if ($rating != 0.0000) {
	$ratesong['rating'] = ""._MD_DEBASER_RATING.": " .$myts->stripSlashesGPC(number_format( $rating, 2));
	$ratesong['votes'] = ""._MD_DEBASER_VOTES.": " .$myts->stripSlashesGPC($votes);
}
else {
	$ratesong['rating'] = _MD_DEBASER_NOTRATED;
}

if($xoopsUser) {
	$xoopsModule = XoopsModule::getByDirname('debaser');

	if ( $xoopsUser->isAdmin($xoopsModule->mid()) ) {
		$xoopsTpl->assign('isxadmin', true);
	}
}
$xoopsTpl->assign('lang_comments' , _COMMENTS);
$xoopsTpl->assign('ratesong', $ratesong);

if ($xoopsModuleConfig['guestvote'] == 1) $xoopsTpl->assign('guestvote', true);
if ($xoopsUser) $xoopsTpl->assign('guestvote', true);

/* determine if downloads are allowed or if download is a link */
if ($xoopsModuleConfig['debaserallowdown'] == 1) {
	$xoopsTpl->assign("allowyes", true);
}

include XOOPS_ROOT_PATH.'/include/comment_view.php';

include_once XOOPS_ROOT_PATH.'/footer.php';

?>
