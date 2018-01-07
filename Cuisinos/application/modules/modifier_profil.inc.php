<?php
require 'private.inc.php';
if(!isset($_SESSION)) session_start();

$idu=$_GET['idu'];
if(isset($idu)) {
	$data['mdpActuel'] = '';
	$data['isUploadedFile'] = '';
	$data['moveUploadedFile'] = '';
	try {
		$req=$PDO_BDD->prepare('SELECT *
								FROM t_utilisateur_uti
								WHERE UTI_ID = '.$idu);
		$req->execute();
	} catch (Exception $e) {
		echo 'Erreur : '.$e -> getMessage().'</br>';
		echo 'N° : '.$e -> getCode();
	}
	$i=0;
	while($lignes=$req->fetch(PDO::FETCH_NUM)) {
		$data['UTI_ID']     = $lignes[0];
		$data['UTI_LOGIN']  = $lignes[1];
		$data['UTI_MAIL']   = $lignes[2];
		$data['UTI_NOM']    = $lignes[3];
		$data['UTI_PRENOM'] = $lignes[4];
		$data['UTI_PASS']   = $lignes[5];
		$data['UTI_ADMIN']  = $lignes[6];
		$data['UTI_AVATAR'] = $lignes[7];
		$i++;
	}

	if(isset($_REQUEST['btnModProfil'])) {
		if(sha1($_REQUEST['passwordAct'])==$data['UTI_PASS']) {
			try {
				$login  = (!empty($_REQUEST['login'])  ? $_REQUEST['login']  : $data['UTI_LOGIN']);
				$mail   = (!empty($_REQUEST['mail'])   ? $_REQUEST['mail']   : $data['UTI_MAIL']);
				$nom    = (!empty($_REQUEST['nom'])    ? $_REQUEST['nom']    : $data['UTI_NOM']);
				$prenom = (!empty($_REQUEST['prenom']) ? $_REQUEST['prenom'] : $data['UTI_PRENOM']);

				rename('media/'.$data['UTI_LOGIN'], 'media/'.$login);
				
				if(!empty($_FILES['avatar']['name'])) {
					$dir = "media/$login/";
					unlink($dir.$data['UTI_AVATAR']);
					$avatar = $_FILES['avatar']['name'];
					$file = $_FILES['avatar']['tmp_name'];
					if(!is_uploaded_file($file)) $data['isUploadedFile'] = 1;
					$type_file = $_FILES['avatar']['type'];
					if(!move_uploaded_file($file, $dir.$avatar)) $data['moveUploadedFile'] = 1;
				}
				else $avatar = $data['UTI_AVATAR'];
				
				if(!empty($_REQUEST['newMDP']) && !empty($_REQUEST['confirmation'])) {
					if($_REQUEST['newMDP'] == $_REQUEST['confirmation'])
						$newMDP = sha1($_REQUEST['newMDP']);
				}
				else $newMDP = $data['UTI_PASS'];
				
				$PDO_BDD -> exec("UPDATE t_utilisateur_uti
								  SET UTI_LOGIN = '$login', UTI_MAIL = '$mail', UTI_NOM = '$nom', UTI_PRENOM = '$prenom', UTI_PASS = '$newMDP', UTI_AVATAR = '$avatar'
								  WHERE UTI_ID = '$idu'");
				header('Location: index.php?page=profil&idu='.$data['UTI_ID']);
			} catch(Exception $e) {
				echo 'Erreur : '.$e -> getMessage().'</br>';
				echo 'N° : '.$e -> getCode();
			}
		}
		else {
			$data['mdpActuel'] = 1;
		}
	}
}
$smarty->assign("data", $data);
?>