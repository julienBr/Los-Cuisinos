<?php
if(!isset($_SESSION)) session_start();
if(isset($_REQUEST['rechercher'])) {
	if(!empty($_REQUEST['recherche'])) {
		$recherche = $_REQUEST['recherche'];
	}
}
?>