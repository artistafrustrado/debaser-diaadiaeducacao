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


// PERMISÃO


$consult = $xoopsDB->query("SELECT COUNT(approved) FROM ".$xoopsDB->prefix('debaser_files')."");
list($total_aprovados) = mysql_fetch_array($consult);

echo "<h2>.:.:.:.:.:.: Total de Arquivos aprovados:[<strong> $total_aprovados </strong>]::.</h2>";


echo "<center><h3>Listagem DEBASER</h3>";
echo "<a href='index-videos.php'>VÍDEOS</a><br /><a href='index-sons.php'>SONS</a></center>";


include_once XOOPS_ROOT_PATH.'/footer.php';
?>
