<?php
/* Smarty version 3.1.30, created on 2017-12-08 18:54:20
  from "C:\wamp64\www\siteCuisine\trunk\Cuisinos\application\views\nav\nav.inc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2adfdc715d02_10075240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cb71a69e8c2755cc3f4086a1fa82f931124d77e' => 
    array (
      0 => 'C:\\wamp64\\www\\siteCuisine\\trunk\\Cuisinos\\application\\views\\nav\\nav.inc.tpl',
      1 => 1512759258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2adfdc715d02_10075240 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="col-sm-12 navbar navbar-light bg-light">
	<ul class="nav">
		<li class="nav-item"><a class="nav-link active" href="index.php?page=accueil"><span class="glyphicon glyphicon-home"></span> Accueil</a></li>
		<li class="nav-item"><a class="nav-link" href="index.php?page=recette"><span class="glyphicon glyphicon-cutlery"></span> Recettes</a></li>
	</ul>
	<ul class="nav justify-content-end">
		<li class="nav-item"><a class="nav-link" href="index.php?page=inscription"><span class="glyphicon glyphicon-user"></span> Sign In</a></li>
		<li class="nav-item"><a class="nav-link" href="index.php?page=connexion"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
	</ul>
</nav>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="index.php?page=accueil">
		<img src="asset/images/icon.png" width="30" height="30" class="d-inline-block align-top" alt="icon.png">
			Los Cuisinos
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active"><a class="nav-link" href="index.php?page=accueil">Accueil <span class="sr-only">(current)</span></a></li>
			<li class="nav-item"><a class="nav-link" href="#">Link</a></li>
			<li class="nav-item"><a class="nav-link disabled" href="#">Disabled</a></li>
		</ul>
		<div class="nav justify-content-end">
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</div>
</nav><?php }
}
