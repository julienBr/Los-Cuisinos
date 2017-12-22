<?php
$data['loginExist'] = '';
$data['isUploadedFile'] = '';
$data['moveUploadedFile'] = '';
$data['inscriptionReussie'] = '';
if(isset($_REQUEST['btnInscription'])) {
	if($_REQUEST['password']==$_REQUEST['confirmation']) {
		$login = $PDO_BDD -> query('SELECT COUNT(*) AS pseudoExist
									FROM t_utilisateur_uti
									WHERE UTI_LOGIN = "'.$_REQUEST['login'].'"') or die(mysql_error());
		$reqlog = $login -> fetch();
		$match = $reqlog['pseudoExist'];
		if($match >= 1) {
			$data['loginExist'] = 1;
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
				if(!is_uploaded_file($file)) {
					$data['isUploadedFile'] = 1;
				}

				// Récupération de l'extension
				$type_file = $_FILES['avatar']['type'];

				// Récupération du nom de fichier
				$name_file = $_FILES['avatar']['name'];
				// Vérifie la copie
				if(!move_uploaded_file($file, $dir.$name_file))
					$data['moveUploadedFile'] = 1;

				$PDO_BDD -> exec("INSERT INTO t_utilisateur_uti (UTI_LOGIN, UTI_MAIL, UTI_NOM, UTI_PRENOM, UTI_PASS, UTI_ADMIN, UTI_AVATAR)
								  VALUES ('".$_REQUEST['login']."', '".$_REQUEST['mail']."', '".$_REQUEST['nom']."', '".$_REQUEST['prenom']."', '".sha1($_REQUEST['password'])."', 0, '".$name_file."')");
				$data['inscriptionReussie'] = 1;
			} catch (Exception $e) {
				echo $e -> getMessage();
			}
		}
	}
}
$smarty->assign("data", $data);
?>