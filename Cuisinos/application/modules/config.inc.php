<?php
	$_PAGES = array(
		'accueil'        => 'accueil',
		'connexion'      => 'connexion',
		'profil'         => 'profil',
		'recette'        => 'recette',
		'recette_detail' => 'recette_detail',
		'recette_liste'  => 'recette_liste',
		'error404'       => 'error404',
        'inscription'    => 'inscription',
        'connexion'      => 'connexion',
        'profil'         => 'profil',
        'gestion_recettes'=>'gestion_recettes',
        'gestion_utilisateurs'=>'gestion_utilisateurs',
        'gestion_ingredients'=>'gestion_ingredients',
        'recherches' => 'recherches'
	);
	define('HOME_PAGE', 'accueil');
	define('ERROR_404', 'error404');
	require_once "application/libraries/smarty-3.1.30/libs/Smarty.class.php";
	$smarty = new Smarty();
?>