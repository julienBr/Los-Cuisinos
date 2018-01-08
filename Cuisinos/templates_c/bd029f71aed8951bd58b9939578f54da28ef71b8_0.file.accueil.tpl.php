<?php
/* Smarty version 3.1.30, created on 2018-01-07 23:59:16
  from "C:\wamp64\www\siteCuisine\trunk\Cuisinos\application\views\modules\accueil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a52b45467bef0_76695132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd029f71aed8951bd58b9939578f54da28ef71b8' => 
    array (
      0 => 'C:\\wamp64\\www\\siteCuisine\\trunk\\Cuisinos\\application\\views\\modules\\accueil.tpl',
      1 => 1515369553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:..\\layout.tpl' => 1,
  ),
),false)) {
function content_5a52b45467bef0_76695132 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52145a52b4546722c3_95319204', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:..\layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_52145a52b4546722c3_95319204 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="row">
		<h3 class="menuDuJour col-sm-12">Menu mystère !</h3>
		<div class="col-sm card card-rct" style="width: 20rem;">
			<div class="row">
				<img class="col-sm-4 card-img-top-rct" src="./media/<?php echo $_smarty_tpl->tpl_vars['entree']->value['UTI_LOGIN'];?>
/<?php echo $_smarty_tpl->tpl_vars['entree']->value['RCT_ILLUSTRATION'];?>
" alt="Card image recettes">
				<div class="col-sm-7 card-body card-body-rct">
					<h5 class="card-title-rct"><?php echo $_smarty_tpl->tpl_vars['entree']->value['RCT_TITRE'];?>
</h5>
					<h6 class="card-subtitle mb-2 text-muted">par <?php echo $_smarty_tpl->tpl_vars['entree']->value['UTI_LOGIN'];?>
</h6>
				</div>
			</div>
			<?php if (preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['entree']->value['RCT_DESCRIPTION'], $tmp) > 125) {?>
				<p class="card-text" style="text-align: justify;"><i><?php echo substr($_smarty_tpl->tpl_vars['entree']->value['RCT_DESCRIPTION'],0,125);?>
...</i></p>
			<?php } else { ?>
				<p class="card-text" style="text-align: justify;"><i><?php echo $_smarty_tpl->tpl_vars['entree']->value['RCT_DESCRIPTION'];?>
</i></p>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['entree']->value['RCT_STATUT'] == 'finale') {?>
				<p class="text-right">
					<a href="index.php?page=recette_detail&idr=<?php echo $_smarty_tpl->tpl_vars['entree']->value['RCT_ID'];?>
" class="btn btn-primary">
						<i class="fa fa-arrow-circle-right"></i> Voir la recette</a></p>
			<?php } elseif ($_smarty_tpl->tpl_vars['entree']->value['RCT_STATUT'] == 'soumise') {?>
				<p class="text-right"><i>(En cours de validation)</i></p>
			<?php } else { ?>
				<p class="text-right"><i>(En cours de finition)</i></p>
			<?php }?>
		</div>
		<div class="col-sm card card-rct" style="width: 20rem;">
			<div class="row">
				<img class="col-sm-4 card-img-top-rct" src="./media/<?php echo $_smarty_tpl->tpl_vars['plat']->value['UTI_LOGIN'];?>
/<?php echo $_smarty_tpl->tpl_vars['plat']->value['RCT_ILLUSTRATION'];?>
" alt="Card image recettes">
				<div class="col-sm-7 card-body card-body-rct">
					<h5 class="card-title-rct"><?php echo $_smarty_tpl->tpl_vars['plat']->value['RCT_TITRE'];?>
</h5>
					<h6 class="card-subtitle mb-2 text-muted">par <?php echo $_smarty_tpl->tpl_vars['plat']->value['UTI_LOGIN'];?>
</h6>
				</div>
			</div>
			<?php if (preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['plat']->value['RCT_DESCRIPTION'], $tmp) > 125) {?>
				<p class="card-text" style="text-align: justify;"><i><?php echo substr($_smarty_tpl->tpl_vars['plat']->value['RCT_DESCRIPTION'],0,125);?>
...</i></p>
			<?php } else { ?>
				<p class="card-text" style="text-align: justify;"><i><?php echo $_smarty_tpl->tpl_vars['plat']->value['RCT_DESCRIPTION'];?>
</i></p>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['plat']->value['RCT_STATUT'] == 'finale') {?>
				<p class="text-right">
					<a href="index.php?page=recette_detail&idr=<?php echo $_smarty_tpl->tpl_vars['plat']->value['RCT_ID'];?>
" class="btn btn-primary">
						<i class="fa fa-arrow-circle-right"></i> Voir la recette</a></p>
			<?php } elseif ($_smarty_tpl->tpl_vars['plat']->value['RCT_STATUT'] == 'soumise') {?>
				<p class="text-right"><i>(En cours de validation)</i></p>
			<?php } else { ?>
				<p class="text-right"><i>(En cours de finition)</i></p>
			<?php }?>
		</div>
		<div class="col-sm card card-rct" style="width: 20rem;">
			<div class="row">
				<img class="col-sm-4 card-img-top-rct" src="./media/<?php echo $_smarty_tpl->tpl_vars['dessert']->value['UTI_LOGIN'];?>
/<?php echo $_smarty_tpl->tpl_vars['dessert']->value['RCT_ILLUSTRATION'];?>
" alt="Card image recettes">
				<div class="col-sm-7 card-body card-body-rct">
					<h5 class="card-title-rct"><?php echo $_smarty_tpl->tpl_vars['dessert']->value['RCT_TITRE'];?>
</h5>
					<h6 class="card-subtitle mb-2 text-muted">par <?php echo $_smarty_tpl->tpl_vars['dessert']->value['UTI_LOGIN'];?>
</h6>
				</div>
			</div>
			<?php if (preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['dessert']->value['RCT_DESCRIPTION'], $tmp) > 125) {?>
				<p class="card-text" style="text-align: justify;"><i><?php echo substr($_smarty_tpl->tpl_vars['dessert']->value['RCT_DESCRIPTION'],0,125);?>
...</i></p>
			<?php } else { ?>
				<p class="card-text" style="text-align: justify;"><i><?php echo $_smarty_tpl->tpl_vars['dessert']->value['RCT_DESCRIPTION'];?>
</i></p>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['dessert']->value['RCT_STATUT'] == 'finale') {?>
				<p class="text-right">
					<a href="index.php?page=recette_detail&idr=<?php echo $_smarty_tpl->tpl_vars['dessert']->value['RCT_ID'];?>
" class="btn btn-primary">
						<i class="fa fa-arrow-circle-right"></i> Voir la recette</a></p>
			<?php } elseif ($_smarty_tpl->tpl_vars['dessert']->value['RCT_STATUT'] == 'soumise') {?>
				<p class="text-right"><i>(En cours de validation)</i></p>
			<?php } else { ?>
				<p class="text-right"><i>(En cours de finition)</i></p>
			<?php }?>
		</div>
	</div>
<?php
}
}
/* {/block 'body'} */
}
