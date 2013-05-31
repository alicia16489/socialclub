<div id="last_mp">
	<h3 class="h3_title">Derniers messages</h3>
	<ul>
		{foreach $message as $mp}
		<a href="index.php?action=privateMessage&id_chat={$mp['id_chat']}">
			<li>
				<img src="{$mp['avatar_path']}" width="40" height="40" alt="{$mp['firstname']}">
				<div class="message_content">
					<span class="message_author">{$mp['firstname']} {$mp['lastname']}</span>
					<p>{$mp['content']}</p>
				</div>
				<div class="clear"></div>
			</li>
		</a>
		{foreachelse}
			Aucun nouveau message
		{/foreach}
	</ul>
</div>