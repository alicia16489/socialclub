<div id="last_photos">
	<h3 class="h3_title"><a href="index.php?action=user_galery&amp;id={$infos_user['id']}">{$gallery_title}</a></h3>
	<div id="conteneur">
		<div id="carrousel">
			{foreach $friends_pic as $key => $picture}
				<div id="slide{$key+1}" class="slide">
				    <div class="visu">
				    	<a class="boxer" rel="last_photo" href="{$picture['path']}" title="<br />{$picture['description']}<br /><br />Post&eacute; le {date('d/m/Y &#224; G:i', strtotime($picture['created']))}">
							<img class="last_photo_img" src="{$picture['path']}" alt="{$picture['title']}" title="{$picture['title']}" />
						</a>
				    </div>
				</div>
			{/foreach}
		</div>
	</div>
</div>