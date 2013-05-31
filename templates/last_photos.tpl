<div id="last_photos" class="hidden">
	<h3 class="h3_title">Dernières photos</h3>
	<div class="toggle_box">
		<div class="triangle_up_black"></div>
	</div>
	<!-- TEST CARROUSEL -->
	<div id="conteneur">
		<div id="carrousel">
			{foreach $infos_pic as $key => $picture}
				<div id="slide{$key+1}" class="slide">
				    <div class="visu">
				    	<a class="boxer" rel="last_photo" href="{$picture['path']}" title="<br />{$picture['description']}<br /><a href='index.php?action=profil&amp;id={$picture['user_id']}'>{$infos_user_pic[$key]['firstname']} {$infos_user_pic[$key]['lastname']}</a><br />Post&eacute; le {date('d/m/Y &#224; G:i', strtotime($picture['created']))}">
							<img class="last_photo_img" src="{$picture['path']}" alt="{$picture['title']}" title="{$picture['title']}" />
						</a>
				    </div>
				</div>
			{/foreach}
		</div>
	</div>
</div>