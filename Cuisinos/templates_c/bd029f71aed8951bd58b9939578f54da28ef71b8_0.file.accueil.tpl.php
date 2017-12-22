<?php
/* Smarty version 3.1.30, created on 2017-12-19 21:41:53
  from "C:\wamp64\www\siteCuisine\trunk\Cuisinos\application\views\modules\accueil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3987a14c9237_32062622',
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
function content_5a3987a14c9237_32062622 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205855a3987a14c7724_94339255', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:..\layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_205855a3987a14c7724_94339255 extends Smarty_Internal_Block
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
