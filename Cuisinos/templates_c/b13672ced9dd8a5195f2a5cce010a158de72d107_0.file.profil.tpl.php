<?php
/* Smarty version 3.1.30, created on 2017-12-16 16:15:59
  from "C:\wamp64\www\siteCuisine\trunk\Cuisinos\application\views\modules\profil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3546bf5076d3_29272037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b13672ced9dd8a5195f2a5cce010a158de72d107' => 
    array (
      0 => 'C:\\wamp64\\www\\siteCuisine\\trunk\\Cuisinos\\application\\views\\modules\\profil.tpl',
      1 => 1513251320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:..\\layout.tpl' => 1,
  ),
),false)) {
function content_5a3546bf5076d3_29272037 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_327175a3546bf506319_55528208', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:..\layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_327175a3546bf506319_55528208 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<p>Bienvenue <?php echo $_smarty_tpl->tpl_vars['data']->value['user']['prenom'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['user']['nom'];?>
.</p>
<?php
}
}
/* {/block 'body'} */
}
