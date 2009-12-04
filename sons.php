<?
include ("./../../mainfile.php");
include_once XOOPS_ROOT_PATH.'/header.php';

$xoopsOption['template_main'] = 'debaser_listar.html';

$grupolinks = 'Sons';


$grupoDNome = $grupolinks;
$xoopsTpl->assign('grupoDNome', $grupoDNome);


$cons = $xoopsDB->query("SELECT genreid, subgenreid, genretitle  FROM ".XOOPS_DB_PREFIX."_debaser_genre where subgenreid='2' order by genretitle");

$grupoDConteudos .= "<br /><div class='textoconteudo'>";

$i = 0 ;

while ( $data = $xoopsDB->fetchArray($cons) ){

  $genreid = $data['genreid'];
  $subgenreid = $data['subgenreid'];
  $genretitle = substr($data['genretitle'], 4);

  $grupoDConteudos .= "<A HREF=\"".XOOPS_URL."/modules/debaser/genre.php?genreid=$genreid\">$genretitle</a><br />";

  $i++;
}
if ($i==0){

  $grupoDConteudos .= "<font color='red'>Nenhum conteúdo cadastrado!</font>";
}


$grupoDConteudos .= "<a href='javascript:history.back();' style='display:block;text-align:right;margin-top:10px;'><img src='".XOOPS_URL."/modules/conteudo/images/btVoltar.png' alt='Voltar' border='0'></a>";

$grupoDConteudos .= "</div>";

$xoopsTpl->assign('grupoDConteudos', $grupoDConteudos);


include_once XOOPS_ROOT_PATH.'/footer.php';
?>
