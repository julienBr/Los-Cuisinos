<?php
/* Smarty version 3.1.30, created on 2017-12-15 16:18:12
  from "C:\wamp64\www\siteCuisine\trunk\Cuisinos\application\views\modules\recherches.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a33f5c4025816_09349417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56d1f290ed11d6393c1c19d1ebf8001478d54cfe' => 
    array (
      0 => 'C:\\wamp64\\www\\siteCuisine\\trunk\\Cuisinos\\application\\views\\modules\\recherches.tpl',
      1 => 1513354675,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a33f5c4025816_09349417 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_269425a33f5c4024216_55826377', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_269425a33f5c4024216_55826377 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="row">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['rctRecherche'], 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
			<div class="col-sm card" style="width: 20rem;">
				<p class="text-center"><img class="card-img-top-cat" src="./media/categories/<?php echo $_smarty_tpl->tpl_vars['data']->value['CAT_ILLUSTRATION'];?>
" alt="Card image categories"></p>
				<div class="card-body">
					<h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['data']->value['CAT_LABEL'];?>
</h4>
					<p class="card-text"><i><?php echo $_smarty_tpl->tpl_vars['data']->value['CAT_DESCRIPTION'];?>
</i></p>
					<a href="index.php?page=recette_liste&idc=<?php echo $_smarty_tpl->tpl_vars['data']->value['CAT_ID'];?>
" class="btn-card btn btn-primary">Voir les recettes</a>
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
