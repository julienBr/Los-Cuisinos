<?php
/* Smarty version 3.1.30, created on 2017-12-10 20:36:18
  from "C:\wamp64\www\siteCuisine\trunk\Cuisinos\application\views\modules\recette_liste.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2d9ac2303094_30026295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2adb0081ef50541ae91dc29385b8af772de09f3' => 
    array (
      0 => 'C:\\wamp64\\www\\siteCuisine\\trunk\\Cuisinos\\application\\views\\modules\\recette_liste.tpl',
      1 => 1512938175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a2d9ac2303094_30026295 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_224255a2d9ac2300955_71064363', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_224255a2d9ac2300955_71064363 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<!--<section class="col-lg-12">
		<h2><?php echo $_smarty_tpl->tpl_vars['data']->value['CAT_LABEL'];?>
<small> <?php echo $_smarty_tpl->tpl_vars['data']->value['CAT_DESCRIPTION'];?>
</small></h2>
		<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['data']->value['nbRecette']-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['data']->value['nbRecette']-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
			<article class="articleRecetteListe col-lg-12">
				<table>
					<tr class="col-lg-8">
						<td class="col-lg-4">
							<img class="img-rounded img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['data']->value['RCT_ILLUSTRATION'][$_smarty_tpl->tpl_vars['i']->value];?>
" src="./media/<?php echo $_smarty_tpl->tpl_vars['data']->value['UTI_LOGIN'][$_smarty_tpl->tpl_vars['i']->value];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['RCT_ILLUSTRATION'][$_smarty_tpl->tpl_vars['i']->value];?>
">
						</td>
						<?php if ($_smarty_tpl->tpl_vars['data']->value['RCT_STATUT'][$_smarty_tpl->tpl_vars['i']->value] == 'finale') {?>
							<td class="col-lg-8">
								<h3><?php echo $_smarty_tpl->tpl_vars['data']->value['RCT_TITRE'][$_smarty_tpl->tpl_vars['i']->value];?>
</h3></br>
								<p><?php echo $_smarty_tpl->tpl_vars['data']->value['RCT_DESCRIPTION'][$_smarty_tpl->tpl_vars['i']->value];?>
</p></br>
								<p><a href="index.php?page=recette_detail&idr=<?php echo $_smarty_tpl->tpl_vars['data']->value['RCT_ID'][$_smarty_tpl->tpl_vars['i']->value];?>
">Lire la recette</a></p></br>
							</td>
						<?php } elseif ($_smarty_tpl->tpl_vars['data']->value['RCT_STATUT'][$_smarty_tpl->tpl_vars['i']->value] == 'soumise') {?>
							<td>
								<h3><?php echo $_smarty_tpl->tpl_vars['data']->value['RCT_TITRE'][$_smarty_tpl->tpl_vars['i']->value];?>
</h3></br>
								<p><?php echo $_smarty_tpl->tpl_vars['data']->value['RCT_DESCRIPTION'][$_smarty_tpl->tpl_vars['i']->value];?>
</p></br>
								<p><i>(En cours de validation)</i></p></br>
							</td>
						<?php } else { ?>
							<td>
								<h3><?php echo $_smarty_tpl->tpl_vars['data']->value['RCT_TITRE'][$_smarty_tpl->tpl_vars['i']->value];?>
</h3></br>
								<p><?php echo $_smarty_tpl->tpl_vars['data']->value['RCT_DESCRIPTION'][$_smarty_tpl->tpl_vars['i']->value];?>
</p></br>
								<p><i>(En cours de finition)</i></p></br>
							</td>
						<?php }?>
					</tr>
				</table>
			</article>
			<div class="articleBorder col-lg-offset-2 col-lg-8">
			</div>
		<?php }
}
?>

	</section>-->

	<div class="row">
		<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['data']->value['nbRecette']-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['data']->value['nbRecette']-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
			<div class="col-sm card card-rct" style="width: 20rem;">
				<div class="row">
					<img class="col-sm-4 card-img-top-rct" src="./media/<?php echo $_smarty_tpl->tpl_vars['data']->value['UTI_LOGIN'][$_smarty_tpl->tpl_vars['i']->value];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['RCT_ILLUSTRATION'][$_smarty_tpl->tpl_vars['i']->value];?>
" alt="Card image recettes">
					<div class="col-sm-7 card-body card-body-rct">
						<h5 class="card-title-rct"><?php echo $_smarty_tpl->tpl_vars['data']->value['RCT_TITRE'][$_smarty_tpl->tpl_vars['i']->value];?>
</h5>
						<h6 class="card-subtitle mb-2 text-muted">par <?php echo $_smarty_tpl->tpl_vars['data']->value['UTI_LOGIN'][$_smarty_tpl->tpl_vars['i']->value];?>
</h6>
					</div>
				</div>
				<?php if (preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['data']->value['RCT_DESCRIPTION'][$_smarty_tpl->tpl_vars['i']->value], $tmp) > 125) {?>
					<p class="card-text"><i><?php echo substr($_smarty_tpl->tpl_vars['data']->value['RCT_DESCRIPTION'][$_smarty_tpl->tpl_vars['i']->value],0,125);?>
...</i></p>
				<?php } else { ?>
					<p class="card-text"><i><?php echo $_smarty_tpl->tpl_vars['data']->value['RCT_DESCRIPTION'][$_smarty_tpl->tpl_vars['i']->value];?>
</i></p>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['data']->value['RCT_STATUT'][$_smarty_tpl->tpl_vars['i']->value] == 'finale') {?>
					<p class="text-right">
						<a href="index.php?page=recette_detail&idr=<?php echo $_smarty_tpl->tpl_vars['data']->value['RCT_ID'][$_smarty_tpl->tpl_vars['i']->value];?>
" class="btn btn-primary">
							<i class="fa fa-arrow-circle-right"></i> Voir les recettes</a></p>
				<?php } elseif ($_smarty_tpl->tpl_vars['data']->value['RCT_STATUT'][$_smarty_tpl->tpl_vars['i']->value] == 'soumise') {?>
					<p class="text-right"><i>(En cours de validation)</i></p>
				<?php } else { ?>
					<p class="text-right"><i>(En cours de finition)</i></p>
				<?php }?>
			</div>
		<?php }
}
?>

	</div>

<?php
}
}
/* {/block 'body'} */
}
