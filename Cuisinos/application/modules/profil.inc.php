<?php
if(!isset($_SESSION)) session_start();

$idu=$_GET['idu'];
if(isset($idu)) {
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
}

$smarty->assign("data", $data);
?>