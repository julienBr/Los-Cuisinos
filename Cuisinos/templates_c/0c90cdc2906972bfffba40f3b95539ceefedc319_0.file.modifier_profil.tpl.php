<?php
/* Smarty version 3.1.30, created on 2018-01-07 15:45:44
  from "C:\wamp64\www\siteCuisine\trunk\Cuisinos\application\views\modules\modifier_profil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5240a8a06441_30509756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c90cdc2906972bfffba40f3b95539ceefedc319' => 
    array (
      0 => 'C:\\wamp64\\www\\siteCuisine\\trunk\\Cuisinos\\application\\views\\modules\\modifier_profil.tpl',
      1 => 1515258659,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a5240a8a06441_30509756 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189375a5240a8a00f03_28214571', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_189375a5240a8a00f03_28214571 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<form class="form form-vertical" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-sm-4 text-center">
				<div class="kv-avatar">
					<div class="file-loading">
						<input id="avatar-2" name="avatar" type="file">
					</div>
				</div>
				<div class="kv-avatar-hint"><small>Selectionner un fichier < 1500 Ko</small></div>
			</div>
			<div class="col-sm-8">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="login" class="col-lg-12 control-label"><i> Login</i></label>
							<div class="col-lg-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user-secret fa" aria-hidden="true"></i></span>
									<input type="text" class="form-input form-control" name="login" id="login" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['UTI_LOGIN'];?>
">
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="mail" class="col-lg-12 control-label"><i> Mail</i></label>
							<div class="col-lg-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
										<input type="email"  pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"  class="form-input form-control" name="mail"
											value="<?php echo $_smarty_tpl->tpl_vars['data']->value['UTI_MAIL'];?>
">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="nom" class="col-lg-12 control-label"><i> Nom</i></label>
							<div class="col-lg-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-input form-control" name="nom" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['UTI_NOM'];?>
">
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="prenom" class="col-lg-12 control-label"><i> Prénom</i></label>
							<div class="col-lg-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-input form-control" name="prenom" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['UTI_PRENOM'];?>
">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
							<label for="password" class="text-center col-lg-12 control-label"><i> Mot de passe actuel</i></label>
							<div class="col-lg-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" id="pwd" class="form-input form-control" name="passwordAct" required>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="password" class="col-lg-12 control-label"><i> Nouveau mot de passe</i></label>
							<div class="col-lg-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" id="pwd" class="form-input form-control" name="newMDP">
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="confirmation" class="col-lg-12 control-label"><i> Confirmation</i></label>
							<div class="col-lg-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-input form-control" name="confirmation">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<hr>
					<div class="text-right">
						<button name="btnModProfil" type="submit" class="btn-inscription btn btn-primary"><i class="fa fa-pencil"></i> Modifier</button>
						<button type="reset" class="btn-inscription btn btn-primary"><i class="fa fa-eraser"></i> Effacer</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<div id="kv-avatar-errors-1" class="center-block" style="width:800px;display:none"></div>
	 
	<?php if ($_smarty_tpl->tpl_vars['data']->value['mdpActuel'] == '1') {?>
		<?php echo '<script'; ?>
>alertify.error('Mot de passe éronné..');<?php echo '</script'; ?>
>
	<?php } elseif ($_smarty_tpl->tpl_vars['data']->value['isUploadedFile'] == '1') {?>
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
		$("#avatar-2").fileinput({
			overwriteInitial: true,
			maxFileSize: 1500,
			showClose: false,
			showCaption: false,
			browseLabel: 'Ouvrir',
			browseIcon: '<i class="fa fa-folder-open-o"></i>',
			msgZoomModalHeading: 'Vue détaillée',
			elErrorContainer: '#kv-avatar-errors-1',
			msgErrorClass: 'alert alert-block alert-danger',
			defaultPreviewContent: '<img class="imgModProfil" src="media/<?php echo $_smarty_tpl->tpl_vars['data']->value['UTI_LOGIN'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['UTI_AVATAR'];?>
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
