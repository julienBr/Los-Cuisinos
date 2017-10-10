{extends file='../layout.tpl'}

{block name=body}
	<section class="col-lg-12">
		<h2>{$data['CAT_LABEL']}<small> {$data['CAT_DESCRIPTION']}</small></h2>
		{for $i=0 to $data['nbRecette']-1}
			<article class="articleRecetteListe col-lg-12">
				<table>
					<tr class="col-lg-8">
						<td class="col-lg-4">
							<img class="img-rounded img-responsive" alt="{$data['RCT_ILLUSTRATION'][$i]}" src="./media/{$data['UTI_LOGIN'][$i]}/{$data['RCT_ILLUSTRATION'][$i]}">
						</td>
						{if $data['RCT_STATUT'][$i] == 'finale'}
							<td class="col-lg-8">
								<h3>{$data['RCT_TITRE'][$i]}</h3></br>
								<p>{$data['RCT_DESCRIPTION'][$i]}</p></br>
								<p><a href="index.php?page=recette_detail&idr={$data['RCT_ID'][$i]}">Lire la recette</a></p></br>
							</td>
						{elseif $data['RCT_STATUT'][$i] == 'soumise'}
							<td>
								<h3>{$data['RCT_TITRE'][$i]}</h3></br>
								<p>{$data['RCT_DESCRIPTION'][$i]}</p></br>
								<p><i>(En cours de validation)</i></p></br>
							</td>
						{else}
							<td>
								<h3>{$data['RCT_TITRE'][$i]}</h3></br>
								<p>{$data['RCT_DESCRIPTION'][$i]}</p></br>
								<p><i>(En cours de finition)</i></p></br>
							</td>
						{/if}
					</tr>
				</table>
			</article>
			<div class="articleBorder col-lg-offset-2 col-lg-8">
			</div>
		{/for}
	</section>
{/block}