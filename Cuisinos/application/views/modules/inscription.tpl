{extends file='../layout.tpl'}
{block name=body}
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
{/block}