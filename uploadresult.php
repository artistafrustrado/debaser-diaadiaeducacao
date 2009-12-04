<?php
// $Id: uploadresult.php,v 0.80 2004/10/23 10:00:00 frankblack Exp $
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

	require_once XOOPS_ROOT_PATH.'/class/template.php';

	$xoopsTpl = new XoopsTpl();

	$xfid = $xoopsDB->getInsertId();

	$sql = "
	SELECT title, artist, album, year, addinfo, track, genre, length, bitrate, frequence, approved
	FROM ".$xoopsDB->prefix('debaser_files')."
	ORDER BY xfid DESC";

	$result = $xoopsDB->query($sql);

	list($title, $artist, $album, $year, $addinfo, $track, $genre, $length, $bitrate, $frequence, $approved) = $xoopsDB->fetchRow($result);

	$xoopsTpl->assign(array('title' => $title, 'artist' => $artist, 'album' => $album, 'year' => $year, 'addinfo' => $addinfo, 'track' => $track, 'genre' => $genre, 'length' => $length, 'bitrate' => $bitrate, 'frequence' => $frequence, 'approved' => $approved, 'maintheme' => xoops_getcss($xoopsConfig['theme_set'])));

	$xoopsTpl->display('db:debaser_uploadresult.html');

?>