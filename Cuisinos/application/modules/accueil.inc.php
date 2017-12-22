<?php
$data['nbEntrees'] = $PDO_BDD -> query("SELECT COUNT(R.RCT_ID)
										FROM t_recette_rct AS R JOIN tj_cat_rct AS CR ON R.RCT_ID = CR.RCT_ID
																JOIN t_categorie_cat AS C ON CR.CAT_ID = C.CAT_ID
																JOIN t_utilisateur_uti AS U ON U.UTI_ID = R.UTI_ID
										WHERE CR.CAT_ID = 1") -> fetch()[0];
$data['nbPlats'] = $PDO_BDD -> query("SELECT COUNT(R.RCT_ID)
										FROM t_recette_rct AS R JOIN tj_cat_rct AS CR ON R.RCT_ID = CR.RCT_ID
																JOIN t_categorie_cat AS C ON CR.CAT_ID = C.CAT_ID
																JOIN t_utilisateur_uti AS U ON U.UTI_ID = R.UTI_ID
										WHERE CR.CAT_ID = 2") -> fetch()[0];

$data['nbDesserts'] = $PDO_BDD -> query("SELECT COUNT(R.RCT_ID)
										FROM t_recette_rct AS R JOIN tj_cat_rct AS CR ON R.RCT_ID = CR.RCT_ID
																JOIN t_categorie_cat AS C ON CR.CAT_ID = C.CAT_ID
																JOIN t_utilisateur_uti AS U ON U.UTI_ID = R.UTI_ID
										WHERE CR.CAT_ID = 3") -> fetch()[0];

$data['rctAlea'] = array(rand(0, 100), rand(0, 100), rand(0, 100));
$smarty -> assign("data", $data);
?>