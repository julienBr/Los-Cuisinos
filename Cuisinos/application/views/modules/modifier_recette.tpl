{extends file='../layout.tpl'}
{block name=body}
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
									<input type="text" class="form-input form-control" name="titre" id="titre" value="{$rct['RCT_TITRE']}" required>
								</div>
								<label for="preparation" class="col-sm-12 control-label"><i>Préparation</i></label>
								<div class="col-sm-12">
									<textarea class="form-input form-control" rows="10" name="preparation" id="preparation" required>{$rct['RCT_PREPARATION']}</textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="col-sm-12 form-group">
							<div class="row">
								<label for="description" class="col-sm-12 control-label"><i>Description</i></label>
								<div class="col-sm-12">
									<textarea class="form-input form-control" name="description" id="description" required>{$rct['RCT_DESCRIPTION']}</textarea>
								</div>
								<div class="divForm col-sm-12">
									<div class="row">
										<label for="difficulte" class="col-sm-2 control-label">Difficulté</label>
										<div class="col-sm-4">
											<select class="form-control" id="difficulte" name="difficulte">
												{if $rct['RCT_DIFFICULTE'] == "facile"}
													<option value="facile" selected>facile</option>
													<option value="moyen">moyen</option>
													<option value="difficile">difficile</option>
												{elseif $rct['RCT_DIFFICULTE'] == "moyen"}
													<option value="facile">facile</option>
													<option value="moyen" selected>moyen</option>
													<option value="difficile">difficile</option>
												{else}
													<option value="facile">facile</option>
													<option value="moyen">moyen</option>
													<option value="difficile" selected>difficile</option>
												{/if}
											</select>		
										</div>
										<label for="cout" class="col-sm-2 control-label">Coût</label>
										<div class="col-sm-4">
											<select class="form-control" id="cout" name="cout">
												{if $rct['RCT_COUT'] == "faible"}
													<option value="faible" selected>faible</option>
													<option value="moyen">moyen</option>
													<option value="eleve">élevé</option>
												{elseif $rct['RCT_COUT'] == "moyen"}
													<option value="faible">faible</option>
													<option value="moyen"  selected>moyen</option>
													<option value="eleve">élevé</option>
												{else}
													<option value="faible">faible</option>
													<option value="moyen">moyen</option>
													<option value="eleve" selected>élevé</option>
												{/if}
											</select>
										</div>
									</div>
								</div>
								<div class="divForm col-sm-12">
									<div class="row">
										<label for="tmpPrepa" class="text-center col-sm-3 control-label">Tps préparation</label>
										<div class="col-sm-3">
											<input type="text" class="form-input form-control" {literal} pattern="(0[0-9]|1[0-9]|2[0-3])(:[0-5][0-9]){2}" {/literal} name="tmpPrepa" id="tmpPrepa" value="{$rct['RCT_TEMPS_PREPARATION']}" required>
										</div>
										<label for="tmpCuisson" class="text-center col-sm-3 control-label">Tps cuisson</label>
										<div class="col-sm-3">
											<input type="text" class="form-input form-control" {literal} pattern="(0[0-9]|1[0-9]|2[0-3])(:[0-5][0-9]){2}" {/literal} name="tmpCuisson" id="tmpCuisson" value="{$rct['RCT_TEMPS_CUISSON']}">
										</div>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="row">
										<label for="tmpRepos" class="text-center col-sm-3 control-label">Tps repos</label>
										<div class="col-sm-3">
											<input type="text" class="form-input form-control" {literal} pattern="(0[0-9]|1[0-9]|2[0-3])(:[0-5][0-9]){2}" {/literal} name="tmpRepos" id="tmpRepos" value="{$rct['RCT_TEMPS_REPOS']}">
										</div>
										<label for="nbPersonne" class="text-center col-sm-3 control-label">Nb personne</label>
										<div class="col-sm-3">
											<input type="number" class="form-input form-control" name="nbPersonne" id="nbPersonne" value="{$rct['RCT_NBPERSONNE']}" required>
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
	 
	{if $data['isUploadedFile'] == '1'}
		<script>alertify.error('Fichier introuvable.');</script>
	{elseif $data['moveUploadedFile'] == '1'}
		<script>alertify.error('Impossible de copier le fichier.');</script>
	{/if}

	<!-- the fileinput plugin initialization -->
	{literal}
	<script>
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
			defaultPreviewContent: {/literal}'<img class="imgModProfil" src="media/{$uti['UTI_LOGIN']}/{$rct['RCT_ILLUSTRATION']}">'{literal},
			layoutTemplates: {main2: '{preview} {browse}'},
			allowedFileExtensions: ["jpg", "png", "gif"]
		});
	</script>
	{/literal}
{/block}