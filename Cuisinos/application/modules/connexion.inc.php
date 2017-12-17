<?php
if(isset ($_REQUEST['signIn'])) {
	$login = $_REQUEST['signInLogin'];
	$pass = hash('sha1',$_REQUEST['signInPassword']);
	$connect = $PDO_BDD->query("SELECT * FROM t_utilisateur_uti WHERE UTI_LOGIN LIKE '$login' AND UTI_PASS LIKE '$pass'")->fetchAll();
	if(count($connect) == 1) {
		/*if(isset($_REQUEST['remember'])) {
			setcookie(name);
		}*/
		session_start();
		$req = $PDO_BDD->query("SELECT UTI_ADMIN FROM t_utilisateur_uti WHERE UTI_LOGIN LIKE '$login' AND UTI_PASS LIKE '$pass'");
		$typeUser = $req->fetch();
		$_SESSION['signInLogin'] = $login;
		$_SESSION['signInPassword'] = $pass;
		$_SESSION['type'] = $typeUser['UTI_ADMIN'];
		foreach($_SESSION as $cle => $valeur) {
			echo "  <li><strong>".ucfirst($cle)." : </strong><em>".$valeur."</em></li>\n";
		}
	}
	else {
		echo "<script>alert(\"Erreur de connection : identifiant ou mot de passe érroné.\")</script>";  // renvois erreur à l'écran (pas besoin de move puisquil est déjà sur la page de co)
	}
}
?>