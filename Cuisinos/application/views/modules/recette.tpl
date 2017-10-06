{extends file='../layout.tpl'}

{block name=body}
	<section>
		<article>
			<div class="row">
				{foreach $data['recetteCat'] as $ligne}
					<div class="articleRecette col-lg-4">
						</br>
						<h2>{$ligne['CAT_LABEL']}</h2>
						<img class="img-responsive img-rounded" {html_image file="./media/categories/`$ligne.CAT_ILLUSTRATION`" width=300 height=200}</a>
						<p><a href="index.php?page=recette_liste&idc={$ligne['CAT_ID']}">Voir les recettes</a></p>
						</br>
					</div>
				{/foreach}
			</div>
		</article>
	</section>
{/block}