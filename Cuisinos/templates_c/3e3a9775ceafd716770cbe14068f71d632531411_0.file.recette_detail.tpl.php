<?php
/* Smarty version 3.1.30, created on 2017-12-06 15:40:34
  from "C:\wamp64\www\siteCuisine\trunk\Cuisinos\application\views\modules\recette_detail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a280f7210e201_69425375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e3a9775ceafd716770cbe14068f71d632531411' => 
    array (
      0 => 'C:\\wamp64\\www\\siteCuisine\\trunk\\Cuisinos\\application\\views\\modules\\recette_detail.tpl',
      1 => 1510304078,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a280f7210e201_69425375 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_258805a280f7210c0a1_09368074', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_258805a280f7210c0a1_09368074 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="col-lg-12">
			<h2 class="page-header">
				<?php echo $_smarty_tpl->tpl_vars['data']->value['RCT_TITRE'];?>

				<small>Recette proposée par <?php echo $_smarty_tpl->tpl_vars['data']->value['UTI_LOGIN'];?>
</small>
			</h2>
			<section>
				<article class="articleRecetteDetail">
					<table>
						<tr class="col-lg-12">
							<td class="col-lg-4">
								<img class="img-rounded img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['data']->value['RCT_ILLUSTRATION'];?>
" src="./media/<?php echo $_smarty_tpl->tpl_vars['data']->value['UTI_LOGIN'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['RCT_ILLUSTRATION'];?>
">
								</br>
							</td>
							<td class="col-lg-8"><ul>
								<li>Temps de préparation : <?php echo $_smarty_tpl->tpl_vars['data']->value['RCT_TEMPS_PREPARATION'];?>
 min</li>
								<li>Temps de cuisson : <?php echo $_smarty_tpl->tpl_vars['data']->value['RCT_TEMPS_CUISSON'];?>
 min</li>
								<li>Coût : <?php echo $_smarty_tpl->tpl_vars['data']->value['RCT_COUT'];?>
</li>
								<li>Difficulté : <?php echo $_smarty_tpl->tpl_vars['data']->value['RCT_DIFFICULTE'];?>
</li>
								<li>Nombre de personnes :  <?php echo $_smarty_tpl->tpl_vars['data']->value['RCT_NBPERSONNE'];?>
</li>
							</ul></td>
						</tr>
					</table>
					<div class="articleBorder col-lg-offset-2 col-lg-8">
					</div>
				</article>
				<article>
					<h2>Ingrédients :</h2>
						<ul>
							<?php
$_smarty_tpl->tpl_vars['j'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['j']->step = 1;$_smarty_tpl->tpl_vars['j']->total = (int) ceil(($_smarty_tpl->tpl_vars['j']->step > 0 ? $_smarty_tpl->tpl_vars['data']->value['nbIngredient']-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['data']->value['nbIngredient']-1)+1)/abs($_smarty_tpl->tpl_vars['j']->step));
if ($_smarty_tpl->tpl_vars['j']->total > 0) {
for ($_smarty_tpl->tpl_vars['j']->value = 0, $_smarty_tpl->tpl_vars['j']->iteration = 1;$_smarty_tpl->tpl_vars['j']->iteration <= $_smarty_tpl->tpl_vars['j']->total;$_smarty_tpl->tpl_vars['j']->value += $_smarty_tpl->tpl_vars['j']->step, $_smarty_tpl->tpl_vars['j']->iteration++) {
$_smarty_tpl->tpl_vars['j']->first = $_smarty_tpl->tpl_vars['j']->iteration == 1;$_smarty_tpl->tpl_vars['j']->last = $_smarty_tpl->tpl_vars['j']->iteration == $_smarty_tpl->tpl_vars['j']->total;?>
								<?php if ($_smarty_tpl->tpl_vars['data']->value['UNI_SHORT_LABEL'][$_smarty_tpl->tpl_vars['j']->value] == NULL) {?>
									<li><?php echo $_smarty_tpl->tpl_vars['data']->value['IGD_RCT_UNI_QUANTITE'][$_smarty_tpl->tpl_vars['j']->value];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['UNI_SHORT_LABEL'][$_smarty_tpl->tpl_vars['j']->value];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['IGD_LABEL'][$_smarty_tpl->tpl_vars['j']->value];?>
</li>	
								<?php } else { ?>
									<li><?php echo $_smarty_tpl->tpl_vars['data']->value['IGD_RCT_UNI_QUANTITE'][$_smarty_tpl->tpl_vars['j']->value];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['UNI_SHORT_LABEL'][$_smarty_tpl->tpl_vars['j']->value];?>
 de <?php echo $_smarty_tpl->tpl_vars['data']->value['IGD_LABEL'][$_smarty_tpl->tpl_vars['j']->value];?>
</li>
								<?php }?>
								<!--<li><?php echo $_smarty_tpl->tpl_vars['data']->value['IGD_RCT_UNI_QUANTITE'][$_smarty_tpl->tpl_vars['j']->value];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['UNI_SHORT_LABEL'][$_smarty_tpl->tpl_vars['j']->value];?>
 de <?php echo $_smarty_tpl->tpl_vars['data']->value['IGD_LABEL'][$_smarty_tpl->tpl_vars['j']->value];?>
</li>-->
							<?php }
}
?>

						</ul>
					<div class="articleBorder col-lg-offset-2 col-lg-8">
					</div>
				</article>
				<article>
					<h2 class="col-lg-12">Préparation :</h2>
					<p>
						<?php echo $_smarty_tpl->tpl_vars['data']->value['RCT_PREPARATION'];?>

					</p>
				</article>
			</section>
	</div>
<?php
}
}
/* {/block 'body'} */
}
