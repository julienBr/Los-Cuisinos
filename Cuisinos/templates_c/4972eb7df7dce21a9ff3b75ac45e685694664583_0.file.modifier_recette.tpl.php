<?php
/* Smarty version 3.1.30, created on 2018-01-07 15:45:33
  from "C:\wamp64\www\siteCuisine\trunk\Cuisinos\application\views\modules\modifier_recette.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a52409dc9b9b8_61154845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4972eb7df7dce21a9ff3b75ac45e685694664583' => 
    array (
      0 => 'C:\\wamp64\\www\\siteCuisine\\trunk\\Cuisinos\\application\\views\\modules\\modifier_recette.tpl',
      1 => 1515339932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a52409dc9b9b8_61154845 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149155a52409dc94dc8_29039319', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_149155a52409dc94dc8_29039319 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<form class="form form-vertical" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-sm-4 text-center">
				<div class="kv-avatar">
					<div class="file-loading">
						<input id="avatar-3" name="avatar" type="file">
					</div>
				</div>
				<div class="kv-avatar-hint"><small>Selectionner un fichier < 1500 Ko</small></div>
			</div>
			<div class="col-sm-8">
				<div class="row">
					<div class="col-sm-6">
						<div class="col-sm-12 form-group">
							<div class="row">
								<label for="titre" class="col-sm-12 control-label"><i>Titre</i></label>
								<div class="col-sm-12">
									<input type="text" class="form-input form-control" name="titre" id="titre" value="<?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_TITRE'];?>
" required>
								</div>
								<label for="preparation" class="col-sm-12 control-label"><i>Préparation</i></label>
								<div class="col-sm-12">
									<textarea class="form-input form-control" rows="10" name="preparation" id="preparation" required><?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_PREPARATION'];?>
</textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="col-sm-12 form-group">
							<div class="row">
								<label for="description" class="col-sm-12 control-label"><i>Description</i></label>
								<div class="col-sm-12">
									<textarea class="form-input form-control" name="description" id="description" required><?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_DESCRIPTION'];?>
</textarea>
								</div>
								<div class="divForm col-sm-12">
									<div class="row">
										<label for="difficulte" class="col-sm-2 control-label">Difficulté</label>
										<div class="col-sm-4">
											<select class="form-control" id="difficulte" name="difficulte">
												<?php if ($_smarty_tpl->tpl_vars['rct']->value['RCT_DIFFICULTE'] == "facile") {?>
													<option value="facile" selected>facile</option>
													<option value="moyen">moyen</option>
													<option value="difficile">difficile</option>
												<?php } elseif ($_smarty_tpl->tpl_vars['rct']->value['RCT_DIFFICULTE'] == "moyen") {?>
													<option value="facile">facile</option>
													<option value="moyen" selected>moyen</option>
													<option value="difficile">difficile</option>
												<?php } else { ?>
													<option value="facile">facile</option>
													<option value="moyen">moyen</option>
													<option value="difficile" selected>difficile</option>
												<?php }?>
											</select>		
										</div>
										<label for="cout" class="col-sm-2 control-label">Coût</label>
										<div class="col-sm-4">
											<select class="form-control" id="cout" name="cout">
												<?php if ($_smarty_tpl->tpl_vars['rct']->value['RCT_COUT'] == "faible") {?>
													<option value="faible" selected>faible</option>
													<option value="moyen">moyen</option>
													<option value="eleve">élevé</option>
												<?php } elseif ($_smarty_tpl->tpl_vars['rct']->value['RCT_COUT'] == "moyen") {?>
													<option value="faible">faible</option>
													<option value="moyen"  selected>moyen</option>
													<option value="eleve">élevé</option>
												<?php } else { ?>
													<option value="faible">faible</option>
													<option value="moyen">moyen</option>
													<option value="eleve" selected>élevé</option>
												<?php }?>
											</select>
										</div>
									</div>
								</div>
								<div class="divForm col-sm-12">
									<div class="row">
										<label for="tmpPrepa" class="text-center col-sm-3 control-label">Tps préparation</label>
										<div class="col-sm-3">
											<input type="text" class="form-input form-control"  pattern="(0[0-9]|1[0-9]|2[0-3])(:[0-5][0-9]){2}"  name="tmpPrepa" id="tmpPrepa" value="<?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_TEMPS_PREPARATION'];?>
" required>
										</div>
										<label for="tmpCuisson" class="text-center col-sm-3 control-label">Tps cuisson</label>
										<div class="col-sm-3">
											<input type="text" class="form-input form-control"  pattern="(0[0-9]|1[0-9]|2[0-3])(:[0-5][0-9]){2}"  name="tmpCuisson" id="tmpCuisson" value="<?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_TEMPS_CUISSON'];?>
">
										</div>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="row">
										<label for="tmpRepos" class="text-center col-sm-3 control-label">Tps repos</label>
										<div class="col-sm-3">
											<input type="text" class="form-input form-control"  pattern="(0[0-9]|1[0-9]|2[0-3])(:[0-5][0-9]){2}"  name="tmpRepos" id="tmpRepos" value="<?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_TEMPS_REPOS'];?>
">
										</div>
										<label for="nbPersonne" class="text-center col-sm-3 control-label">Nb personne</label>
										<div class="col-sm-3">
											<input type="number" class="form-input form-control" name="nbPersonne" id="nbPersonne" value="<?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_NBPERSONNE'];?>
" required>
										</div>
									</div>
								</div>
								<div class="text-right col-sm-12">
									<button name="btnModRCT" type="submit" class="btn-modRct btn btn-primary"><i class="fa fa-pencil"></i> Modifier</button>
									<button type="reset" class="btn-modRct btn btn-primary"><i class="fa fa-eraser"></i> Effacer</button>
									<hr>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	<div id="kv-avatar-errors-1" class="center-block" style="width:800px;display:none"></div>
	 
	<?php if ($_smarty_tpl->tpl_vars['data']->value['isUploadedFile'] == '1') {?>
		<?php echo '<script'; ?>
>alertify.error('Fichier introuvable.');<?php echo '</script'; ?>
>
	<?php } elseif ($_smarty_tpl->tpl_vars['data']->value['moveUploadedFile'] == '1') {?>
		<?php echo '<script'; ?>
>alertify.error('Impossible de copier le fichier.');<?php echo '</script'; ?>
>
	<?php }?>

	<!-- the fileinput plugin initialization -->
	
	<?php echo '<script'; ?>
>
		$("#avatar-3").fileinput({
			overwriteInitial: true,
			maxFileSize: 1500,
			showClose: false,
			showCaption: false,
			browseLabel: 'Ouvrir',
			browseIcon: '<i class="fa fa-folder-open-o"></i>',
			msgZoomModalHeading: 'Vue détaillée',
			elErrorContainer: '#kv-avatar-errors-1',
			msgErrorClass: 'alert alert-block alert-danger',
			defaultPreviewContent: '<img class="imgModProfil" src="media/<?php echo $_smarty_tpl->tpl_vars['uti']->value['UTI_LOGIN'];?>
/<?php echo $_smarty_tpl->tpl_vars['rct']->value['RCT_ILLUSTRATION'];?>
">',
			layoutTemplates: {main2: '{preview} {browse}'},
			allowedFileExtensions: ["jpg", "png", "gif"]
		});
	<?php echo '</script'; ?>
>
	
<?php
}
}
/* {/block 'body'} */
}
