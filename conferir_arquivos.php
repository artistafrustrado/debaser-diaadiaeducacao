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

$buffer = "";

if($_GET['tudo'] == 'sim')
{
  $showAll = True;
  $buffer .= '<a href="conferir_arquivos.php">mostrar apenas registros com erro</a><br/><br/>';
} 
else
{
  $showAll = False;
  $buffer .= '<a href="conferir_arquivos.php?tudo=sim">mostrar todos os registros</a><br/><br/>';
}


$buffer .= "<table id='report'>\n";
$buffer .= "<thead>\n";
$buffer .= "<td>disciplina</td>\n";
$buffer .= "<td>id</td>\n";
$buffer .= "<td>titulo</td>\n";
$buffer .= "<td>link</td>\n";
$buffer .= "<td>tipo</td>\n";
$buffer .= "<td>arquivo</td>\n";
$buffer .= "<td>flv</td>\n";
$buffer .= "</thead>\n";
$buffer .= "<tbody>\n";

while ($sqlfetch = $xoopsDB->fetchArray($result)) 
{
  $rowBuffer = "";
  $hasError = False;
  $isVideo = False;

  $rowBuffer .= "<tr>\n"; 
  $rowBuffer .= "<td>{$sqlfetch['genre']}</td>\n";
  $rowBuffer .= "<td>{$sqlfetch['xfid']}</td>\n";
  $rowBuffer .= "<td>{$sqlfetch['title']}</td>\n";
  $rowBuffer .= "<td>{$sqlfetch['link']}</td>\n";

  $file = str_replace('http://www.diaadia.pr.gov.br','', trim($sqlfetch['link']));
  $file = $_SERVER['DOCUMENT_ROOT'] . $file;
  $file_flv = preg_replace("/\.(avi|mpeg|mpg|divx|mp4)$/si", '.flv', trim($file));
  $parts = pathinfo(strtolower(trim($sqlfetch['link'])));

  if(in_array($parts['extension'], $videos))
  {
    $rowBuffer .= "<td>video</td>\n";
    $isVideo = True;
  }
  else
  {
    $rowBuffer .= "<td>audio</td>\n";
  }
  if(is_file($file))
  {
    $rowBuffer .= "<td>OK</td>\n";
  }
  else
  {
    $rowBuffer .= "<td>Arquivo nao encontrado</td>\n";
    $hasError = True;
  }
  if(is_file($file_flv))
  {
    $rowBuffer .= "<td>FLV OK</td>\n";
  }
  else
  {
    $rowBuffer .= "<td>Arquivo FLV nao encontrado</td>\n";
    if($isVideo)
    {
      $hasError = True;
    }
  }
  $rowBuffer .= "</tr>\n";  

  if($showAll)
  {
    $buffer .= $rowBuffer;
  }
  elseif($hasError)
  {
    $buffer .= $rowBuffer;
  }

}

$buffer .= "</tbody>\n";
$buffer .= "</table>\n";

echo $buffer;
?>
