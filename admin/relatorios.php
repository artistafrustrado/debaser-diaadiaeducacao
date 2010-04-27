<?php

include 'admin_header.php';
include XOOPS_ROOT_PATH.'/class/xoopsformloader.php';
include_once '../include/functions.php';
include_once XOOPS_ROOT_PATH.'/modules/debaser/class/debasertree.php';
include_once XOOPS_ROOT_PATH.'/class/xoopslists.php';

/*
if (isset($_GET['op']) && $_GET['op'] == 'reportmanager') {
  $op = 'reportmanager';
}
*/
$op = $_GET['op'];



class Relatorio
{
  public function __construct()
  {

  }

  public function montar($cabecalho, $dados)
  {
  $buffer =<<<EOS
<style>
#report
{
  border: 1px solid black;
}
#report thead td 
{
  background-color: black;
  color: white;
  font-weight: bold;
  text-align: center;
  padding: 4px;
}
#report tbody td 
{
  border: 1px solid #CCCCCC;
  background-color: #EEEEEE;
  padding: 2px;
}
</style>
EOS;
    
    $buffer .= "<table id='report'>\n";
    $buffer .= "<thead>\n";
    $buffer .= "<tr>\n";
    foreach($cabecalho as $item)
    {
      $buffer .= "<td>{$item}</td>\n";
    }
    $buffer .= "</tr>\n";
    $buffer .= "</thead>\n";
    $buffer .= "<tbody>\n";
    
    foreach($dados as $linha)
    {
      $buffer .= "<tr>\n";
      foreach($linha as $celula)
      {
        $buffer .= "<td>{$celula}</td>\n";
      }
      $buffer .= "</tr>\n";
    }

    $buffer .= "</tbody>\n";
    $buffer .= "</table>\n";
    return $buffer;

  }

}

function reportmanager()
{
  $directory = "report/reports";
  $lista = "<ul>\n";
  $iterator = new RecursiveDirectoryIterator($directory);
  $recursiveIterator = new RecursiveIteratorIterator($iterator);
  foreach ( $recursiveIterator as $entry ) {
    if(!$entry->isDir())
    {
      $filename = $entry->getFilename();
      $classname = str_replace('.php', '', $filename);
      include_once("{$directory}/{$filename}");
      $class = new $classname();
      $titulo = $class->titulo;
      $lista .= "<li><a href=\"{$_SERVER['PHP_SELF']}?op=showreport&report={$classname}\">{$class->titulo}</a></li>\n";
    }
  }
  $lista .= "</ul>\n";

  echo $lista;
}

function showreport()
{

  $classname = $_GET['report'];
  $directory = "report/reports";
  $filename = "{$classname}.php";
  include_once("{$directory}/{$filename}");
      
  $class = new $classname();
  $data = $class->montar();
#  var_dump($data);

  echo "<h1>Relatorio: {$class->titulo}</h1><br/>\n";
  echo "<a href=\"report/ods.php?report={$classname}\">ODS</a><br/>\n";
  echo "<a href=\"report/txt.php?report={$classname}\">TXT</a><br/>\n";

  $report = new Relatorio();
  $cabacalho = array();
  echo $report->montar($class->cabecalho, $data);
}

if (!isset($op)) {
  $op = '';
} 

echo "<br/>\n";
echo "<br/>\n";

switch ($op) {

	case 'showreport':
		showreport();
		break;
  
  case 'default':
  default:
    reportmanager();
    break;

}

xoops_cp_footer();
?>
