<?php
define('DB_HOST', 'localhost');
define('DB_PORT', '3306');
define('DB_DATABASE', 'recette');
define('DB_USERNAME', 'u_recette');
define('DB_PASSWORD', 'SJzEeqLb2HHeNYVV');

try {
	$PDO_BDD= new PDO('mysql:host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_DATABASE, DB_USERNAME, DB_PASSWORD);
	$PDO_BDD->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$PDO_BDD->exec("SET NAMES'utf8'");
} catch (Exception $e) {
	echo 'Erreur : '.$e -> getMessage().'</br>';
	echo 'N° : '.$e -> getCode();
	exit();
}
?>