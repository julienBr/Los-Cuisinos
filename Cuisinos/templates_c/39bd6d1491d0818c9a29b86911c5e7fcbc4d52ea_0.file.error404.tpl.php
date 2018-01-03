<?php
/* Smarty version 3.1.30, created on 2018-01-03 16:33:28
  from "C:\wamp64\www\siteCuisine\trunk\Cuisinos\application\views\modules\error404.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4d05d8961301_56031698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39bd6d1491d0818c9a29b86911c5e7fcbc4d52ea' => 
    array (
      0 => 'C:\\wamp64\\www\\siteCuisine\\trunk\\Cuisinos\\application\\views\\modules\\error404.tpl',
      1 => 1513251320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:..\\layout.tpl' => 1,
  ),
),false)) {
function content_5a4d05d8961301_56031698 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_232305a4d05d895da45_53921919', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:..\layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_232305a4d05d895da45_53921919 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h1>ERROR 404 !<small> Cette page n'existe pas...</small></h1>
	<a href="index.php">Retour à l'accueil</a>
<?php
}
}
/* {/block 'body'} */
}
