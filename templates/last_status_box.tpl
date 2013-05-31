<div id="last_status_box" class="hidden">
	<h3 class="h3_title">Derniers statuts</h3>
	<div class="toggle_box">
		<div class="triangle_up_black"></div>
	</div>
	{if !empty($status)}
	{foreach $status as $row}
		<section class="status_box">
			<a href="index.php?action=profil&id={$row['user_id']}"><img src="{if !empty($row['avatar_path'])}{$row['avatar_path']}{else}{$avatar}{/if}" width="40" height="40" alt="Baptiste" /></a>
			<div class="status_box_content">
				<span><a href="index.php?action=profil&id={$row['user_id']}" class="profile_link">{$row['firstname']|capitalize} {$row['lastname']|capitalize}</a></span>
				<p>
					{$row['content']|truncate:33}
				</p>
			</div>
			<div class="clear"></div>
		</section>
	{/foreach}
	{/if}
</div>