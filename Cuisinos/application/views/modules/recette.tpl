{extends file='../layout.tpl'}

{block name=body}
	<section>
		<article>
			<div class="row">
				{foreach $data['recetteCat'] as $ligne}
					<div class="articleRecette col-lg-4">
						</br>
						<h2 align="center">{$ligne['CAT_LABEL']}</h2>
						<a href="index.php?page=recette_liste&idc={$ligne['CAT_ID']}"><img class="col-lg-12 img-responsive img-rounded" {html_image file="./media/categories/`$ligne.CAT_ILLUSTRATION`" width=300 height=200 }</a>
						</br>
					</div>
				{/foreach}
			</div>
		</article>
	</section>
{/block}