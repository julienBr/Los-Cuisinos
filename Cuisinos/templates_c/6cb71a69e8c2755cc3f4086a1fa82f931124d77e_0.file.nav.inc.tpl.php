<?php
/* Smarty version 3.1.30, created on 2017-10-03 09:07:24
  from "C:\wamp64\www\siteCuisine\trunk\Cuisinos\application\views\nav\nav.inc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d3534c7549b5_18279142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cb71a69e8c2755cc3f4086a1fa82f931124d77e' => 
    array (
      0 => 'C:\\wamp64\\www\\siteCuisine\\trunk\\Cuisinos\\application\\views\\nav\\nav.inc.tpl',
      1 => 1507015727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d3534c7549b5_18279142 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<ul class="nav navbar-nav">
			<li><a href="index.php?page=accueil"><span class="glyphicon glyphicon-home"></span> Accueil</a></li>
			<li><a href="index.php?page=recette"><span class="glyphicon glyphicon-cutlery"></span> Recettes</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="index.php?page=inscription"><span class="glyphicon glyphicon-user"></span> Sign In</a></li>
			<li><a href="index.php?page=connexion"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
		</ul>
	</div>
</nav><?php }
}
