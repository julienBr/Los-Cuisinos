<?php
/* Smarty version 3.1.30, created on 2017-12-06 15:40:08
  from "C:\wamp64\www\siteCuisine\trunk\Cuisinos\application\views\modules\accueil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a280f58f27a88_04274294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd029f71aed8951bd58b9939578f54da28ef71b8' => 
    array (
      0 => 'C:\\wamp64\\www\\siteCuisine\\trunk\\Cuisinos\\application\\views\\modules\\accueil.tpl',
      1 => 1507023802,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:..\\layout.tpl' => 1,
  ),
),false)) {
function content_5a280f58f27a88_04274294 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149485a280f58f26618_80057882', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:..\layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_149485a280f58f26618_80057882 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<section>
		<article>
			<p>La cuisine bouge, vit, vibre...<br/>
			   A travers textes, photos et vidéos, élargissons nos horizons culinaires et apprenons-en toujours plus, pour mieux faire et nous faire plaisir devant nos fourneaux !</p>
		</article>
		<article>
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

		</article>
	</section>
<?php
}
}
/* {/block 'body'} */
}
