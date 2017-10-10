{extends file='../layout.tpl'}

{block name=body}
	<div class="col-lg-12">
			<h2 class="page-header">
				{$data['RCT_TITRE']}
				<small>Recette proposée par {$data['UTI_LOGIN']}</small>
			</h2>
			<section>
				<article class="articleRecetteDetail">
					<table>
						<tr class="col-lg-12">
							<td class="col-lg-4">
								<img class="img-rounded img-responsive" alt="{$data['RCT_ILLUSTRATION']}" src="./media/{$data['UTI_LOGIN']}/{$data['RCT_ILLUSTRATION']}">
								</br>
							</td>
							<td class="col-lg-8"><ul>
								<li>Temps de préparation : {$data['RCT_TEMPS_PREPARATION']} min</li>
								<li>Temps de cuisson : {$data['RCT_TEMPS_CUISSON']} min</li>
								<li>Coût : {$data['RCT_COUT']}</li>
								<li>Difficulté : {$data['RCT_DIFFICULTE']}</li>
								<li>Nombre de personnes :  {$data['RCT_NBPERSONNE']}</li>
							</ul></td>
						</tr>
					</table>
					<div class="articleBorder col-lg-offset-2 col-lg-8">
					</div>
				</article>
				<article>
					<h2>Ingrédients :</h2>
						<ul>
							{for $j=0 to $data['nbIngredient']-1}
								<li>{$data['IGD_RCT_UNI_QUANTITE'][$j]} {$data['UNI_SHORT_LABEL'][$j]} {$data['IGD_LABEL'][$j]}</li>
							{/for}
						</ul>
					<div class="articleBorder col-lg-offset-2 col-lg-8">
					</div>
				</article>
				<article>
					<h2 class="col-lg-12">Préparation :</h2>
					<p>
						{$data['RCT_PREPARATION']}
					</p>
				</article>
			</section>
	</div>
{/block}