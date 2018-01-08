<?php
try {
	$entree = $PDO_BDD -> query("SELECT *
								   FROM t_recette_rct AS R JOIN tj_cat_rct AS CR ON R.RCT_ID = CR.RCT_ID
														   JOIN t_categorie_cat AS C ON CR.CAT_ID = C.CAT_ID
														   JOIN t_utilisateur_uti AS U ON U.UTI_ID = R.UTI_ID
								   WHERE CR.CAT_ID = 1
								   ORDER BY RAND()
								   LIMIT 1") -> fetch();
	$plat = $PDO_BDD -> query("SELECT *
							   FROM t_recette_rct AS R JOIN tj_cat_rct AS CR ON R.RCT_ID = CR.RCT_ID
													   JOIN t_categorie_cat AS C ON CR.CAT_ID = C.CAT_ID
													   JOIN t_utilisateur_uti AS U ON U.UTI_ID = R.UTI_ID
							   WHERE CR.CAT_ID = 2
							   ORDER BY RAND()
							   LIMIT 1") -> fetch();
	$dessert = $PDO_BDD -> query("SELECT *
								  FROM t_recette_rct AS R JOIN tj_cat_rct AS CR ON R.RCT_ID = CR.RCT_ID
														  JOIN t_categorie_cat AS C ON CR.CAT_ID = C.CAT_ID
														  JOIN t_utilisateur_uti AS U ON U.UTI_ID = R.UTI_ID
								  WHERE CR.CAT_ID = 3
								  ORDER BY RAND()
								  LIMIT 1") -> fetch();
} catch(Exception $e) {
	echo 'Erreur : '.$e -> getMessage().'</br>';
	echo 'N° : '.$e -> getCode();
}
$smarty -> assign("entree", $entree);
$smarty -> assign("plat", $plat);
$smarty -> assign("dessert", $dessert);
$smarty -> assign("data", $data);
?>