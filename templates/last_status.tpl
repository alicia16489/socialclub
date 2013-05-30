<div id="last_status">
	<h3 class="h3_title">Derniers statuts</h3>
	{if !empty($status)}
	{foreach $status as $row}
		<section class="status">
			<span class="status_author">
				<img src="{if !empty($row['avatar_path'])}{$row['avatar_path']}{else}{$avatar}{/if}" width="60" height="60" alt="Baptiste">
				<br/>
				<span>{$row['firstname']|capitalize}<br/>{$row['lastname']|capitalize}</span>
			</span>
			<div class="status_content">
				<p>
					{$row['content']}
				</p>
			</div>
			<div class="clear"></div>
		</section>
	{/foreach}
	{/if}
</div>