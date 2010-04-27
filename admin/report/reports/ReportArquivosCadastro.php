<?php

class ReportArquivosCadastro 
{
  public $titulo = "Cadastro de arquivos";
  public $cabecalho;

  public function __construct()
  {
    $this->cabecalho = array('categoria','id','titulo','link','tipo','arquivo','arquivo flv');
  }

  public function montar()
  {
    global $xoopsDB;
    $sql2 = " SELECT genre, xfid, title, link FROM ".$xoopsDB->prefix('debaser_files')." ORDER BY genre, title ASC LIMIT 10";

    $videos = array("mpg","mpeg","avi","divx","mp4");

    $resultarts = $xoopsDB-> query($sql2);
    $result = $xoopsDB->query($sql2);


    $buffer = "";

    $data = array();

    while ($sqlfetch = $xoopsDB->fetchArray($result)) 
    {
      $dados = array();
      foreach($sqlfetch as $key => $val)
      {
        $dados[$key] = $val;
      }

      $file = str_replace('http://www.diaadia.pr.gov.br','', trim($sqlfetch['link']));
      $file = $_SERVER['DOCUMENT_ROOT'] . $file;
      $file_flv = preg_replace("/\.(avi|mpeg|mpg|divx|mp4)$/si", '.flv', trim($file));
      $parts = pathinfo(strtolower(trim($sqlfetch['link'])));

      if(in_array($parts['extension'], $videos))
      {
        $dados['tipo'] = "video";
        $isVideo = True;
      }
      else
      {
        $dados['tipo'] = "audio\n";
      }
      if(is_file($file))
      {
        $dados['arquivo_encontrado'] = "OK";
      }
      else
      {
        $dados['arquivo_encontrado'] = "Arquivo nao encontrado";
        $hasError = True;
      }
      if(is_file($file_flv))
      {
        $dados['arquivo_flv_encontrado'] = "FLV OK";
      }
      else
      {
        $dados['arquivo_flv_encontrado'] = "Arquivo FLV nao encontrado";
        if($isVideo)
        {
          $hasError = True;
        }
      }

      $data[] = $dados;
    }

    return $data;
  }
}

?>
