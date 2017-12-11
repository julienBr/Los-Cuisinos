<?php
	try {
		$data['recetteCat']=$PDO_BDD->query('select CAT_LABEL, CAT_ILLUSTRATION, CAT_ID, CAT_DESCRIPTION
											 from t_categorie_cat')->fetchAll();
	} catch (Exception $e) {
		echo 'Erreur : '.$e -> getMessage().'</br>';
		echo 'N° : '.$e -> getCode();
	}
	$smarty->assign("data", $data);
?>