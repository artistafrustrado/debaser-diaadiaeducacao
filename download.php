<?php
include '../../mainfile.php';

$aux = explode("?", $_POST['url']);

$filename = $aux[0];

$fileid = ($aux[1]) ? $aux[1] : '';

$newfilename = substr($filename, strrpos($filename, '/')+1);

if (strstr($_SERVER['HTTP_USER_AGENT'], "MSIE")) {
	header("Pragma: public");
	header("Content-Type: application/force-download; name=\"".$newfilename."\"");
	header("Expires: 0");
	header("Cache-control: private");
	header("Content-Disposition: attachment; filename=\"".$newfilename."\"");
	header("Content-Transfer-Encoding: 8bit");
} else {
	header("Content-Type: application/force-download'; name=\"".$newfilename."\"");
	//        header("Content-Length: \n");
	header("Content-Disposition: attachment; filename=\"".$newfilename."\"");
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
}
@readfile($filename, 'r');

if ($fileid <> '') {
	$filesql = "UPDATE ".$xoopsDB->prefix('debaser_files')." SET hits = hits+1 WHERE xfid = ".intval($fileid)."";
	$fileresult = $xoopsDB->queryF($filesql);
}

exit();
?>
