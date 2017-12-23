<?php
$data['connexionReussie'] = '';
if(isset($_REQUEST['signIn'])) {
	$login = $_REQUEST['signInLogin'];
	$password = sha1($_REQUEST['signInPassword']);
	$connect = $PDO_BDD -> query("SELECT *
								  FROM t_utilisateur_uti
								  WHERE UTI_LOGIN like '$login' AND UTI_PASS like '$password'") -> fetchAll();
	if(count($connect) == 1) {
		if(!isset($_SESSION)) session_start();
		$data['connexionReussie'] = 1;
		$typeUser = $PDO_BDD -> query("SELECT UTI_ADMIN
									   FROM t_utilisateur_uti
									   WHERE UTI_LOGIN LIKE '$login' AND UTI_PASS LIKE '$password'") -> fetch();
		session_regenerate_id();
		$_SESSION['login'] = $login;
		$_SESSION['password'] = $password;
		$_SESSION['typeUser'] = $typeUser['UTI_ADMIN'];
	}
	else $data['connexionReussie'] = 0;
	$smarty->assign("data", $data);
}
?>