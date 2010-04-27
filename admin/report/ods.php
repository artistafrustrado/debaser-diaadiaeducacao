<?php
error_reporting(E_ERROR ); 
ini_set("display_errors", False); 

include '../../../../mainfile.php';
include_once XOOPS_ROOT_PATH.'/class/xoopsmodule.php';
include_once XOOPS_ROOT_PATH . '/class/pagenav.php';

error_reporting(E_ERROR ); 
ini_set("display_errors", False); 

class ODS
{
  public $fileTemplate;
  public $fileSave; 
  public $ods; 
  public $dom; 
  private $tebleModel;

  public function __construct($fileTemplate, $fileSave)
  {
    $this->fileTemplate = $fileTemplate;
    $this->fileSave = $fileSave;
  }

  public function make($data)
  {
    $this->openTemplate();
    $this->addData($data);
    $this->save();
  }

  protected function openTemplate()
  {
    $zip = new ZipArchive;
    $res = $zip->open($this->fileTemplate, ZipArchive::CREATE);

    $fp = $zip->getStream("content.xml"); 

    if(!$fp) exit("failed open ".$this->fileTemplate." ");

    while(!feof($fp)) {
      $contents .= fread($fp, 2);
    }
    fclose($fp);
    $zip->close();

    $this->dom = new DOMDocument();
    $this->dom->loadXML($contents);

  }
  
  protected function addData($data)
  {
    $table = $this->dom->getElementsByTagName("table");

    foreach($data as $rowVal)
    {
      $nodeRow  = $this->dom->createElement("table:table-row");
      $nodeRow->setAttribute("table:style-name","ro1");

      foreach($rowVal as $colVal)
      {
        $colVal = utf8_encode($colVal);
        $nodeText = $this->dom->createElement("text:p",$colVal);

        $nodeCell = $this->dom->createElement("table:table-cell");

        $nodeCell->setAttribute("table:style-name","ce2");
        $nodeCell->setAttribute("office:value-type","string");

        $nodeCell->appendChild($nodeText);
        $nodeRow->appendChild($nodeCell);

        $text .= ", ".$colVal;
      }
      $text = "";

      $table->item(0)->appendChild($nodeRow);
    }

  }
  
  protected function save()
  {
    copy($this->fileTemplate, $this->fileSave);

    $content = $this->dom->saveXML();

    $zip = new ZipArchive;
    $res = $zip->open($this->fileSave, ZipArchive::CREATE);
    if ($res === TRUE) {
      $zip->addFromString('content.xml', $content);
      $zip->close();
    }

  }
}

$classname = $_GET['report'];
$directory = "reports";
$filename = "{$classname}.php";
include_once("{$directory}/{$filename}");
$class = new $classname();
$data = $class->montar();
#$data = $class->cabecalho + $data;


$tempfile = md5(time());
$fileTemplate = "template.ods";
$fileSave = "/tmp/{$tempfile}.ods";
$ods = new ODS($fileTemplate, $fileSave);
$ods->make($data);

$filename = "report.ods";
header("Content-type: application/vnd.oasis.opendocument.spreadsheet");
header("Content-Disposition: attachment; filename=$filename");
readfile($fileSave);
unlink($fileSave);


