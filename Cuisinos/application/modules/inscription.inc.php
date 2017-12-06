<?php

if(isset($_REQUEST['submit'])) {
	if($_REQUEST['password'] == $_REQUEST['confirmation']) {
		$login = $PDO_BDD -> query('SELECT COUNT(*) AS pseudoExist
									FROM t_utilisateur_uti
									WHERE UTI_LOGIN = "'.$_REQUEST['login'].'"') or die(mysql_error());
		$reqlog = $login -> fetch();
		$match = $reqlog['pseudoExist'];
		if($match >= 1) {
			echo "<script>alert(\"Ce login existe déjà...\"); document.location.href = \"index.php?page=inscription\";</script>";
			
		}
		else {
			try {
				$PDO_BDD -> exec("INSERT INTO t_utilisateur_uti (UTI_LOGIN, UTI_MAIL, UTI_NOM, UTI_PRENOM, UTI_PASS, UTI_ADMIN, UTI_AVATAR)
								  VALUES ('".$_REQUEST['login']."', '".$_REQUEST['mail']."', '".$_REQUEST['nom']."', '".$_REQUEST['prenom']."', '".sha1($_REQUEST['password'])."', 0, NULL)");
				header('location: index.php?page=connexion');
			} catch (Exception $e) {
				echo $e -> getMessage();
			}
		}
	}
}

?>