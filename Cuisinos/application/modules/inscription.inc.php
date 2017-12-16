<?php
if(isset($_REQUEST['submit'])) {
	$login = $PDO_BDD -> query('SELECT COUNT(*) AS pseudoExist
								FROM t_utilisateur_uti
								WHERE UTI_LOGIN = "'.$_REQUEST['login'].'"') or die(mysql_error());
	$reqlog = $login -> fetch();
	$match = $reqlog['pseudoExist'];
	if($match >= 1) {
		echo "<script>
				  alert(\"Ce login existe déjà...\");
			      document.location.href = \"index.php?page=inscription\";
			  </script>";
	}
	else {
		try {
			// Création du répertoire
			$login = $_REQUEST['login'];
			$dir = 'media/'.$login.'/';
			if(!is_dir($dir)) mkdir($dir);

			// Récupération de l'avatar
			$file = $_FILES['avatar']['tmp_name'];
			// Vérifie le fichier
			if(!is_uploaded_file($file))
				echo "<script>
						  alert(\"Fichier introuvable.\");
						  document.location.href = \"index.php?page=inscription\";
					  </script>";
			
			// Récupération de l'extension
			$type_file = $_FILES['avatar']['type'];
			// Vérifie l'extention
			if(!strstr($type_file, 'jpg') && !strstr($type_file, 'jpeg') && !strstr($type_file, 'png'))
				echo "<script>
						  alert(\"Fichier non conforme. (conforme : .jgp, .jpeg, .png\");
						  document.location.href = \"index.php?page=inscription\";
					  </script>";

			// Récupération du nom de fichier
			$name_file = $_FILES['avatar']['name'];
			// Vérifie la copie
			if(!move_uploaded_file($file, $dir.$name_file))
				echo "<script>
						  alert(\"Impossible de copier le fichier dans $dir\");
						  document.location.href = \"index.php?page=inscription\";
					  </script>";

			$PDO_BDD -> exec("INSERT INTO t_utilisateur_uti (UTI_LOGIN, UTI_MAIL, UTI_NOM, UTI_PRENOM, UTI_PASS, UTI_ADMIN, UTI_AVATAR)
							  VALUES ('".$_REQUEST['login']."', '".$_REQUEST['mail']."', '".$_REQUEST['nom']."', '".$_REQUEST['prenom']."', '".sha1($_REQUEST['password'])."', 0, '".$name_file."')");
			echo "<script>
					  alert(\"Vous vous êtes inscris avec succès\");
					  document.location.href=\"index.php?page=accueil\";
				  </script>";
		} catch (Exception $e) {
			echo $e -> getMessage();
		}
	}
}
?>