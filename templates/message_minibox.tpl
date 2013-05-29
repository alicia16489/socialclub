<div id="last_mp">
	<h3 class="h3_title">Derniers messages</h3>
	<ul>
		{foreach $mp as $msg}
		<a href="index.php?action=privateMessage&id_chat={$msg.id_chat}">
			<li>
				<img src="{$msg.avatar_path}" width="40" height="40" alt="Baptiste">
				<div class="message_content">
					<span class="message_author">{$msg.firstname} {$msg.lastname}</span>
					<p>{$msg.content}</p>
				</div>
				<div class="clear"></div>
			</li>
		</a>
		{/foreach}
	</ul>
</div>