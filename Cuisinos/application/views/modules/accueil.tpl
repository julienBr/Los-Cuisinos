{extends "..\layout.tpl"}
{block name=body}
	<section>
		<article>
			<p>La cuisine bouge, vit, vibre...<br/>
			   A travers textes, photos et vidéos, élargissons nos horizons culinaires et apprenons-en toujours plus, pour mieux faire et nous faire plaisir devant nos fourneaux !</p>
		</article>
		<article>
			{foreach $data['alea'] as $alea}
				<p>{$alea}</p>
			{/foreach}
		</article>
	</section>
{/block}