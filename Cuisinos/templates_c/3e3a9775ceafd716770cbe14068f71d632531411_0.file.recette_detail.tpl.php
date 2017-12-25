<?php
/* Smarty version 3.1.30, created on 2017-12-24 11:34:45
  from "C:\wamp64\www\siteCuisine\trunk\Cuisinos\application\views\modules\recette_detail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3f90d55114d4_23976668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e3a9775ceafd716770cbe14068f71d632531411' => 
    array (
      0 => 'C:\\wamp64\\www\\siteCuisine\\trunk\\Cuisinos\\application\\views\\modules\\recette_detail.tpl',
      1 => 1514115283,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a3f90d55114d4_23976668 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159395a3f90d550d736_11412782', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_159395a3f90d550d736_11412782 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
	<div class="col-sm-12">
		<div class="row">
			<h2 class="col-sm-12 rctTitre"><?php echo $_smarty_tpl->tpl_vars['data']->value['RCT_TITRE'];?>
</h2>
			<h3 class="col-sm-12 rctTitrePar text-muted"><i>par <?php echo $_smarty_tpl->tpl_vars['data']->value['UTI_LOGIN'];?>
</i></h3>
			<hr class="col-sm-10">
			<table class="col-sm-12">
				<tbody>
					<tr>
						<td class="col-sm-4">
							<img class="imgRctDetail img-fluid" alt="<?php echo $_smarty_tpl->tpl_vars['data']->value['RCT_ILLUSTRATION'];?>
" src="./media/<?php echo $_smarty_tpl->tpl_vars['data']->value['UTI_LOGIN'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['RCT_ILLUSTRATION'];?>
">
						</td>
						<td class="col-sm-4"><ul class="listTemps">
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
						<td class="col-sm-4">
							<ul class="listIgd">
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
								<?php }
}
?>

							</ul>
						</td>
					</tr>
				</tbody>
			</table>
			<hr class="col-sm-10">
			<div class="col-sm-12">
				<h3>Préparation</h3>
				<p style="text-align: justify;"><?php echo $_smarty_tpl->tpl_vars['data']->value['RCT_PREPARATION'];?>
</p>
				<p class="text-right">
					<a href="javascript:history.go(-1)" class="btn btn-primary">
						<i class="fa fa-undo"></i> Retour à la liste</a></p>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<hr class="col-sm-10">
	<div class="col-sm-12">
		<h3 class="titreComment col-sm-12">Laisser un Commentaire</h3>
		<div class="zoneComment col-sm-10">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
				<?php if ($_smarty_tpl->tpl_vars['data']->value['nbComm'] == 0) {?>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#commentaires" role="tab">Commentaires</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#ajouterCommentaire" role="tab">Ajouter un commentaire</a>
					</li>
				<?php } else { ?>
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#commentaires" role="tab">Commentaires</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#ajouterCommentaire" role="tab">Ajouter un commentaire</a>
					</li>
				<?php }?>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<?php if ($_smarty_tpl->tpl_vars['data']->value['nbComm'] == 0) {?>
					<div class="tab-pane" id="commentaires" role="tabpanel">
				<?php } else { ?>
					<div class="tab-pane active" id="commentaires" role="tabpanel">
				<?php }?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['listComments'], 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
							<table class="tabComment">
								<tr>
									<td class="col-sm-2">
										<img class="imgProfilComment img-fluid" src="./media/<?php echo $_smarty_tpl->tpl_vars['data']->value['UTI_LOGIN'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['UTI_AVATAR'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['data']->value['UTI_AVATAR'];?>
">
									</td>
									<td class="col-sm-10 comment">
										<div class="row">
											<h4 class="col-sm-3"><?php echo $_smarty_tpl->tpl_vars['data']->value['UTI_LOGIN'];?>
</h4>
											<p style="text-align: right;" class="col-sm-3 offset-sm-6"><i><?php echo $_smarty_tpl->tpl_vars['data']->value['COM_DATE'];?>
</i></p>
											<p class="pComm col-sm-12"><i><?php echo $_smarty_tpl->tpl_vars['data']->value['COM_TEXTE'];?>
</i></p>
											<button name="suppComment" type="submit" class="btn btn-primary"><i class="fa fa-remove"></i> Supprimer</button>
										</div>
										<hr>
									</td>
								</tr>
							</table>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</div>
				<?php if ($_smarty_tpl->tpl_vars['data']->value['nbComm'] == 0) {?>
					<div class="tab-pane active" id="ajouterCommentaire" role="tabpanel">
				<?php } else { ?>
					<div class="tab-pane" id="ajouterCommentaire" role="tabpanel">
				<?php }?>
						<?php if (isset($_SESSION['login'])) {?>
							<form action="#" method="post" class="form-horizontal" id="commentForm" role="form">
								<div class="form-group row">
									<label for="labelComment" class="col-sm-2 col-form-label">Commentaire</label>
									<div class="col-sm-10">
										<textarea class="form-control" name="textCommentaire" rows="3"></textarea>
									</div>
								</div>
								<div class="form-group">
									<hr>
									<div class="text-right">
										<button name="btnCommentaire" type="submit" class="buttonComment btn-inscription btn btn-primary"><i class="fa fa-check"></i> Valider</button>
										<button type="reset" class="buttonComment btn-inscription btn btn-primary"><i class="fa fa-eraser"></i> Effacer</button>
									</div>
								</div>
							</form>
						<?php } else { ?>
							<p><i>Veuillez vous connecter pour ajouter un commentaire</i></p>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<p class="text-right">
		<a class="smoothScroll btn btn-primary" href="#top"><i class="fa fa-level-up"></i> Haut de page</a>
	</p>
</div>
<?php
}
}
/* {/block 'body'} */
}
