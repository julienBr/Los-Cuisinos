<?php
/* Smarty version 3.1.30, created on 2018-01-05 10:08:25
  from "C:\wamp64\www\siteCuisine\trunk\Cuisinos\application\views\modules\profil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4f4e9975fd58_54914458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b13672ced9dd8a5195f2a5cce010a158de72d107' => 
    array (
      0 => 'C:\\wamp64\\www\\siteCuisine\\trunk\\Cuisinos\\application\\views\\modules\\profil.tpl',
      1 => 1515146792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:..\\layout.tpl' => 1,
  ),
),false)) {
function content_5a4f4e9975fd58_54914458 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_247125a4f4e99759a48_64828721', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:..\layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_247125a4f4e99759a48_64828721 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="row">
		<h3 class="monCompte col-sm-12">Mon compte</h3>
		<div class="zone col-sm-10">
			<ul class="nav nav-tabs" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#profil" role="tab"><i class="fa fa-id-card-o"></i> Informations personnelles</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#mesRecettes" role="tab"><i class="fa fa-book"></i> Mes recettes</a>
				</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="profil" role="tabpanel">
					<div class="card cardProfil">
						<div class="row ">
							<img alt="<?php echo $_smarty_tpl->tpl_vars['data']->value['UTI_AVATAR'];?>
" src="./media/<?php echo $_smarty_tpl->tpl_vars['data']->value['UTI_LOGIN'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['UTI_AVATAR'];?>
" class="col-sm-4 imgProfil">
							<div class="col-sm-8 card-block card-block-profil">
								<ul class="listCard">
									<li class="listItem"><?php echo $_smarty_tpl->tpl_vars['data']->value['UTI_PRENOM'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['UTI_NOM'];?>
, alias <?php echo $_smarty_tpl->tpl_vars['data']->value['UTI_LOGIN'];?>
</li>
									<li class="listItem"><?php echo $_smarty_tpl->tpl_vars['data']->value['UTI_MAIL'];?>
</li>
									<li class="listItem"><?php if ($_smarty_tpl->tpl_vars['data']->value['UTI_ADMIN'] == 1) {?>Administrateur<?php } else { ?>Membre<?php }?></li>
									<li class="listItem borderNone"><?php echo $_smarty_tpl->tpl_vars['data']->value['nbRecette'];?>
 <?php if ($_smarty_tpl->tpl_vars['data']->value['nbRecette'] == 1) {?>recette<?php } else { ?>recettes<?php }?> à son actif
										<a class="btnModProfil btn btn-primary" href="index.php?page=modifier_profil&idu=<?php echo $_smarty_tpl->tpl_vars['data']->value['UTI_ID'];?>
"><i class="fa fa-pencil"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
}
}
/* {/block 'body'} */
}
