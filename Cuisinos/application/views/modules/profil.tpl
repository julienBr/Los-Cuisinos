{extends "..\layout.tpl"}
{block name=body}
	<div class="row">
		<h3 class="monCompte col-sm-12">Mon compte</h3>
		<div class="zone col-sm-10">
			<ul class="nav nav-tabs" role="tablist">
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#profil" role="tab"><i class="fa fa-id-card-o"></i> Informations personnelles</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#mesRecettes" role="tab"><i class="fa fa-book"></i> Mes recettes</a>
				</li>
				<li>
					<a class="nav-link" data-toggle="tab" href="#ajoutRecette" role="tab"><i class="fa fa-plus"></i> Nouvelle recette</a>
				</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane" id="profil" role="tabpanel">
					<div class="card cardProfil">
						<div class="row ">
							<img alt="{$data['UTI_AVATAR']}" src="./media/{$data['UTI_LOGIN']}/{$data['UTI_AVATAR']}" class="col-sm-4 imgProfil">
							<div class="col-sm-8 card-block card-block-profil">
								<ul class="listCard">
									<li class="listItem">{$data['UTI_PRENOM']} {$data['UTI_NOM']}, alias {$data['UTI_LOGIN']}</li>
									<li class="listItem">{$data['UTI_MAIL']}</li>
									<li class="listItem">{if $data['UTI_ADMIN'] == 1}Administrateur{else}Membre{/if}</li>
									<li class="listItem borderNone">{$data['nbRecette']} {if $data['nbRecette'] == 1}recette{else}recettes{/if} à son actif
										<a class="btnModProfil btn btn-primary" href="index.php?page=modifier_profil&idu={$data['UTI_ID']}"><i class="fa fa-pencil"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane active" id="mesRecettes" role="tabpanel">
					<div class="listeRecette">
						<table class="tabRCT table-hover table table-sm table">
							<tbody>
								{foreach $data['listeRecettes'] as $data}
									<tr>
										<td class="align-middle col-sm-6">{$data['RCT_TITRE']}</td>
										<td class="text-center align-middle col-sm-3">{$data['CAT_LABEL']}</td>
										<td class="text-right align-middle col-sm-3">
											<div class="btn-group" role="group">
												<button type="button" onclick="window.location.href='index.php?page=recette_detail&idr={$data['RCT_ID']}'" class="ajoutModSupp btn btn-secondary"><i class="fa fa-search"></i></button>
												<button type="button" onclick="window.location.href='index.php?page=modifier_recette&idu={$data['UTI_ID']}&idr={$data['RCT_ID']}'" class="ajoutModSupp btn btn-secondary"><i class="fa fa-pencil"></i></button>
												<a class="ajoutModSupp btn btn-secondary" href="index.php?page=profil&idu={$data['UTI_ID']}&idr={$data['RCT_ID']}"
													onclick="return confirm('Vous êtes sur le point de supprimer : {$data['RCT_TITRE']}\nEtes-vous sur ?');"><i class="fa fa-remove"></i></a>
											</div>
										</td>
									</tr>
								{/foreach}
							</tbody>
						</table>
					</div>
				</div>
				<div class="tab-pane" id="ajoutRecette" role="tabpanel">
					<form class="form form-vertical formAjoutRct" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col-sm-3 text-center">
								<div class="kv-avatar">
									<div class="file-loading">
										<input id="avatar-4" name="avatar" type="file" required>
									</div>
								</div>
								<div class="kv-avatar-hint"><small>Selectionner un fichier < 1500 Ko</small></div>
							</div>
							<div class="col-sm-9">
								<div class="row">
									<div class="col-sm-5">
										<div class="col-sm-12 form-group">
											<div class="row">
												<label for="titre" class="col-sm-12 control-label"><i>Titre</i></label>
												<div class="col-sm-12">
													<input type="text" class="form-input form-control" name="titre" id="titre" required>
												</div>
												<label for="preparation" class="col-sm-12 control-label"><i>Préparation</i></label>
												<div class="col-sm-12">
													<textarea class="form-input form-control" rows="10" name="preparation" id="preparation" required></textarea>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-7">
										<div class="col-sm-12 form-group">
											<div class="row">
												<label for="description" class="col-sm-12 control-label"><i>Description</i></label>
												<div class="col-sm-12">
													<textarea class="form-input form-control" name="description" id="description" required></textarea>
												</div>
												<div class="divForm col-sm-12">
													<div class="row">
														<label for="difficulte" class="col-sm-2 control-label">Difficulté</label>
														<div class="col-sm-4">
															<select class="form-control" id="difficulte" name="difficulte" required>
																<option value="facile" selected>facile</option>
																<option value="moyen">moyen</option>
																<option value="difficile">difficile</option>
															</select>		
														</div>
														<label for="cout" class="col-sm-2 control-label">Coût</label>
														<div class="col-sm-4">
															<select class="form-control" id="cout" name="cout" required>
																<option value="faible" selected>faible</option>
																<option value="moyen">moyen</option>
																<option value="eleve">élevé</option>
															</select>
														</div>
													</div>
												</div>
												<div class="divForm col-sm-12">
													<div class="row">
														<label for="tmpPrepa" class="text-center col-sm-3 control-label">Tps préparation</label>
														<div class="col-sm-3">
															<input type="text" class="form-input form-control" {literal} pattern="(0[0-9]|1[0-9]|2[0-3])(:[0-5][0-9]){2}" {/literal} name="tmpPrepa" id="tmpPrepa" placeholder="00:00:00" required>
														</div>
														<label for="tmpCuisson" class="text-center col-sm-3 control-label">Tps cuisson</label>
														<div class="col-sm-3">
															<input type="text" class="form-input form-control" {literal} pattern="(0[0-9]|1[0-9]|2[0-3])(:[0-5][0-9]){2}" {/literal} name="tmpCuisson" id="tmpCuisson" placeholder="00:00:00">
														</div>
													</div>
												</div>
												<div class="col-sm-12">
													<div class="row">
														<label for="tmpRepos" class="text-center col-sm-3 control-label">Tps repos</label>
														<div class="col-sm-3">
															<input type="text" class="form-input form-control" {literal} pattern="(0[0-9]|1[0-9]|2[0-3])(:[0-5][0-9]){2}" {/literal} name="tmpRepos" id="tmpRepos" placeholder="00:00:00">
														</div>
														<label for="nbPersonne" class="text-center col-sm-3 control-label">Nb personne</label>
														<div class="col-sm-3">
															<input type="number" class="form-input form-control" name="nbPersonne" id="nbPersonne" required>
														</div>
													</div>
												</div>
												<div class="col-sm-12">
													<div class="row">
														<label for="categorie" class="col-sm-2 control-label">Catégorie</label>
														<div class="col-sm-4">
															<select class="form-control" id="categorie" name="categorie" required>
																{foreach $data['categorie'] as $data}
																	<option value="{$data['CAT_LABEL']}">{$data['CAT_LABEL']}</option>
																{/foreach}
															</select>
														</div>
													</div>
												</div>
												<div class="col-sm-12">
													<div class="row">
														<label for="nbIngredient" class="divForm col-sm-6 control-label">Nombres d'ingrédients :</label>
														<input type="number" class="divForm addInput col-sm-3 form-input form-control" name="nbIngredient" id="nbIngredient" required>
														<a class="col-sm-3 addAInput btn btn-secondary" onclick="ajout_input()"><i class="fa fa-plus"></i></a>
														<div class="col-sm-12" id="InputIngredient">
															<!--ajout_input();-->
														</div>
													</div>
												</div>
												<div class="text-right col-sm-12">
													<button name="ajoutRecette" type="submit" class="btn-modRct btn btn-primary"><i class="fa fa-pencil"></i> Modifier</button>
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
					 
					{if $data['isUploadedFile'] == '1'}
						<script>alertify.error('Fichier introuvable.');</script>
					{elseif $data['moveUploadedFile'] == '1'}
						<script>alertify.error('Impossible de copier le fichier.');</script>
					{/if}

					<!-- the fileinput plugin initialization -->
					{literal}
					<script>
						$("#avatar-4").fileinput({
							overwriteInitial: true,
							maxFileSize: 1500,
							showClose: false,
							showCaption: false,
							browseLabel: 'Ouvrir Image',
							browseIcon: '<i class="fa fa-folder-open-o"></i>',
							msgZoomModalHeading: 'Vue détaillée',
							elErrorContainer: '#kv-avatar-errors-1',
							msgErrorClass: 'alert alert-block alert-danger',
							layoutTemplates: {main2: '{preview} {browse}'},
							allowedFileExtensions: ["jpg", "png", "gif"]{/literal}
						});

						function ajout_input() {
							var nbIngredient = document.getElementById("nbIngredient").value;
							for(var i=1; i<=nbIngredient; i++) {
								document.getElementById("InputIngredient").innerHTML += '<div class="row"><input type="number"  class="text-center divForm col-sm-4 form-input form-control" name="qteIngredient'+i+'" id="qteIngredient'+i+'" value="1"><select class="divForm col-sm-4 form-control" id="ingredients" name="ingredients'+i+'" required>{foreach $data['unites'] as $data}<option value="{$data['UNI_LABEL']}">{$data['UNI_LABEL']}</option>{/foreach}</select><input type="text" class="divForm col-sm-4 form-input form-control" name="ingredient'+i+'" id="ingredient'+i+'" placeholder="Ingrédient '+i+'" required></div>';
							}
						}
					</script>
				</div>
			</div>
		</div>
	</div>
{/block}