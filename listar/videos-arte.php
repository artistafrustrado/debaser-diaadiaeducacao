<?
include ("./../../../mainfile.php");
include_once XOOPS_ROOT_PATH.'/header.php';

// PERMISÃO
$sysperm_handler =& xoops_gethandler('groupperm');
$modules =& xoops_gethandler('module');

$category = !empty($modversion['category']) ? intval($modversion['category']) : 0;


if (!$xoopsUser){
    redirect_header(XOOPS_URL.'/index.php', 3, _NOPERM);
    exit();
}

$groups =& $xoopsUser->getGroups();

$xoopsOption['template_main'] = 'debaser_listar.html';
// PERMISÃO

//combo
include_once 'nav-videos.php';
//combo

$grupolinks = 'Vídeos Arte';


$grupoDNome = $grupolinks;
$xoopsTpl->assign('grupoDNome', $grupoDNome);

$consult = $xoopsDB->query("SELECT COUNT(approved) FROM ".$xoopsDB->prefix('debaser_files')." WHERE genre='$grupolinks'");
list($total_aprovados) = mysql_fetch_array($consult);

echo "<h2>.:.:.:.:.:.: Total de Arquivos aprovados:[<strong> $total_aprovados </strong>]::.</h2>";

$cons = $xoopsDB->query("SELECT title, xfid, filename, link, addinfo  FROM ".XOOPS_DB_PREFIX."_debaser_files where genre='$grupolinks' order by title");

$grupoDConteudos = ''; 

$grupoDConteudos .= "<div class='textoconteudo'>";

$i = 0 ;

while ( $data = $xoopsDB->fetchArray($cons) ){

  $title = $data['title'];
  $xfid = $data['xfid'];
  $filename = $data['filename'];
  $link = $data['link'];	
  $addinfo = $data['addinfo'];	
  $xfid = $data['xfid'];


  $grupoDConteudos .= "<strong>Titulo:</strong> <A HREF=\"".XOOPS_URL."/modules/debaser/singlefile.php?id=$xfid\">$title</a><br /><strong>Nome do Arquivo:</strong> $filename<br /><strong>id:</strong> $xfid<br /><strong>Link do arquivo:</strong> <a href=\"$link\">$link</a><br /><strong>Descrição:</strong> $addinfo<br /><hr />";
  
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
