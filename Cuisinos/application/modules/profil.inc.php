<?php
require 'private.inc.php';

if(!isset($_SESSION)) session_start();

if(isset($_GET['idu'])) {
	$idu=$_GET['idu'];
	$data['isUploadedFile']   = "";
	$data['moveUploadedFile'] = "";
	try {
		$data['categorie'] = $PDO_BDD -> query('SELECT *
												FROM t_categorie_cat') -> fetchall();
	} catch (Exception $e) {
		echo 'Erreur : '.$e -> getMessage().'</br>';
		echo 'N° : '.$e -> getCode();
	}

	try {
		$data['unites'] = $PDO_BDD -> query('SELECT *
											 FROM t_unite_uni
											 WHERE UTI_ID = '.$idu) -> fetchall();
	} catch (Exception $e) {
		echo 'Erreur : '.$e -> getMessage().'</br>';
		echo 'N° : '.$e -> getCode();
	}
	
	try {
		$data['ingredients'] = $PDO_BDD -> query('SELECT *
										 FROM t_ingredient_igd
										 WHERE UTI_ID = '.$idu) -> fetchall();
	} catch (Exception $e) {
		echo 'Erreur : '.$e -> getMessage().'</br>';
		echo 'N° : '.$e -> getCode();
	}

	try {
		$data['nbRecette']=$PDO_BDD->query('SELECT COUNT(RCT_ID)
											FROM t_recette_rct
											WHERE UTI_ID = '.$idu) -> fetch()[0];
	} catch (Exception $e) {
		echo 'Erreur : '.$e -> getMessage().'</br>';
		echo 'N° : '.$e -> getCode();
	}

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

	try {
		$data['listeRecettes'] = $PDO_BDD -> query('SELECT *
													FROM t_recette_rct AS R JOIN tj_cat_rct AS CR ON R.RCT_ID = CR.RCT_ID
																			JOIN t_categorie_cat as C on CR.CAT_ID = C.CAT_ID
													WHERE UTI_ID = '.$idu) -> fetchall();
	} catch(Exception $e) {
		echo 'Erreur : '.$e -> getMessage().'</br>';
		echo 'N° : '.$e -> getCode();
	}

	if(isset($_REQUEST['ajoutRecette'])) {
		$login = $data['UTI_LOGIN'];
		$uti_id = $data['UTI_ID'];
		date_default_timezone_set('Europe/Paris');
		$date = date("Y-m-d 00:00:00");
		$titre = $_REQUEST['titre'];
		$description = addslashes($_REQUEST['description']);
		$preparation = addslashes($_REQUEST['preparation']);
		$tmpPrepa    = $_REQUEST['tmpPrepa'];
		$tmpCuisson  = (isset($_REQUEST['tmpCuisson']) ? $_REQUEST['tmpCuisson'] : "NULL");
		$tmpRepos    = (isset($_REQUEST['tmpRepos'])   ? $_REQUEST['tmpRepos']   : "NULL");
		$difficulte  = $_REQUEST['difficulte'];
		$cout        = $_REQUEST['cout'];
		$statut      = "soumise";
		$nbPersonne  = $_REQUEST['nbPersonne'];
	
		$dir = "media/$login/";
		$illustration = $_FILES['avatar']['name'];
		$file = $_FILES['avatar']['tmp_name'];
		if(!is_uploaded_file($file)) $data['isUploadedFile'] = 1;
		$type_file = $_FILES['avatar']['type'];
		if(!move_uploaded_file($file, $dir.$illustration)) $data['moveUploadedFile'] = 1;

		try {
			$PDO_BDD -> exec("INSERT INTO t_recette_rct (RCT_ID, RCT_DATE, RCT_TITRE, RCT_DESCRIPTION, RCT_PREPARATION, RCT_TEMPS_PREPARATION, RCT_TEMPS_CUISSON, RCT_TEMPS_REPOS, RCT_DIFFICULTE, RCT_COUT, RCT_STATUT, RCT_ILLUSTRATION, UTI_ID, RCT_NBPERSONNE)
							  VALUES (DEFAULT, '$date', '$titre', '$description', '$preparation', '$tmpPrepa', '$tmpCuisson', '$tmpRepos', '$difficulte', '$cout', '$statut', '$illustration', '$uti_id', '$nbPersonne')");
			$rct_id = $PDO_BDD -> query("SELECT RCT_ID
										 FROM t_recette_rct
										 WHERE RCT_TITRE = '$titre'") -> fetch()[0];
		} catch(Exception $e) {
			echo 'Erreur : '.$e -> getMessage().'</br>';
			echo 'N° : '.$e -> getCode();
		}

		for($i=0; $i<$_REQUEST['nbIngredient']; $i++) {
			if(isset($_REQUEST['ingredients'.$i])) {
				$uni_label[$i] = $_REQUEST['ingredients'.$i];
				try {
					$uni_id[$i] = $PDO_BDD -> query("SELECT UNI_ID
													 FROM t_unite_uni
													 WHERE UNI_LABEL = '$uni_label[$i]'") -> fetch()[0];
				} catch(Exception $e) {
					echo 'Erreur : '.$e -> getMessage().'</br>';
					echo 'N° : '.$e -> getCode();
				}
			}
			if(isset($_REQUEST['qteIngredient'.$i])) {
				$igd_rct_uni_quantite[$i] = $_REQUEST['qteIngredient'.$i];
			}
			if(!empty($_REQUEST['ingredient'.$i])) {
				$igd_label[$i] = addslashes($_REQUEST['ingredient'.$i]);
				try {
					$PDO_BDD -> exec("INSERT INTO t_ingredient_igd (IGD_ID, IGD_LABEL, IGD_DESCRIPTION, IGD_ILLUSTRATION, IGD_VALIDE, UTI_ID)
									  VALUEs (DEFAULT, '$igd_label[$i]', NULL, NULL, 1, '$uti_id')");
					$igd_id[$i] = $PDO_BDD -> query("SELECT IGD_ID
													 FROM t_ingredient_igd
													 WHERE IGD_LABEL = '$igd_label[$i]'") -> fetch()[0];
				} catch(Exception $e) {
					echo 'Erreur : '.$e -> getMessage().'</br>';
					echo 'N° : '.$e -> getCode();
				}
				try {
					$PDO_BDD -> exec("INSERT INTO tj_igd_rct_uni (RCT_ID, IGD_ID, UNI_ID, IGD_RCT_UNI_QUANTITE)
									  VALUES ('$rct_id', '$igd_id[$i]', '$uni_id[$i]', '$igd_rct_uni_quantite[$i]')");
					header('Location: index.php?page=profil&idu='.$idu);
				} catch(Exception $e) {
					echo 'Erreur : '.$e -> getMessage().'</br>';
					echo 'N° : '.$e -> getCode();
				}
			}
		}
	}

	if(isset($_GET['idr'])) {
		$idr=$_GET['idr'];
		$recette = $PDO_BDD -> query('SELECT *
									  FROM t_recette_rct
									  WHERE RCT_ID = '.$idr) -> fetch();
		$dir = "media/".$data['UTI_LOGIN']."/";
		unlink($dir.$recette['RCT_ILLUSTRATION']);
		$PDO_BDD->exec("DELETE FROM tj_cat_rct
						WHERE RCT_ID = ".$idr);
		$PDO_BDD->exec("DELETE FROM tj_igd_rct_uni
						WHERE RCT_ID = ".$idr);
		$PDO_BDD->exec("DELETE FROM t_commentaire_com
						WHERE RCT_ID = ".$idr);
		$PDO_BDD->exec("DELETE FROM t_recette_rct
						WHERE RCT_ID = ".$idr);
		header('Location: index.php?page=profil&idu='.$idu);
	}
}

$smarty->assign("data", $data);
?>