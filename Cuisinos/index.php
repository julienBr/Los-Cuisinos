<?php
	require_once "application/modules/config.inc.php";
	require_once "application/modules/configBDD.inc.php";

	$current_page = ERROR_404;
	
	if(isset($_GET['page'])) {
		foreach($_PAGES as $v) {
			if($v == $_GET['page']) $current_page = $v;
		}
	}
	else $current_page = HOME_PAGE;
	
	require_once "application/modules/recherches.inc.php";
	require_once "application/modules/connexion.inc.php";
	require_once "application/modules/deconnexion.inc.php";
	require_once "application/modules/$current_page.inc.php";
	$smarty -> display('application/views/modules/'.$current_page.'.tpl');
?>