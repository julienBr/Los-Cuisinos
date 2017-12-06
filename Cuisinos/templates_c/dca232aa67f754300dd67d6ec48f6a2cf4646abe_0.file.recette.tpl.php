<?php
/* Smarty version 3.1.30, created on 2017-12-06 15:40:30
  from "C:\wamp64\www\siteCuisine\trunk\Cuisinos\application\views\modules\recette.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a280f6e8469b6_67340098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dca232aa67f754300dd67d6ec48f6a2cf4646abe' => 
    array (
      0 => 'C:\\wamp64\\www\\siteCuisine\\trunk\\Cuisinos\\application\\views\\modules\\recette.tpl',
      1 => 1507636085,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a280f6e8469b6_67340098 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_image')) require_once 'C:\\wamp64\\www\\siteCuisine\\trunk\\Cuisinos\\application\\libraries\\smarty-3.1.30\\libs\\plugins\\function.html_image.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210365a280f6e845313_22515516', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_210365a280f6e845313_22515516 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<section>
		<article>
			<div class="row">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['recetteCat'], 'ligne');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ligne']->value) {
?>
					<div class="articleRecette col-lg-4">
						</br>
						<h2 align="center"><?php echo $_smarty_tpl->tpl_vars['ligne']->value['CAT_LABEL'];?>
</h2>
						<a href="index.php?page=recette_liste&idc=<?php echo $_smarty_tpl->tpl_vars['ligne']->value['CAT_ID'];?>
"><img class="col-lg-12 img-responsive img-rounded" <?php echo smarty_function_html_image(array('file'=>"./media/categories/".((string)$_smarty_tpl->tpl_vars['ligne']->value['CAT_ILLUSTRATION']),'width'=>300,'height'=>200),$_smarty_tpl);?>
</a>
						</br>
					</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</div>
		</article>
	</section>
<?php
}
}
/* {/block 'body'} */
}
