<?php
/* Smarty version 3.1.30, created on 2017-12-15 09:42:18
  from "C:\wamp64\www\siteCuisine\trunk\Cuisinos\application\views\nav\nav.inc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3398fa9e4354_11064896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cb71a69e8c2755cc3f4086a1fa82f931124d77e' => 
    array (
      0 => 'C:\\wamp64\\www\\siteCuisine\\trunk\\Cuisinos\\application\\views\\nav\\nav.inc.tpl',
      1 => 1513330887,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3398fa9e4354_11064896 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
	<nav class="col-sm-12 navbar-light bg-light">
		<div class="row">
			<a class="col-sm-2 navbar-brand" href="index.php?page=accueil">
				<img src="asset/images/icon.png" width="40" height="40" class="icon" alt="icon.png"><span class="losCuisinos"><b>Los Cuisinos</b></span>
			</a>
			<div class="col-sm-3 btn-group" role="group">
				<button type="button" class="btn btn-secondary" onclick="window.location.href='index.php?page=accueil'"><i class="fa fa-home"></i> Accueil</button>
				<button type="button" class="btn btn-secondary" onclick="window.location.href='index.php?page=recette'"><i class="fa fa-cutlery"></i> Recettes</button>
			</div>
			<div class="col-sm">
				<div class="row">
					<form method="post" class="col-sm-7 form-inline my-2 my-lg-0">
						<input class="inputSearch form-control mr-sm-2" name="recherche" value="" type="search" placeholder="une recette, un ingrédient..." aria-label="Search">
						<button name="rechercher" class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
					</form>
					<ul class="col-sm btn-group" role="group">
						<button type="button" class="btn btn-secondary" onclick="window.location.href='index.php?page=inscription'"><i class="fa fa-user-circle-o"></i> S'inscrire</button>
						<li class="dropdown"><a href="#" class="seConnecter btn btn-secondary" data-toggle="dropdown"><i class="fa fa-sign-in"></i> Se connecter</a>
							<ul id="login-dp" class="dropdown-menu">
								<li>
									<div class="divLogin row">
										<div class="col-md-12">Login via
											<form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
												<div class="form-group">
													<label class="sr-only" for="exampleInputEmail2">Email address</label>
													<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Adresse e-mail" required>
												</div>
												<div class="form-group">
													<label class="sr-only" for="exampleInputPassword2">Password</label>
													<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Mot de passe" required>
													<div class="help-block text-right"><a href="">Mot de passe oublié ?</a></div>
												</div>
												<div class="form-group">
													<button type="submit" class="btn btn-primary btn-block">Sign in</button>
												</div>
												<div class="checkbox">
													<label><input type="checkbox"> Se souvenir de moi</label>
												</div>
											</form>
											<p class="nouveauIci">Nouveau ici ? <a href="#"><b>Rejoins nous</b></a></p>
										</div>
									</div>
								</li>
							</ul>
						</li>
						<!--<button type="button" class="btn btn-secondary" onclick="window.location.href='index.php?page=connexion'"><i class="fa fa-sign-in"></i> Se connecter</button>-->
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<nav class="accroche col-sm-12 navbar-light bg-light">
		<p><i>" Bien manger, c'est le début du bonheur "</i></p>
	</nav>
</div><?php }
}
