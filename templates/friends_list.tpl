<div id="friends_list">
	<h3 class="h3_title">Amis</h3>
	<div>
		{if isset($friends)}
			{foreach $friends as $key => $friend}
				<a href="index.php?action=profil&amp;id={$friend['id']}">
					<img src="{if !empty($friend['avatar_path'])}{$friend['avatar_path']}{else}{$avatar}{/if}" width="60" height="60" alt="{$friend['firstname']} {$friend['lastname']}" title="{$friend['firstname']} {$friend['lastname']}" />
				</a>
			{/foreach}
		{else}
			Vous n'avez pas encore d'ami(e)s
		{/if}
	</div>
</div>