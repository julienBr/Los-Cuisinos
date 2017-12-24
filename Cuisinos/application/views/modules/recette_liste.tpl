{extends file='../layout.tpl'}
{block name=body}
	<div class="row">
		{for $i=0 to $data['nbRecette']-1}
			<div class="col-sm card card-rct" style="width: 20rem;">
				<div class="row">
					<img class="col-sm-4 card-img-top-rct" src="./media/{$data['UTI_LOGIN'][$i]}/{$data['RCT_ILLUSTRATION'][$i]}" alt="Card image recettes">
					<div class="col-sm-7 card-body card-body-rct">
						<h5 class="card-title-rct">{$data['RCT_TITRE'][$i]}</h5>
						<h6 class="card-subtitle mb-2 text-muted">par {$data['UTI_LOGIN'][$i]}</h6>
					</div>
				</div>
				{if $data['RCT_DESCRIPTION'][$i]|count_characters > 125}
					<p class="card-text" style="text-align: justify;"><i>{$data['RCT_DESCRIPTION'][$i]|substr:0:125}...</i></p>
				{else}
					<p class="card-text" style="text-align: justify;"><i>{$data['RCT_DESCRIPTION'][$i]}</i></p>
				{/if}
				{if $data['RCT_STATUT'][$i] == 'finale'}
					<p class="text-right">
						<a href="index.php?page=recette_detail&idr={$data['RCT_ID'][$i]}" class="btn btn-primary">
							<i class="fa fa-arrow-circle-right"></i> Voir la recette</a></p>
				{elseif $data['RCT_STATUT'][$i] == 'soumise'}
					<p class="text-right"><i>(En cours de validation)</i></p>
				{else}
					<p class="text-right"><i>(En cours de finition)</i></p>
				{/if}
			</div>
		{/for}
	</div>
{/block}