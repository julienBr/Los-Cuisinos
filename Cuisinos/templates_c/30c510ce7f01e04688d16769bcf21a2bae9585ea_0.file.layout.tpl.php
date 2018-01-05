<?php
/* Smarty version 3.1.30, created on 2018-01-03 16:38:39
  from "C:\wamp64\www\siteCuisine\trunk\Cuisinos\application\views\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4d070f4ed2c8_66141436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30c510ce7f01e04688d16769bcf21a2bae9585ea' => 
    array (
      0 => 'C:\\wamp64\\www\\siteCuisine\\trunk\\Cuisinos\\application\\views\\layout.tpl',
      1 => 1514997442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:application/views/nav/nav_membre.inc.tpl' => 1,
    'file:application/views/nav/nav_admin.inc.tpl' => 1,
    'file:application/views/nav/nav.inc.tpl' => 1,
    'file:application/views/layout/layout_pied.inc.tpl' => 1,
  ),
),false)) {
function content_5a4d070f4ed2c8_66141436 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
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
		<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/plugins/piexif.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/plugins/sortable.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/plugins/purify.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="asset/js/fileinput.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="https://use.fontawesome.com/babf69eb57.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/alertify.min.js"><?php echo '</script'; ?>
>
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/alertify.min.css">
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/themes/default.min.css">
		<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180795a4d070f41ae48_63457216', 'title');
?>
</title>
	</head>

	<header>
		<div class="container-fluid">
			<?php if (isset($_SESSION['login']) && ($_SESSION['typeUser'] == 0)) {?>
				<?php $_smarty_tpl->_subTemplateRender("file:application/views/nav/nav_membre.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<?php } elseif (isset($_SESSION['login']) && ($_SESSION['typeUser'] == 1)) {?>
				<?php $_smarty_tpl->_subTemplateRender("file:application/views/nav/nav_admin.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<?php } else { ?>
				<?php $_smarty_tpl->_subTemplateRender("file:application/views/nav/nav.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<?php }?>
		</div>
	</header>

	<body>
		<div class="container-fluid">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132925a4d070f4a0577_38706942', 'body');
?>

			<?php if ($_smarty_tpl->tpl_vars['data']->value['connexionReussie'] == '1') {?>
				<?php echo '<script'; ?>
>alertify.success('Connexion réussie.');<?php echo '</script'; ?>
>
			<?php } elseif ($_smarty_tpl->tpl_vars['data']->value['connexionReussie'] == '0') {?>
				<?php echo '<script'; ?>
>alertify.error('Erreur de connection : identifiant ou mot de passe érroné.');<?php echo '</script'; ?>
>
			<?php } elseif ($_smarty_tpl->tpl_vars['data']->value['deconnexionReussie'] == '1') {?>
				<?php echo '<script'; ?>
>alertify.success('A Bientot !');<?php echo '</script'; ?>
>
			<?php }?>
		</div>
	</body>

	<footer class="footer">
		<div class="container-fluid">
			<?php $_smarty_tpl->_subTemplateRender("file:application/views/layout/layout_pied.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		</div>
	</footer>
</html><?php }
/* {block 'title'} */
class Block_180795a4d070f41ae48_63457216 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Los Cuisinos<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_132925a4d070f4a0577_38706942 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
