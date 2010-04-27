<?php
error_reporting(E_ERROR ); 
ini_set("display_errors", False); 

include '../../../../mainfile.php';
include_once XOOPS_ROOT_PATH.'/class/xoopsmodule.php';
include_once XOOPS_ROOT_PATH . '/class/pagenav.php';

error_reporting(E_ERROR ); 
ini_set("display_errors", False); 

$filename = "csvfile.csv";
header("Content-type: application/csv");
header("Content-Disposition: attachment; filename=$filename");

$classname = $_GET['report'];
$directory = "reports";
$filename = "{$classname}.php";
include_once("{$directory}/{$filename}");

$class = new $classname();
$data = $class->montar();

foreach($data as $row)
{
  $array = array();
  foreach($row as $col)
  {
    $col = str_replace("\n", ' ', $col);
    $col = str_replace("\r", '', $col);
    $array[] = "\"{$col}\"";
  }
  echo implode(',', $array) ."\"\r\n";;
}

