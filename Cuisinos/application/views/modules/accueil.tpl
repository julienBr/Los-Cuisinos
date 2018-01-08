{extends "..\layout.tpl"}
{block name=body}
	<div class="row">
		<h3 class="menuDuJour col-sm-12">Menu mystère !</h3>
		<div class="col-sm card card-rct" style="width: 20rem;">
			<div class="row">
				<img class="col-sm-4 card-img-top-rct" src="./media/{$entree['UTI_LOGIN']}/{$entree['RCT_ILLUSTRATION']}" alt="Card image recettes">
				<div class="col-sm-7 card-body card-body-rct">
					<h5 class="card-title-rct">{$entree['RCT_TITRE']}</h5>
					<h6 class="card-subtitle mb-2 text-muted">par {$entree['UTI_LOGIN']}</h6>
				</div>
			</div>
			{if $entree['RCT_DESCRIPTION']|count_characters > 125}
				<p class="card-text" style="text-align: justify;"><i>{$entree['RCT_DESCRIPTION']|substr:0:125}...</i></p>
			{else}
				<p class="card-text" style="text-align: justify;"><i>{$entree['RCT_DESCRIPTION']}</i></p>
			{/if}
			{if $entree['RCT_STATUT'] == 'finale'}
				<p class="text-right">
					<a href="index.php?page=recette_detail&idr={$entree['RCT_ID']}" class="btn btn-primary">
						<i class="fa fa-arrow-circle-right"></i> Voir la recette</a></p>
			{elseif $entree['RCT_STATUT'] == 'soumise'}
				<p class="text-right"><i>(En cours de validation)</i></p>
			{else}
				<p class="text-right"><i>(En cours de finition)</i></p>
			{/if}
		</div>
		<div class="col-sm card card-rct" style="width: 20rem;">
			<div class="row">
				<img class="col-sm-4 card-img-top-rct" src="./media/{$plat['UTI_LOGIN']}/{$plat['RCT_ILLUSTRATION']}" alt="Card image recettes">
				<div class="col-sm-7 card-body card-body-rct">
					<h5 class="card-title-rct">{$plat['RCT_TITRE']}</h5>
					<h6 class="card-subtitle mb-2 text-muted">par {$plat['UTI_LOGIN']}</h6>
				</div>
			</div>
			{if $plat['RCT_DESCRIPTION']|count_characters > 125}
				<p class="card-text" style="text-align: justify;"><i>{$plat['RCT_DESCRIPTION']|substr:0:125}...</i></p>
			{else}
				<p class="card-text" style="text-align: justify;"><i>{$plat['RCT_DESCRIPTION']}</i></p>
			{/if}
			{if $plat['RCT_STATUT'] == 'finale'}
				<p class="text-right">
					<a href="index.php?page=recette_detail&idr={$plat['RCT_ID']}" class="btn btn-primary">
						<i class="fa fa-arrow-circle-right"></i> Voir la recette</a></p>
			{elseif $plat['RCT_STATUT'] == 'soumise'}
				<p class="text-right"><i>(En cours de validation)</i></p>
			{else}
				<p class="text-right"><i>(En cours de finition)</i></p>
			{/if}
		</div>
		<div class="col-sm card card-rct" style="width: 20rem;">
			<div class="row">
				<img class="col-sm-4 card-img-top-rct" src="./media/{$dessert['UTI_LOGIN']}/{$dessert['RCT_ILLUSTRATION']}" alt="Card image recettes">
				<div class="col-sm-7 card-body card-body-rct">
					<h5 class="card-title-rct">{$dessert['RCT_TITRE']}</h5>
					<h6 class="card-subtitle mb-2 text-muted">par {$dessert['UTI_LOGIN']}</h6>
				</div>
			</div>
			{if $dessert['RCT_DESCRIPTION']|count_characters > 125}
				<p class="card-text" style="text-align: justify;"><i>{$dessert['RCT_DESCRIPTION']|substr:0:125}...</i></p>
			{else}
				<p class="card-text" style="text-align: justify;"><i>{$dessert['RCT_DESCRIPTION']}</i></p>
			{/if}
			{if $dessert['RCT_STATUT'] == 'finale'}
				<p class="text-right">
					<a href="index.php?page=recette_detail&idr={$dessert['RCT_ID']}" class="btn btn-primary">
						<i class="fa fa-arrow-circle-right"></i> Voir la recette</a></p>
			{elseif $dessert['RCT_STATUT'] == 'soumise'}
				<p class="text-right"><i>(En cours de validation)</i></p>
			{else}
				<p class="text-right"><i>(En cours de finition)</i></p>
			{/if}
		</div>
	</div>
{/block}