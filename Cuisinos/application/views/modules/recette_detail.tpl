{extends file='../layout.tpl'}

{block name=body}
	<div class="row">
		<div class="col-sm-12">
			<div class="row">
				<h2 class="col-sm-12 rctTitre">{$data['RCT_TITRE']}</h2>
				<h3 class="col-sm-12 rctTitrePar text-muted"><i>par {$data['UTI_LOGIN']}</i></h3>
				<hr class="col-sm-10">
				<table class="table-sm table-responsive">
					<tr>
						<td class="col-sm-4">
							<img class="imgRctDetail img-fluid" alt="{$data['RCT_ILLUSTRATION']}" src="./media/{$data['UTI_LOGIN']}/{$data['RCT_ILLUSTRATION']}">
						</td>
						<td class="col-sm-5"><ul class="listTemps">
							<li>Temps de préparation : {$data['RCT_TEMPS_PREPARATION']} min</li>
							<li>Temps de cuisson : {$data['RCT_TEMPS_CUISSON']} min</li>
							<li>Coût : {$data['RCT_COUT']}</li>
							<li>Difficulté : {$data['RCT_DIFFICULTE']}</li>
							<li>Nombre de personnes :  {$data['RCT_NBPERSONNE']}</li>
						</ul></td>
						<td class="col-sm-3">
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
			<h3 class="titreComment col-sm-12">Laisser un Commentaires</h3>
			<div class="zoneComment col-sm-10">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#commentaires" role="tab">Commentaires</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#ajouterCommentaire" role="tab">Ajouter un commentaire</a>
					</li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="commentaires" role="tabpanel">
						<table class="tabComment">
							<tr>
								<td class="col-sm-2">
									<img class="imgProfilComment img-fluid" src="https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg" alt="profile">
								</td>
								<td class="col-sm-9 comment">
									<div class="row">
										<h4 class="col-sm-3">Marco</h4>
										<p style="text-align: right;" class="col-sm-3 offset-sm-6"><i>22.09.2014</i></p>
										<p class="col-sm-12">Great snippet! Thanks for sharing.</p>
									</div>
									<hr>
								</td>
							</tr>
						</table>
						<table class="tabComment">
							<tr>
								<td class="col-sm-2">
									<img class="imgProfilComment img-fluid" src="https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg" alt="profile">
								</td>
								<td class="col-sm-9 comment">
									<div class="row">
										<h4 class="col-sm-3">Marco</h4>
										<p style="text-align: right;" class="col-sm-3 offset-sm-6"><i>22.09.2014</i></p>
										<p class="col-sm-12">Great snippet! Thanks for sharing.</p>
									</div>
									<hr>
								</td>
							</tr>
						</table>
					</div>
					<div class="tab-pane" id="ajouterCommentaire" role="tabpanel">
						<form action="#" method="post" class="form-horizontal" id="commentForm" role="form">
							<div class="form-group row">
								<label for="labelComment" class="col-sm-2 col-form-label">Commentaire </label>
								<div class="col-sm-10">
									<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="exampleFormControlTextarea1">Commentaires</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
{/block}