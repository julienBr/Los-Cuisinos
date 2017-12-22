{extends file='../layout.tpl'}
{block name=body}
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
									{literal}
										<input type="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" class="form-input form-control" name="mail"
											placeholder="Entrer votre Mail" required>
									{/literal}
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
	 
	{if $data['loginExist'] == '1'}
		<script>alertify.warning('Ce login existe déjà..');</script>
	{elseif $data['isUploadedFile'] == '1'}
		<script>alertify.error('Fichier introuvable.');</script>
	{elseif $data['moveUploadedFile'] == '1'}
		<script>alertify.error('Impossible de copier le fichier.');</script>
	{elseif $data['inscriptionReussie'] == '1'}
		<script>
			alertify.confirm().set('message', '<p>Inscription réussie</p><br/><a href="index.php?page=accueil">Accueil</a>').show();
		</script>
	{/if}

	<!-- the fileinput plugin initialization -->
	{literal}
	<script>
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
	</script>
	{/literal}
{/block}