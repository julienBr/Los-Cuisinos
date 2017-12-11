<?php
/* Smarty version 3.1.30, created on 2017-12-10 15:29:41
  from "C:\wamp64\www\siteCuisine\trunk\Cuisinos\application\views\nav\nav.inc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2d52e511a3b9_13059115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cb71a69e8c2755cc3f4086a1fa82f931124d77e' => 
    array (
      0 => 'C:\\wamp64\\www\\siteCuisine\\trunk\\Cuisinos\\application\\views\\nav\\nav.inc.tpl',
      1 => 1512919685,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2d52e511a3b9_13059115 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
	<nav class="col-sm-12 navbar-light bg-light">
		<div class="row">
			<a class="col-sm-2 navbar-brand" href="index.php?page=accueil">
				<img src="asset/images/icon.png" width="40" height="40" class="icon" alt="icon.png"><span class="losCuisinos"><b>Los Cuisinos</b></span>
			</a>
			<div class="col-sm-3 btn-group" role="group">
				<button type="button" class="btn btn-secondary" onclick="window.location.href='index.php?page=accueil'"><i class="fa fa-home"></i> Accueil</button>
				<button type="button" class="btn btn-secondary" onclick="window.location.href='index.php?page=recette'"><i class="fa fa-cutlery"></i> Recettes</button>
			</div>
			<div class="col-sm">
				<div class="row">
					<form class="col-sm-7 form-inline my-2 my-lg-0">
						<input class="inputSearch form-control mr-sm-2" type="search" placeholder="une recette, un ingrédient..." aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
					</form>
					<div class="col-sm btn-group" role="group">
						<button type="button" class="btn btn-secondary" onclick="window.location.href='index.php?page=inscription'"><i class="fa fa-user-circle-o"></i> S'inscrire</button>
						<button type="button" class="btn btn-secondary" onclick="window.location.href='index.php?page=connexion'"><i class="fa fa-sign-in"></i> Se connecter</button>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<nav class="accroche col-sm-12 navbar-light bg-light">
		<p><i>" Bien manger, c'est le début du bonheur "</i></p>
	</nav>
</div><?php }
}
