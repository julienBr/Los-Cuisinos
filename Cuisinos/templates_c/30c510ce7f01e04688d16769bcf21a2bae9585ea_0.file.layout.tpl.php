<?php
/* Smarty version 3.1.30, created on 2017-12-06 16:13:06
  from "C:\wamp64\www\siteCuisine\trunk\Cuisinos\application\views\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a28171208c934_61152564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30c510ce7f01e04688d16769bcf21a2bae9585ea' => 
    array (
      0 => 'C:\\wamp64\\www\\siteCuisine\\trunk\\Cuisinos\\application\\views\\layout.tpl',
      1 => 1512576784,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:application/views/layout/layout_entete.inc.tpl' => 1,
    'file:application/views/nav/nav.inc.tpl' => 1,
    'file:application/views/layout/layout_pied.inc.tpl' => 1,
  ),
),false)) {
function content_5a28171208c934_61152564 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
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
		<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"><?php echo '</script'; ?>
>

		<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165355a281712077387_97243194', 'title');
?>
</title>
	</head>

	<header>
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
					<?php $_smarty_tpl->_subTemplateRender("file:application/views/layout/layout_entete.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

					<?php $_smarty_tpl->_subTemplateRender("file:application/views/nav/nav.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				</div>
			</div>
		</div>
	</header>

	<body>
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129325a281712088a10_87603848', 'body');
?>

				</div>
			</div>
		</div>
	</body>

	<footer>
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
					<?php $_smarty_tpl->_subTemplateRender("file:application/views/layout/layout_pied.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				</div>
			</div>
		</div>
	</footer>
</html><?php }
/* {block 'title'} */
class Block_165355a281712077387_97243194 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Los Cuisinos<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_129325a281712088a10_87603848 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
