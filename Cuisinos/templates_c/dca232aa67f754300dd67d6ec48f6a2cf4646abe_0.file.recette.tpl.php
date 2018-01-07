<?php
/* Smarty version 3.1.30, created on 2018-01-07 15:47:41
  from "C:\wamp64\www\siteCuisine\trunk\Cuisinos\application\views\modules\recette.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a52411ddeccb9_78049719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dca232aa67f754300dd67d6ec48f6a2cf4646abe' => 
    array (
      0 => 'C:\\wamp64\\www\\siteCuisine\\trunk\\Cuisinos\\application\\views\\modules\\recette.tpl',
      1 => 1515080904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a52411ddeccb9_78049719 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142395a52411dde7005_00346980', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_142395a52411dde7005_00346980 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="row">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['recetteCat'], 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
			<div class="col-sm card" style="width: 20rem;">
				<p class="text-center"><img class="img-thumbnail card-img-top-cat" src="./media/categories/<?php echo $_smarty_tpl->tpl_vars['data']->value['CAT_ILLUSTRATION'];?>
" alt="Card image categories"></p>
				<div class="card-body">
					<h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['data']->value['CAT_LABEL'];?>
</h4>
					<p class="card-text"><i><?php echo $_smarty_tpl->tpl_vars['data']->value['CAT_DESCRIPTION'];?>
</i></p>
					<a href="index.php?page=recette_liste&idc=<?php echo $_smarty_tpl->tpl_vars['data']->value['CAT_ID'];?>
" class="btn-card btn btn-primary"><i class="fa fa-arrow-circle-right"></i> Voir les recettes</a>
				</div>
			</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</div>
<?php
}
}
/* {/block 'body'} */
}
