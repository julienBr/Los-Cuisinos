{extends "..\layout.tpl"}
{block name=body}
	<p>Bienvenue {$data['user']['prenom']} {$data['user']['nom']}.</p>
{/block}