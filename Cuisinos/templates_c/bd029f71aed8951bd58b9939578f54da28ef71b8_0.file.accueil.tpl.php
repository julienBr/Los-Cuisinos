<?php
/* Smarty version 3.1.30, created on 2018-01-07 21:22:36
  from "C:\wamp64\www\siteCuisine\trunk\Cuisinos\application\views\modules\accueil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a528f9ce2f1a6_27369833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd029f71aed8951bd58b9939578f54da28ef71b8' => 
    array (
      0 => 'C:\\wamp64\\www\\siteCuisine\\trunk\\Cuisinos\\application\\views\\modules\\accueil.tpl',
      1 => 1513719704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:..\\layout.tpl' => 1,
  ),
),false)) {
function content_5a528f9ce2f1a6_27369833 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206305a528f9ce2b240_60139238', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:..\layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_206305a528f9ce2b240_60139238 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<!--<article>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['alea'], 'alea');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['alea']->value) {
?>
			<p><?php echo $_smarty_tpl->tpl_vars['alea']->value;?>
</p>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</article>-->
<?php
}
}
/* {/block 'body'} */
}
