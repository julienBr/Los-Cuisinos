<div class="row">
	<nav class="col-sm-12 navbar-light bg-light">
		<div class="row" id="top">
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
						{if isset($smarty.session.login)}
							<form class="formDeco" method="post">
								<button type="submit" class="seDeconnecter btn btn-secondary" name="signOut"><i class="fa fa-sign-out"></i> Se déconnecter</button>
							</form>
						{else}
							<li class="dropdown"><a href="#" class="seConnecter btn btn-secondary" data-toggle="dropdown"><i class="fa fa-sign-in"></i> Se connecter</a>
								<ul id="login-dp" class="dropdown-menu">
									<li>
										<div class="divLogin row">
											<div class="col-sm-12">
												<form class="form" role="form" method="post" accept-charset="UTF-8" id="login-nav">
													<div class="form-group">
														<div class="input-group">
															<span class="input-group-addon"><i class="fa fa-user-secret fa" aria-hidden="true"></i></span>
															<input type="text" class="form-input form-control" name="signInLogin" id="signInLogin" placeholder="Login" required>
														</div>
													</div>
													<div class="form-group">
														<div class="input-group">
															<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
															<input type="password" id="pwd" class="form-input form-control" name="signInPassword" placeholder="Mot de passe" required>
														</div>
													</div>
													<button name="signIn" type="submit" class="btnSignIn btn btn-primary btn-block">Sign in</button>
													<div class="checkbox">
														<label for="remember"><input name="remember" type="checkbox" id="remember"> Se souvenir de moi</label>
													</div>
												</form>
												<p class="nouveauIci">Nouveau ici ? <a href="#"><b>Rejoins nous</b></a></p>
											</div>
										</div>
									</li>
								</ul>
							</li>
						{/if}
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<nav class="accroche col-sm-12 navbar-light bg-light">
		<p><i>" Bien manger, c'est le début du bonheur "</i></p>
	</nav>
</div>