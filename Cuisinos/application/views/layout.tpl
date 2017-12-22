<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
		<meta name="viewport"              content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author"                content="Bringard Julien / Ducreux Alexis">
		<meta name="description"           content="Site de partage de recettes de cuisine">
		<meta name="keywords"              content="Programmation, Informatique, projetPHP">

		<link rel="stylesheet" type="text/css" href="asset/css/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="asset/css/fileinput.css">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/plugins/piexif.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/plugins/sortable.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/plugins/purify.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
		<script type="text/javascript" src="asset/js/fileinput.js"></script>
		<script type="text/javascript" src="https://use.fontawesome.com/babf69eb57.js"></script>
		<script type="text/javascript" src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/alertify.min.js"></script>
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/alertify.min.css">
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/themes/default.min.css">
		<title>{block name=title}Los Cuisinos{/block}</title>
	</head>

	<header>
		<div class="container-fluid">
			{if isset($smarty.session.login) && ($smarty.session.typeUser == 0)}
				{include 'application/views/nav/nav_membre.inc.tpl'}
			{elseif isset($smarty.session.login) && ($smarty.session.typeUser == 1)}
				{include 'application/views/nav/nav_admin.inc.tpl'}
			{else}
				{include 'application/views/nav/nav.inc.tpl'}
			{/if}
		</div>
	</header>

	<body>
		<div class="container-fluid">
			{block name=body}{/block}
			{if $data['connexionReussie'] == '1'}
				<script>alertify.success('Connexion réussie.');</script>
			{elseif $data['connexionReussie'] == '0'}
				<script>alertify.error('Erreur de connection : identifiant ou mot de passe érroné.');</script>
			{elseif $data['deconnexionReussie'] == '1'}
				<script>alertify.success('A Bientot !');</script>
			{/if}
		</div>
	</body>

	<footer class="footer">
		<div class="container-fluid">
			{include 'application/views/layout/layout_pied.inc.tpl'}
		</div>
	</footer>
</html>