<?php
if(!isset($_SESSION)) session_start();
$data['deconnexionReussie'] = '';
if(isset($_REQUEST['signOut'])) {
	$_SESSION[] = array();
	session_destroy();
	$data['deconnexionReussie'] = 1;
	$smarty->assign("data", $data);
}
?>
