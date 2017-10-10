<?php
	$idc=$_GET['idc'];
	if(isset($idc)) {
		try {
			$req=$PDO_BDD->prepare('select *
									from t_recette_rct as R join tj_cat_rct as CR ON R.RCT_ID = CR.RCT_ID
															join t_categorie_cat as C ON CR.CAT_ID = C.CAT_ID
															join t_utilisateur_uti as U on U.UTI_ID = R.UTI_ID
									where CR.CAT_ID = '.$idc.'
									order by RCT_TITRE asc');
			$req->execute();
		} catch (Exception $e) {
			echo 'Erreur : '.$e -> getMessage().'</br>';
			echo 'N° : '.$e -> getCode();
		}
		$i=0;
		while($lignes=$req->fetch(PDO::FETCH_NUM)) {
			$data['RCT_ID'][$i]                = $lignes[0];
			$data['RCT_TITRE'][$i]             = $lignes[2];
			$data['RCT_DESCRIPTION'][$i]       = $lignes[3];
			$data['RCT_STATUT'][$i]            = $lignes[9];
			$data['RCT_ILLUSTRATION'][$i]      = $lignes[10];
			$data['CAT_LABEL']                 = $lignes[16];
			$data['CAT_DESCRIPTION']           = $lignes[17];
			$data['UTI_LOGIN'][$i]             = $lignes[20];
			$i++;
		}
		try {
			$data['nbRecette']=$PDO_BDD->query('select count(RCT_ID)
												from tj_cat_rct
												where CAT_ID= '.$idc)->fetch()[0];
		}catch (Exception $e) {
			echo 'Erreur : '.$e -> getMessage().'</br>';
			echo 'N° : '.$e -> getCode();
		}
		
		try {
			$req=$PDO_BDD->prepare('select UTI_LOGIN
									from t_utilisateur_uti');
			$req->execute();
		} catch (Exception $e) {
			echo 'Erreur : '.$e -> getMessage().'</br>';
			echo 'N° : '.$e -> getCode();
		}
		while($lignes=$req->fetch(PDO::FETCH_NUM)) {
			$data['UTI_LOGIN'][$i]                = $lignes[0];
			$i++;
		}
		
		 $smarty->assign("data", $data);
	}
?>