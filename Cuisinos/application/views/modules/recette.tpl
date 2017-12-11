{extends file='../layout.tpl'}
{block name=body}
	<div class="row">
		{foreach $data['recetteCat'] as $data}
			<div class="col-sm card" style="width: 20rem;">
				<p class="text-center"><img class="card-img-top-cat" src="./media/categories/{$data.CAT_ILLUSTRATION}" alt="Card image categories"></p>
				<div class="card-body">
					<h4 class="card-title">{$data.CAT_LABEL}</h4>
					<p class="card-text"><i>{$data.CAT_DESCRIPTION}</i></p>
					<a href="index.php?page=recette_liste&idc={$data['CAT_ID']}" class="btn-card btn btn-primary">Voir les recettes</a>
				</div>
			</div>
		{/foreach}
	</div>
{/block}