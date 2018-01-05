{extends "..\layout.tpl"}
{block name=body}
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
			</div>
		</div>
	</div>
{/block}