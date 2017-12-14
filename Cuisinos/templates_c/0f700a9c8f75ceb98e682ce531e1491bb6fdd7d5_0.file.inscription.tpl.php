<?php
/* Smarty version 3.1.30, created on 2017-12-11 10:51:20
  from "C:\wamp64\www\siteCuisine\trunk\Cuisinos\application\views\modules\inscription.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2e632817e660_52227116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f700a9c8f75ceb98e682ce531e1491bb6fdd7d5' => 
    array (
      0 => 'C:\\wamp64\\www\\siteCuisine\\trunk\\Cuisinos\\application\\views\\modules\\inscription.tpl',
      1 => 1512989469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a2e632817e660_52227116 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116005a2e632817d330_03831288', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_116005a2e632817d330_03831288 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<form class="form form-vertical" action="application/modules/inscription.inc.php" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-sm-4 text-center">
				<div class="kv-avatar">
					<div class="file-loading">
						<input id="avatar-1" name="avatar-1" type="file" required>
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
									<input type="password" class="form-input form-control" name="confirmation" oninput="check(this)" placeholder="Entrer votre Mot de passe" required>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<hr>
					<div class="text-right">
						<button type="submit" class="btn-inscription btn btn-primary">Je m'inscris</button>
						<button type="reset" class="btn-inscription btn btn-primary">Effacer</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<div id="kv-avatar-errors-1" class="center-block" style="width:800px;display:none"></div>
	 
	<!-- the fileinput plugin initialization -->
	
	<?php echo '<script'; ?>
>
		function check(input) {
			if(input.value != document.getElementById('pwd').value)
				input.setCustomValidity('Les deux mots de passe doivent correspondre.');
			else input.setCustomValidity('');
		};

		var btnCust = '<button type="button" class="btn btn-secondary" title="Add picture tags" ' + 'onclick="alert(\'Call your custom code here.\')">' +
						  '<i class="fa fa-tags"></i>' + '</button>'; 
		$("#avatar-1").fileinput({
			overwriteInitial: true,
			maxFileSize: 1500,
			showClose: false,
			showCaption: false,
			browseLabel: '',
			removeLabel: '',
			browseIcon: '<i class="fa fa-folder-open-o"></i>',
			removeIcon: '<i class="fa fa-remove"></i>',
			removeTitle: 'Cancel or reset changes',
			elErrorContainer: '#kv-avatar-errors-1',
			msgErrorClass: 'alert alert-block alert-danger',
			defaultPreviewContent: '<img src="asset/images/defaultAvatar.png" alt="Your Avatar">',
			layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
			allowedFileExtensions: ["jpg", "png", "gif"]
		});
	<?php echo '</script'; ?>
>
	
<?php
}
}
/* {/block 'body'} */
}
