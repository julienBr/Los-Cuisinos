<?php
/* Smarty version 3.1.30, created on 2017-12-19 21:01:26
  from "C:\wamp64\www\siteCuisine\trunk\Cuisinos\application\views\modules\inscription.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a397e26847d32_71081141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f700a9c8f75ceb98e682ce531e1491bb6fdd7d5' => 
    array (
      0 => 'C:\\wamp64\\www\\siteCuisine\\trunk\\Cuisinos\\application\\views\\modules\\inscription.tpl',
      1 => 1513717285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a397e26847d32_71081141 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37455a397e26846601_98460814', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_37455a397e26846601_98460814 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<form class="form form-vertical" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-sm-4 text-center">
				<div class="kv-avatar">
					<div class="file-loading">
						<input id="avatar-1" name="avatar" type="file" required>
					</div>
				</div>
				<div class="kv-avatar-hint"><small>Selectionner un fichier < 1500 Ko</small></div>
			</div>
			<div class="col-sm-8">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="login" class="col-lg-12 control-label"><span>*</span><i> Login</i></label>
							<div class="col-lg-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user-secret fa" aria-hidden="true"></i></span>
									<input type="text" class="form-input form-control" name="login" id="login" placeholder="Entrer votre Login" required>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="mail" class="col-lg-12 control-label"><span>*</span><i> Mail</i></label>
							<div class="col-lg-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									
										<input type="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" class="form-input form-control" name="mail"
											placeholder="Entrer votre Mail" required>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="nom" class="col-lg-12 control-label"><span>*</span><i> Nom</i></label>
							<div class="col-lg-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-input form-control" name="nom" placeholder="Entrer votre Nom" required>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="prenom" class="col-lg-12 control-label"><span>*</span><i> Prénom</i></label>
							<div class="col-lg-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-input form-control" name="prenom" placeholder="Entrer votre Prénom" required>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="password" class="col-lg-12 control-label"><span>*</span><i> Mot de passe</i></label>
							<div class="col-lg-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" id="pwd" class="form-input form-control" name="password" placeholder="Entrer votre Mot de passe" required>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="confirmation" class="col-lg-12 control-label"><span>*</span><i> Confirmation</i></label>
							<div class="col-lg-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-input form-control" name="confirmation" placeholder="Entrer votre Mot de passe" required>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<hr>
					<div class="text-right">
						<button name="btnInscription" type="submit" class="btn-inscription btn btn-primary"><i class="fa fa-check"></i> Je m'inscris</button>
						<button type="reset" class="btn-inscription btn btn-primary"><i class="fa fa-eraser"></i> Effacer</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<div id="kv-avatar-errors-1" class="center-block" style="width:800px;display:none"></div>
	 
	<?php if ($_smarty_tpl->tpl_vars['data']->value['loginExist'] == '1') {?>
		<?php echo '<script'; ?>
>alertify.warning('Ce login existe déjà..');<?php echo '</script'; ?>
>
	<?php } elseif ($_smarty_tpl->tpl_vars['data']->value['isUploadedFile'] == '1') {?>
		<?php echo '<script'; ?>
>alertify.error('Fichier introuvable.');<?php echo '</script'; ?>
>
	<?php } elseif ($_smarty_tpl->tpl_vars['data']->value['moveUploadedFile'] == '1') {?>
		<?php echo '<script'; ?>
>alertify.error('Impossible de copier le fichier.');<?php echo '</script'; ?>
>
	<?php } elseif ($_smarty_tpl->tpl_vars['data']->value['inscriptionReussie'] == '1') {?>
		<?php echo '<script'; ?>
>
			alertify.confirm().set('message', '<p>Inscription réussie</p><br/><a href="index.php?page=accueil">Accueil</a>').show();
		<?php echo '</script'; ?>
>
	<?php }?>

	<!-- the fileinput plugin initialization -->
	
	<?php echo '<script'; ?>
>
		$("#avatar-1").fileinput({
			overwriteInitial: true,
			maxFileSize: 1500,
			showClose: false,
			showCaption: false,
			browseLabel: 'Ouvrir',
			browseIcon: '<i class="fa fa-folder-open-o"></i>',
			msgZoomModalHeading: 'Vue détaillée',
			elErrorContainer: '#kv-avatar-errors-1',
			msgErrorClass: 'alert alert-block alert-danger',
			defaultPreviewContent: '<img src="asset/images/defaultAvatar.png" alt="Your Avatar">',
			layoutTemplates: {main2: '{preview} {browse}'},
			allowedFileExtensions: ["jpg", "png", "gif"]
			/*showRemove: true,
			showUpload: true,
			showDownload: true,
			showZoom: true,
			showDrag: true,
			removeIcon: '<i class="glyphicon glyphicon-trash"></i>',
			removeClass: 'btn btn-kv btn-default btn-outline-secondary',
			removeErrorClass: 'btn btn-kv btn-danger',
			removeTitle: 'Remove file',
			uploadIcon: '<i class="glyphicon glyphicon-upload"></i>',
			uploadClass: 'btn btn-kv btn-default btn-outline-secondary',
			uploadTitle: 'Upload file',
			uploadRetryIcon: '<i class="glyphicon glyphicon-repeat"></i>',
			uploadRetryTitle: 'Retry upload',
			downloadIcon: '<i class="glyphicon glyphicon-download"></i>',
			downloadClass: 'btn btn-kv btn-default btn-outline-secondary',
			downloadTitle: 'Download file',
			zoomIcon: '<i class="glyphicon glyphicon-zoom-in"></i>',
			zoomClass: 'btn btn-kv btn-default btn-outline-secondary',
			zoomTitle: 'View Details',
			dragIcon: '<i class="glyphicon glyphicon-move"></i>',
			dragClass: 'text-info',
			dragTitle: 'Move / Rearrange',
			dragSettings: {},
			indicatorNew: '<i class="glyphicon glyphicon-plus-sign text-warning"></i>',
			indicatorSuccess: '<i class="glyphicon glyphicon-ok-sign text-success"></i>',
			indicatorError: '<i class="glyphicon glyphicon-exclamation-sign text-danger"></i>',
			indicatorLoading: '<i class="glyphicon glyphicon-hourglass text-muted"></i>',
			indicatorNewTitle: 'Not uploaded yet',
			indicatorSuccessTitle: 'Uploaded',
			indicatorErrorTitle: 'Upload Error',
			indicatorLoadingTitle: 'Uploading ...'*/
		});
	<?php echo '</script'; ?>
>
	
<?php
}
}
/* {/block 'body'} */
}
