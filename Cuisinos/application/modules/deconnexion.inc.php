<?php
if(isset($_REQUEST['signOut'])) {
	$_SESSION=array();
	session_destroy();
	header('location: index.php?page=accueil');
	exit;
}
?>
