<?php
	require_once "configBDD.inc.php";
	if(isset($_REQUEST['submit'])) {
		extract(filter_input_array(INPUT_POST));
		$fichier=$_FILES["userfile"]["name"];
		try {
			$fp = fopen($_FILES["userfile"]["tmp_name"], "r");
		} catch (Exception $e) {
			echo 'Erreur : '.$e -> getMessage().'</br>';
			echo 'N° : '.$e -> getCode();
			exit();
		}

		$cpt = 0;

		while(!feof($fp)) {
			$liste = fgetcsv($fp, 2000, ",");
			//$table = filter_input(INPUT_POST, 'userfile');
			$liste[0]  = (isset($liste[0]))  ? $liste[0]  : NULL;
			$liste[1]  = (isset($liste[1]))  ? $liste[1]  : NULL;
			$liste[2]  = (isset($liste[2]))  ? $liste[2]  : NULL;
			$liste[3]  = (isset($liste[3]))  ? $liste[3]  : NULL;
			$liste[4]  = (isset($liste[4]))  ? $liste[4]  : NULL;
			$liste[5]  = (isset($liste[5]))  ? $liste[5]  : NULL;
			$liste[6]  = (isset($liste[6]))  ? $liste[6]  : NULL;
			$liste[7]  = (isset($liste[7]))  ? $liste[7]  : NULL;
			$liste[8]  = (isset($liste[8]))  ? $liste[8]  : NULL;
			$liste[9]  = (isset($liste[9]))  ? $liste[9]  : NULL;
			$liste[10] = (isset($liste[10])) ? $liste[10] : NULL;
			$liste[11] = (isset($liste[11])) ? $liste[11] : NULL;
			$liste[12] = (isset($liste[12])) ? $liste[12] : NULL;
			$champ0 = $liste[0];
			$champ1 = $liste[1];
			$champ2 = $liste[2];
			$champ3 = $liste[3];
			$champ4 = $liste[4];
			$champ5 = $liste[5];
			$champ6 = $liste[6];
			$champ7 = $liste[7];
			$champ8 = $liste[8];
			$champ9 = $liste[9];
			$champ10 = $liste[10];
			$champ11 = $liste[11];
			$champ12 = $liste[12];
			if($champ0 != '') {
				$cpt++;
				try {
					$PDO_BDD -> exec("INSERT INTO t_recette_rct(RCT_ID, RCT_DATE, RCT_TITRE, RCT_DESCRIPTION, RCT_TEMPS_PREPARATION, RCT_TEMPS_CUISSON, RCT_TEMPS_REPOS, RCT_DIFFICULTE, RCT_COUT, RCT_STATUT, RCT_ILLUSTRATION, UTI_ID, RCT_NBPERSONNE)
									  VALUES('".$champ0."', '".$champ1."', '".$champ2."', '".$champ3."', '".$champ4."', '".$champ5."', '".$champ6."', '".$champ7."', '".$champ8."', '".$champ9."', '".$champ10."', '".$champ11."', '".$champ12."')");
				} catch (Exception $e) {
					echo 'Erreur : '.$e -> getMessage().'</br>';
					echo 'N° : '.$e -> getCode();
					exit();
				}
			}
		}
		fclose($fp);
		/*try {
			$annuaire['nbPersonnes']=$PDO_BDD->query('select count(ID_PERSONNES)
													  from t_personnes')->fetch()[0];
			$req=$PDO_BDD->prepare('select *
									from t_personnes');
			$req->execute();
		} catch (Exception $e) {
			echo 'Erreur : '.$e -> getMessage().'</br>';
			echo 'N° : '.$e -> getCode();
		}
		$i=0;
		while($lignes=$req->fetch(PDO::FETCH_NUM)) {
			$annuaire['PRENOM_PERSONNES'][$i] = $lignes[1];
			$annuaire['NOM_PERSONNES'][$i]    = $lignes[2];
			$annuaire['MAIL_PERSONNES'][$i]   = $lignes[3];
			$annuaire['GENRE_PERSONNES'][$i]  = $lignes[4];
			$annuaire['PROFESSION_PERSONNES'][$i] = $lignes[5];
			$i++;
		}*/
		?>
		<!DOCTYPE HTML>
		<html lang="fr">
			<head>
				<meta charset="utf-8"/>
				<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
				<meta name="viewport"              content="width=device-width, initial-scale=1.0"/>
				<meta name="author"                content="Bringard Julien"/>
				<meta name="description"           content="Prototype compteur"/>
				<meta name="keywords"              content="Programmation, Informatique"/>

				<!-- Latest compiled and minified CSS -->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

				<!-- Optional theme -->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

				<!-- Latest compiled and minified JavaScript -->
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

				<title>TP3</title>
			</head>

			<body>
				<div class="container">
					<div class="row main">
						<div class="main-login main-center">
							<h3 align="center">Annuaire</h3>
							<table align="center">
								<tr>
									<td style="width: 200px; text-align: center; border: 1px solid #333;"><strong>Prénom</strong></td>
									<td style="width: 200px; text-align: center; border: 1px solid #333;"><strong>Nom</strong></td>
									<td style="width: 200px; text-align: center; border: 1px solid #333;"><strong>Mail</strong></td>
									<td style="width: 200px; text-align: center; border: 1px solid #333;"><strong>Genre</strong></td>
									<td style="width: 200px; text-align: center; border: 1px solid #333;"><strong>Profession</strong></td>
								</tr>
								<?php
									for($i = 1; $i < $annuaire['nbPersonnes']; $i++) {
										echo "<tr>
											      <td style=\"text-align: center; border: 1px solid #333;\">".$annuaire['PRENOM_PERSONNES'][$i]."</td>
											      <td style=\"text-align: center; border: 1px solid #333;\">".$annuaire['NOM_PERSONNES'][$i]."</td>
											      <td style=\"text-align: center; border: 1px solid #333;\">".$annuaire['MAIL_PERSONNES'][$i]."</td>
											      <td style=\"text-align: center; border: 1px solid #333;\">".$annuaire['GENRE_PERSONNES'][$i]."</td>
											      <td style=\"text-align: center; border: 1px solid #333;\">".$annuaire['PROFESSION_PERSONNES'][$i]."</td>
											  </tr>";
										$i++;
									}
								?>
							</table>
						</div>
					</div>
				</div>
			</body>
		</html> <?php
	}
	else { echo '
		<!DOCTYPE HTML>
		<html lang="fr">
			<head>
				<meta charset="utf-8"/>
				<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
				<meta name="viewport"              content="width=device-width, initial-scale=1.0"/>
				<meta name="author"                content="Bringard Julien"/>
				<meta name="description"           content="Prototype compteur"/>
				<meta name="keywords"              content="Programmation, Informatique"/>

				<!-- Latest compiled and minified CSS -->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

				<!-- Optional theme -->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

				<!-- Latest compiled and minified JavaScript -->
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

				<title>TP3</title>
			</head>

			<body>
				<div class="container">
					<div class="row main">
						<div class="main-login main-center">
							<h3 align="center">Veuillez choisir un fichier *.csv :</h3>
							<form action="" enctype="multipart/form-data" method="post">
								<div class="form-group"
									<div align="center" class="button form-group col-lg-12">
										<input class="col-lg-offset-3 col-lg-3" name="userfile" type="file" value="table" />
										<input class="col-lg-3" name="submit" type="submit" value="Importer"/>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</body>
		</html>';
	}
?>