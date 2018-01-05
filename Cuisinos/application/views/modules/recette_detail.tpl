{extends file='../layout.tpl'}

{block name=body}
<div class="row">
	<div class="col-sm-12">
		<div class="row">
			<h2 class="col-sm-12 rctTitre">{$data['RCT_TITRE']}</h2>
			<h3 class="col-sm-12 rctTitrePar text-muted"><i>par {$data['UTI_LOGIN']}</i></h3>
			<hr class="col-sm-10">
			<table class="col-sm-12">
				<tbody>
					<tr>
						<td class="col-sm-4">
							<img class="imgRctDetail img-fluid" alt="{$data['RCT_ILLUSTRATION']}" src="./media/{$data['UTI_LOGIN']}/{$data['RCT_ILLUSTRATION']}">
						</td>
						<td class="col-sm-4"><ul class="listTemps">
							<li>Temps de préparation : {$data['RCT_TEMPS_PREPARATION']} min</li>
							<li>Temps de cuisson : {$data['RCT_TEMPS_CUISSON']} min</li>
							<li>Coût : {$data['RCT_COUT']}</li>
							<li>Difficulté : {$data['RCT_DIFFICULTE']}</li>
							<li>Nombre de personnes :  {$data['RCT_NBPERSONNE']}</li>
						</ul></td>
						<td class="col-sm-4">
							<ul class="listIgd">
								{for $j=0 to $data['nbIngredient']-1}
									{if $data['UNI_SHORT_LABEL'][$j] == NULL}
										<li>{$data['IGD_RCT_UNI_QUANTITE'][$j]} {$data['UNI_SHORT_LABEL'][$j]} {$data['IGD_LABEL'][$j]}</li>	
									{else}
										<li>{$data['IGD_RCT_UNI_QUANTITE'][$j]} {$data['UNI_SHORT_LABEL'][$j]} de {$data['IGD_LABEL'][$j]}</li>
									{/if}
								{/for}
							</ul>
						</td>
					</tr>
				</tbody>
			</table>
			<hr class="col-sm-10">
			<div class="col-sm-12">
				<h3>Préparation</h3>
				<p style="text-align: justify;">{$data['RCT_PREPARATION']}</p>
				<p class="text-right">
					<a href="javascript:history.go(-1)" class="btn btn-primary">
						<i class="fa fa-undo"></i> Retour à la liste</a></p>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<hr class="col-sm-10">
	<div class="col-sm-12">
		<h3 class="titreComment col-sm-12">Laisser un Commentaire</h3>
		<div class="zone col-sm-10">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
				{if $data['nbComm'] == 0}
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#commentaires" role="tab"><i class="fa fa-comments"></i> Commentaires</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#ajouterCommentaire" role="tab"><i class="fa fa-plus"></i> Ajouter un commentaire</a>
					</li>
				{else}
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#commentaires" role="tab"><i class="fa fa-comments"></i> Commentaires</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#ajouterCommentaire" role="tab"><i class="fa fa-plus"></i> Ajouter un commentaire</a>
					</li>
				{/if}
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				{if $data['nbComm'] == 0}
					<div class="tab-pane" id="commentaires" role="tabpanel">
				{else}
					<div class="tab-pane active" id="commentaires" role="tabpanel">
				{/if}
						{foreach $data['listComments'] as $data}
							<table class="tabComment">
								<tr>
									<td class="col-sm-2">
										<img class="imgProfilComment img-fluid" src="./media/{$data['UTI_LOGIN']}/{$data['UTI_AVATAR']}" alt="{$data['UTI_AVATAR']}">
									</td>
									<td class="col-sm-10 comment">
										<div class="row">
											<h4 class="col-sm-3">{$data['UTI_LOGIN']}</h4>
											<p style="text-align: right;" class="col-sm-3 offset-sm-6"><i>{$data['COM_DATE']}</i></p>
											<p class="pComm col-sm-12"><i>{$data['COM_TEXTE']}</i></p>
											{if $data['UTI_LOGIN'] == $smarty.session.login}
												<div class="text-right col-sm-12">
													<a class="btn btn-primary" href="index.php?page=recette_detail&idr={$data['RCT_ID']}&suppComment={$data['COM_ID']}"><i class="fa fa-remove"></i> Supprimer</a>
												</div>
											{/if}
										</div>
										<hr>
									</td>
								</tr>
							</table>
						{/foreach}
					</div>
				{if $data['nbComm'] == 0}
					<div class="tab-pane active" id="ajouterCommentaire" role="tabpanel">
				{else}
					<div class="tab-pane" id="ajouterCommentaire" role="tabpanel">
				{/if}
						{if isset($smarty.session.login)}
							<form action="#" method="post" class="form-horizontal" id="commentForm" role="form">
								<div class="form-group row">
									<label for="labelComment" class="col-sm-2 col-form-label">Commentaire</label>
									<div class="col-sm-10">
										<textarea class="form-control" name="textCommentaire" rows="3"></textarea>
									</div>
								</div>
								<div class="form-group">
									<hr>
									<div class="text-right">
										<button name="btnCommentaire" type="submit" class="buttonComment btn-inscription btn btn-primary"><i class="fa fa-check"></i> Valider</button>
										<button type="reset" class="buttonComment btn-inscription btn btn-primary"><i class="fa fa-eraser"></i> Effacer</button>
									</div>
								</div>
							</form>
						{else}
							<p><i>Veuillez vous connecter pour ajouter un commentaire</i></p>
						{/if}
					</div>
				</div>
			</div>
		</div>
	</div>
	<p class="text-right">
		<a class="smoothScroll btn btn-primary" href="#top"><i class="fa fa-level-up"></i> Haut de page</a>
	</p>
</div>
{/block}