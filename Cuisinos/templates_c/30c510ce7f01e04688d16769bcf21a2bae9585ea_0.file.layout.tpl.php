<?php
/* Smarty version 3.1.30, created on 2017-12-16 16:32:04
  from "C:\wamp64\www\siteCuisine\trunk\Cuisinos\application\views\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a354a8452b300_76400138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30c510ce7f01e04688d16769bcf21a2bae9585ea' => 
    array (
      0 => 'C:\\wamp64\\www\\siteCuisine\\trunk\\Cuisinos\\application\\views\\layout.tpl',
      1 => 1513441892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:application/views/nav/nav_membre.inc.tpl' => 2,
    'file:application/views/nav/nav.inc.tpl' => 1,
    'file:application/views/layout/layout_pied.inc.tpl' => 1,
  ),
),false)) {
function content_5a354a8452b300_76400138 (Smarty_Internal_Template $_smarty_tpl) {
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
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/css/fileinput.min.css">
		<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/plugins/piexif.min.js" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/plugins/sortable.min.js" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/plugins/purify.min.js" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/fileinput.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/locales/LANG.js"><?php echo '</script'; ?>
>

		<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_267975a354a844ff6d3_60917352', 'title');
?>
</title>
	</head>

	<header>
		<div class="container-fluid">
			<?php if (isset($_SESSION['login']) && ($_SESSION['type'] == 0)) {?>
				<?php $_smarty_tpl->_subTemplateRender("file:application/views/nav/nav_membre.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<?php } elseif (isset($_SESSION['login']) && ($_SESSION['type'] == 1)) {?>
				<?php $_smarty_tpl->_subTemplateRender("file:application/views/nav/nav_membre.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_306905a354a845271f4_82493620', 'body');
?>

		</div>
		<?php echo '<script'; ?>
 type="text/javascript" src="https://use.fontawesome.com/babf69eb57.js"><?php echo '</script'; ?>
>
	</body>

	<footer class="footer">
		<div class="container-fluid">
			<?php $_smarty_tpl->_subTemplateRender("file:application/views/layout/layout_pied.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		</div>
	</footer>
</html><?php }
/* {block 'title'} */
class Block_267975a354a844ff6d3_60917352 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Los Cuisinos<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_306905a354a845271f4_82493620 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
