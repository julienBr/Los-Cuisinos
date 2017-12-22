<?php
$data['deconnexionReussie'] = '';
if(isset($_REQUEST['signOut'])) {
	session_start();
	$_SESSION[] = array();
	session_destroy();
	$data['deconnexionReussie'] = 1;
	$smarty->assign("data", $data);
}
?>
