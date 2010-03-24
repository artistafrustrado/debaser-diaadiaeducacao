<?php
// $Id: genre.php,v 0.80 2004/10/24 10:00:00 frankblack Exp $
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
include_once XOOPS_ROOT_PATH.'/class/xoopsmodule.php';
include_once XOOPS_ROOT_PATH . '/class/pagenav.php';

$start = isset( $_GET['start'] ) ? intval( $_GET['start'] ) : 0;

$xoopsOption['template_main'] = 'debaser_genre.html';
$xoopsTpl->assign("xoopsurl", XOOPS_URL);

include XOOPS_ROOT_PATH.'/header.php';

$groups = (is_object($xoopsUser)) ? $xoopsUser->getGroups() : XOOPS_GROUP_ANONYMOUS;
$module_id = $xoopsModule->getVar('mid');
$gperm_handler = &xoops_gethandler('groupperm');

if (isset($_GET['genreid'])) {
	$genrelist = $_GET['genreid'];
}

if (isset($_GET['letter'])) {
	$letter = $_GET['letter'];
}

if(!empty($letter)){
	$sql2 = " SELECT d.xfid, d.added, d.filename, d.fileext, d.artist, d.title, d.album, d.year, d.addinfo, d.track, d.genre, d.length, d.bitrate, d.link, d.frequence, d.approved, d.weight, d.hits, d.views, t.genreid, t.genretitle
		FROM ".$xoopsDB->prefix('debaser_files')." d, ".$xoopsDB->prefix('debaser_genre')." t WHERE t.genreid='".$_GET['genreid']."' AND UCASE(d.title) like '".$letter."%'  AND d.genre=t.genretitle  AND d.approved = 1 
		ORDER BY d.title ASC";
}
else{
	$sql2 = " SELECT d.xfid, d.added, d.filename, d.fileext, d.artist, d.title, d.album, d.year, d.addinfo, d.track, d.genre, d.length, d.bitrate, d.link, d.frequence, d.approved, d.weight, d.hits, d.views, t.genreid, t.genretitle
		FROM ".$xoopsDB->prefix('debaser_files')." d, ".$xoopsDB->prefix('debaser_genre')." t WHERE t.genreid='".$_GET['genreid']."'  AND d.genre=t.genretitle AND d.approved = 1 
		ORDER BY ".$xoopsModuleConfig['index_sortby'].' '.$xoopsModuleConfig['index_orderby']." ";
}

$resultarts = $xoopsDB -> query($sql2);
$result = $xoopsDB -> query( $sql2, $xoopsModuleConfig['indexperpage'], $start );

$totalarts = $xoopsDB -> getRowsNum( $resultarts );

$category = array();

$category['total'] = $totalarts;

$totalarts = 0;

echo('<br>');
for($i=65; $i<90; $i++){
	if($i==89){
		echo("<a href='genre.php?genreid=$genrelist&amp;letter=".chr($i)."'>".chr($i)."</a>");
	}else{
		echo("<a href='genre.php?genreid=$genrelist&amp;letter=".chr($i)."'>".chr($i)."</a>::");
	}
}

echo('<br><br>');


$filelist = array();
$videos = array("mpg","mpeg","avi","divx","mp4");

while ($sqlfetch = $xoopsDB->fetchArray($result)) {

	if ($xoopsModuleConfig['usefileperm'] == 1) 
	{

		if ($gperm_handler->checkRight('DebaserFilePerm', $sqlfetch['xfid'] , $groups, $module_id)) 
		{
			$filelist['id'] = $sqlfetch['xfid'];
			$dataAux = getDate($sqlfetch['added']);
			$filelist['added'] = $dataAux['mday'].'/'.$dataAux['mon'].'/'.$dataAux['year'];
			$filelist['filename'] = $sqlfetch['filename'];
			$filelist['artist'] = $sqlfetch['artist'];
			$filelist['title'] = stripslashes($sqlfetch['title']);
			$filelist['album'] = $sqlfetch['album'];
			$filelist['year'] = $sqlfetch['year'];
			$filelist['addinfo'] = $sqlfetch['addinfo'];
			$filelist['track'] = $sqlfetch['track'];
			$filelist['genre'] = $sqlfetch['genre'];
			$filelist['length'] = $sqlfetch['length'];
			$filelist['bitrate'] = $sqlfetch['bitrate'];
			$filelist['link'] = $sqlfetch['link'];
			$filelist['frequence'] = $sqlfetch['frequence'];
			$filelist['hits'] = $sqlfetch['hits'];
			$filelist['views'] = $sqlfetch['views'];
			$filelist['play_file'] = "play.gif";
			$filelist['fileext'] = $sqlfetch['fileext'];

			if(in_array(strtolower($filelist['fileext']), $videos))
			{
			  $filelist['file_type'] = "video";
			  $filelist['link_flv'] = str_replace(strtolower($filelist['fileext']), 'flv', $filelist['link']);
			} else {
				$filelist['file_type'] = "audio";
		    $filelist['link_flv'] = $filelist['link'];
			}

			$xoopsTpl->append('filelist', $filelist);



			$totalarts++;
		}
	}
	else 
	{
		$filelist['id'] = $sqlfetch['xfid'];
		$dataAux = getDate($sqlfetch['added']);
		$filelist['added'] = $dataAux['mday'].'/'.$dataAux['mon'].'/'.$dataAux['year'];
		$filelist['filename'] = $sqlfetch['filename'];
		$filelist['artist'] = $sqlfetch['artist'];
		$filelist['title'] = stripslashes($sqlfetch['title']);
		$filelist['album'] = $sqlfetch['album'];
		$filelist['year'] = $sqlfetch['year'];
		$filelist['addinfo'] = $sqlfetch['addinfo'];
		$filelist['track'] = $sqlfetch['track'];
		$filelist['genre'] = $sqlfetch['genre'];
		$filelist['length'] = $sqlfetch['length'];
		$filelist['bitrate'] = $sqlfetch['bitrate'];
		$filelist['link'] = $sqlfetch['link'];
		$filelist['frequence'] = $sqlfetch['frequence'];
		$filelist['hits'] = $sqlfetch['hits'];
		$filelist['views'] = $sqlfetch['views'];
		$filelist['play_file'] = "play.gif";
		$filelist['fileext'] = $sqlfetch['fileext'];

		if(in_array(strtolower($filelist['fileext']), $videos))
		{
		  $filelist['link_flv'] = str_replace(strtolower($filelist['fileext']), 'flv', $filelist['link']);
			$filelist['file_type'] = "video";
		} else {
			$filelist['file_type'] = "audio";
		  $filelist['link_flv'] = $filelist['link'];
		}
		$xoopsTpl->append('filelist', $filelist);

		$totalarts++;
	}
}

if(!isset($letter))
{
  $letter = "";
}
$pagenav = new XoopsPageNav( $category['total'], $xoopsModuleConfig['indexperpage'], $start, 'start', 'genreid=' . $genrelist ,'letter=' . $letter);
$category['navbar'] = $pagenav -> renderNav(2);

$xoopsTpl->assign('category', $category);

	if (empty($filelist['id'])) {
		if(!empty($genrelist))
			redirect_header('genre.php?genreid='.$genrelist, 1, _MD_DEBASER_NOFILES);
		else	
			redirect_header('index.php', 1, _MD_DEBASER_NOFILES);
	}
else {
	$xoopsTpl->assign('genrelist', $filelist['genre']);
}

if ($xoopsUser) {
	$xoopsModule = XoopsModule::getByDirname('debaser');

	if ( $xoopsUser->isAdmin($xoopsModule->mid()) ) {
		$xoopsTpl->assign('isxadmin', true);
	}
}

/* determine if downloads are allowed or if download is a link */
if ($xoopsModuleConfig['debaserallowdown'] == 1) {
	$xoopsTpl->assign("allowyes", true);
}

if ($xoopsModuleConfig['usetooltips'] == 1) {
	$xoopsTpl->assign("usetooltips", true);
}

include_once XOOPS_ROOT_PATH.'/footer.php';

?>
