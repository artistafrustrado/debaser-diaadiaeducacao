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

?>
<html>
<head>
<title>Relatorio de Links::DEBASER</title>
<style>
body, p, td {
  font-family: Verdana, Arial, Helvetica, Sans-Serif;
  font-size: 10px;
}

#report {
border: 1px solid black;
}
#report td{
border: 1px solid #CCCCCC;
        background-color: #EEEEEE;
}
#report thead td{
border: 1px solid #CCCCCC;
color: white;
font-weight: bold;
text-align: center;
        background-color: black;
}
</style>
</head>
<?php

$groups = (is_object($xoopsUser)) ? $xoopsUser->getGroups() : XOOPS_GROUP_ANONYMOUS;
$module_id = $xoopsModule->getVar('mid');
$gperm_handler = &xoops_gethandler('groupperm');

$sql2 = " SELECT genre, xfid, title, link FROM ".$xoopsDB->prefix('debaser_files')." ORDER BY genre, title ASC";

$videos = array("mpg","mpeg","avi","divx","mp4");

$resultarts = $xoopsDB-> query($sql2);
$result = $xoopsDB->query($sql2);

echo "<table id='report'>\n";
echo "<thead>\n";
echo "<td>disciplina</td>\n";
echo "<td>id</td>\n";
echo "<td>titulo</td>\n";
echo "<td>link</td>\n";
echo "<td>tipo</td>\n";
echo "<td>arquivo</td>\n";
echo "<td>flv</td>\n";
echo "</thead>\n";
echo "<tbody>\n";

while ($sqlfetch = $xoopsDB->fetchArray($result)) 
{
  echo "<tr>\n"; 
  echo "<td>{$sqlfetch['genre']}</td>\n";
  echo "<td>{$sqlfetch['xfid']}</td>\n";
  echo "<td>{$sqlfetch['title']}</td>\n";
  echo "<td>{$sqlfetch['link']}</td>\n";

  $file = str_replace('http://www.diaadia.pr.gov.br','', trim($sqlfetch['link']));
  $file = $_SERVER['DOCUMENT_ROOT'] . $file;
  $file_flv = preg_replace("/\.(avi|mpeg|mpg|divx|mp4)$/si", '.flv', trim($file));
  $parts = pathinfo(strtolower(trim($sqlfetch['link'])));

  if(in_array($parts['extension'], $videos))
  {
    echo "<td>video</td>\n";
  }
  else
  {
    echo "<td>audio</td>\n";
  }
  if(is_file($file))
  {
    echo "<td>OK</td>\n";
  }
  else
  {
    echo "<td>Arquivo nao encontrado</td>\n";
  }
  if(is_file($file_flv))
  {
    echo "<td>FLV OK</td>\n";
  }
  else
  {
    echo "<td>Arquivo FLV nao encontrado</td>\n";
  }
  echo "</tr>\n";  
}

echo "</tbody>\n";
echo "</table>\n";
?>
