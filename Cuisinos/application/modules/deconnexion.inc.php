<?php
if(!isset($_SESSION)) session_start();
$data['deconnexionReussie'] = '';
if(isset($_REQUEST['signOut'])) {
	$data['deconnexionReussie'] = 1;
	$smarty->assign("data", $data);
	$_SESSION[] = array();
	session_destroy();
	header('Location: index.php?page=accueil');
}
?>
