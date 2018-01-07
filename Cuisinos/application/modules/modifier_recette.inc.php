<?php
require 'private.inc.php';
if(!isset($_SESSION)) session_start();
if(isset($_GET['idu'])) $idu = $_GET['idu'];
if(isset($_GET['idr'])) {
	$idr = $_GET['idr'];
	$data['isUploadedFile'] = '';
	$data['moveUploadedFile'] = '';
	try {
		$rct = $PDO_BDD -> query('SELECT *
								   FROM t_recette_rct
								   WHERE RCT_ID = '.$idr) -> fetch();
	} catch(Exception $e) {
		echo 'Erreur : '.$e -> getMessage().'</br>';
		echo 'N° : '.$e -> getCode();
	}

	try {
		$uti = $PDO_BDD -> query('SELECT *
								   FROM t_utilisateur_uti
								   WHERE UTI_ID = '.$idu) -> fetch();
	} catch(Exception $e) {
		echo 'Erreur : '.$e -> getMessage().'</br>';
		echo 'N° : '.$e -> getCode();
	}

	if(isset($_REQUEST['btnModRCT'])) {
		try {
			date_default_timezone_set('Europe/Paris');
			$date        = date("Y-m-d 00:00:00");
			$titre       = addslashes($_REQUEST['titre']);
			$description = addslashes($_REQUEST['description']);
			$preparation = addslashes($_REQUEST['preparation']);
			$tmpPrepa    = $_REQUEST['tmpPrepa'];
			$tmpCuisson  = (!empty($_REQUEST['tmpCuisson']) ? $_REQUEST['tmpCuisson'] : "NULL");
			$tmpRepos    = (!empty($_REQUEST['tmpRepos'])   ? $_REQUEST['tmpRepos']   : "NULL");
			$difficulte  = $_REQUEST['difficulte'];
			$cout        = $_REQUEST['cout'];
			$statut      = "soumise";
			$nbPersonne  = $_REQUEST['nbPersonne'];
			$login       = $uti['UTI_LOGIN'];

			if(!empty($_FILES['avatar']['name'])) {
				$dir = "media/$login/";
				unlink($dir.$rct['RCT_ILLUSTRATION']);
				$illustration = $_FILES['avatar']['name'];
				$file = $_FILES['avatar']['tmp_name'];
				if(!is_uploaded_file($file)) $data['isUploadedFile'] = 1;
				$type_file = $_FILES['avatar']['type'];
				if(!move_uploaded_file($file, $dir.$illustration)) $data['moveUploadedFile'] = 1;
			}
			else $illustration = $rct['RCT_ILLUSTRATION'];

			$PDO_BDD -> exec("UPDATE t_recette_rct
							  SET RCT_DATE = '$date', RCT_TITRE = '$titre', RCT_DESCRIPTION = '$description', RCT_PREPARATION = '$preparation', RCT_TEMPS_PREPARATION = '$tmpPrepa', RCT_TEMPS_CUISSON = '$tmpCuisson', RCT_TEMPS_REPOS = '$tmpRepos', RCT_DIFFICULTE = '$difficulte', RCT_COUT = '$cout', RCT_STATUT = '$statut', RCT_ILLUSTRATION = '$illustration', RCT_NBPERSONNE = '$nbPersonne'
							  WHERE RCT_ID = '$idr'");
			header('Location: index.php?page=profil&idu='.$idu);
		} catch(Exception $e) {
			echo 'Erreur : '.$e -> getMessage().'</br>';
			echo 'N° : '.$e -> getCode();
		}
	}
}

$smarty->assign("data", $data);
$smarty->assign("rct", $rct);
$smarty->assign("uti", $uti);
?>