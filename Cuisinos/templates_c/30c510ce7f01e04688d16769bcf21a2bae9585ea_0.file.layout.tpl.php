<?php
/* Smarty version 3.1.30, created on 2017-12-10 18:24:25
  from "C:\wamp64\www\siteCuisine\trunk\Cuisinos\application\views\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2d7bd9c4fd09_66077841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30c510ce7f01e04688d16769bcf21a2bae9585ea' => 
    array (
      0 => 'C:\\wamp64\\www\\siteCuisine\\trunk\\Cuisinos\\application\\views\\layout.tpl',
      1 => 1512930264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:application/views/nav/nav.inc.tpl' => 1,
    'file:application/views/layout/layout_pied.inc.tpl' => 1,
  ),
),false)) {
function content_5a2d7bd9c4fd09_66077841 (Smarty_Internal_Template $_smarty_tpl) {
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

		<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_325285a2d7bd9c40154_63711449', 'title');
?>
</title>
	</head>

	<header>
		<div class="container-fluid">
			<?php $_smarty_tpl->_subTemplateRender("file:application/views/nav/nav.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		</div>
	</header>

	<body>
		<div class="container-fluid">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107615a2d7bd9c4c053_74330582', 'body');
?>

		</div>
		<?php echo '<script'; ?>
 type="text/javascript" src="https://use.fontawesome.com/babf69eb57.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"><?php echo '</script'; ?>
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
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/fileinput.min.js"><?php echo '</script'; ?>
>
	</body>

	<footer class="footer">
		<div class="container-fluid">
			<!--<?php $_smarty_tpl->_subTemplateRender("file:application/views/layout/layout_pied.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
-->
		</div>
	</footer>
</html><?php }
/* {block 'title'} */
class Block_325285a2d7bd9c40154_63711449 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Los Cuisinos<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_107615a2d7bd9c4c053_74330582 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
