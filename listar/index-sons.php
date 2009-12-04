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
//combo
include_once 'nav-sons.php';
//combo

echo '<center><h2>Listagem DEBASER - SONS</h2></center>';


include_once XOOPS_ROOT_PATH.'/footer.php';
?>
