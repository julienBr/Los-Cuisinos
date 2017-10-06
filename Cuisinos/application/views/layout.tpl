<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"/>
		<meta name="viewport"              content="width=device-width, initial-scale=1.0"/>
		<meta name="author"                content="Bringard Julien / Ducreux Alexis"/>
		<meta name="description"           content="Site de partage de recettes de cuisine"/>
		<meta name="keywords"              content="Programmation, Informatique, projetPHP"/>

		<link rel="stylesheet" type="text/css" href="asset/css/style.css">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<title>{block name=title}Los Cuisinos{/block}</title>
	</head>

	<header>
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
					{include 'application/views/layout/layout_entete.inc.tpl'}
					{include 'application/views/nav/nav.inc.tpl'}
				</div>
			</div>
		</div>
	</header>

	<body>
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
					{block name=body}{/block}
				</div>
			</div>
		</div>
	</body>

	<footer>
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
					{include 'application/views/layout/layout_pied.inc.tpl'}
				</div>
			</div>
		</div>
	</footer>
</html>