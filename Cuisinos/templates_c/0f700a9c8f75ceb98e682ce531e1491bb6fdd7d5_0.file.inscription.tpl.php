<?php
/* Smarty version 3.1.30, created on 2017-12-06 16:12:31
  from "C:\wamp64\www\siteCuisine\trunk\Cuisinos\application\views\modules\inscription.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2816ef854669_61773504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f700a9c8f75ceb98e682ce531e1491bb6fdd7d5' => 
    array (
      0 => 'C:\\wamp64\\www\\siteCuisine\\trunk\\Cuisinos\\application\\views\\modules\\inscription.tpl',
      1 => 1512576749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a2816ef854669_61773504 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154095a2816ef852af8_09914038', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_154095a2816ef852af8_09914038 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h2>Inscription</h2>
	<form method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="nom" class="col-lg-12 control-label"><span>*</span><i> Nom</i></label>
			<div class="col-lg-12">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
					<input type="text" class="form-control" name="nom" placeholder="Entrer votre Nom" required>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="prenom" class="col-lg-12 control-label"><span>*</span><i> Prénom</i></label>
			<div class="col-lg-12">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
					<input type="text" class="form-control" name="prenom" placeholder="Entrer votre Prénom" required>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="mail" class="col-lg-12 control-label"><span>*</span><i> Mail</i></label>
			<div class="col-lg-12">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
					<input type="email" class="form-control" name="mail" placeholder="Entrer votre Mail" required>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="avatar" class="col-lg-12 control-label"><span>*</span><i> Avatar</i></label>
			<div class="col-lg-12">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-camera" aria-hidden="true"></i></span>
					<input name="avatar" type="file" class="form-control" id="avatar" required>	
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="login" class="col-lg-12 control-label"><span>*</span><i> Login</i></label>
			<div class="col-lg-12">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-user-secret fa" aria-hidden="true"></i></span>
					<input type="text" class="form-control" name="login" id="login" placeholder="Entrer votre Login" required>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="password" class="col-lg-12 control-label"><span>*</span><i> Mot de passe</i></label>
			<div class="col-lg-12">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
					<input type="password" id="pwd" class="form-control" name="password" placeholder="Entrer votre Mot de passe" required>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="confirmation" class="col-lg-12 control-label"><span>*</span><i> Confirmation</i></label>
			<div class="col-lg-12">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
					<input type="password" class="form-control" name="confirmation" oninput="check(this)" placeholder="Entrer votre Mot de passe" required>
				</div>
			</div>
		</div>
		<div class="button form-group col-lg-offset-3 col-lg-9">
			<button type="submit" name="submit" class="btn btn-default">Valider</button>
			<button type="reset" class="btn btn-default">Effacer</button>
			<p><i><span>* </span>champs obligatoires</i></p>
		</div>
	</form>
<?php
}
}
/* {/block 'body'} */
}
