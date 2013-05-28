<div id="last_photos">
	<h3 class="h3_title"><a href="index.php?action=user_galery&amp;id={$infos_user[0]['id']}">{$gallery_title}</a></h3>
	<!-- TEST CAROUSEL -->
	<div id="conteneur">
		<div id="carrousel">
			{foreach $friends_pic as $key => $picture}
					<div id="slide{$key+1}" class="slide">
					    <div class="visu">
					    	<a class="boxer" rel="last_photo" href="{$picture['path']}" title="{$picture['title']|UPPER}<br />{$picture['description']}">
								<img class="last_photo_img" src="{$picture['path']}" alt="{$picture['title']}" title="{$picture['title']}" />
							</a>
					    </div>
					    <div class="title_carrousel">
					    	{$picture['title']}
					    </div>
					</div>
			{/foreach}
		</div>
	</div>
</div>