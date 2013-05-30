<div class="pos">
	<div id="left_col">
		<div id="gallery_user">
			<h3 class="h3_title h3_profil">{$title}
				{if $action != 'profil'}
					<a href="index.php?action=profil&amp;id={$infos_user['user_id']}">retour au profil</a>
				{/if}
			</h3>
			<div id="photo_wall">
			{foreach $infos_pic_galery as $key => $info_pic}
				<div class="descro">{htmlspecialchars($info_pic['description'])}</div>
				<div class="content_img">
					<a class="boxer boxer_gallery tooltip" id="boxer{$key}" rel="gallery" href="{htmlspecialchars($info_pic['path'])}" title="{htmlspecialchars($info_pic['title'])|UPPER}<br />{htmlspecialchars($info_pic['description'])} <span class='del_ava'><a href='index.php?action=del_picture&amp;id={$info_pic['id']}'><img class='ico_gallery' src='./img/del_img.png' alt='Supprimer cette image' title='Supprimer cette image' /></a> <a href='index.php?action=avatarisator&amp;path={$info_pic['path']}&amp;id={$infos_user['user_id']}'><img src='./img/ava_img.png' class='ico_gallery' alt='Mettre en avatar' title='Mettre en avatar' /></a></span>" >
						<img src="{htmlspecialchars($info_pic['path'])}" alt="{htmlspecialchars($info_pic['title'])}" title="{htmlspecialchars($info_pic['title'])}" class="gallery_img" />
					</a>
				</div>
			{/foreach}
			</div>
		</div>
	</div>
	<div id="right_col">
		{include file='message_minibox.tpl'}
		{include file='last_photos.tpl'}
		{include file='friends_list.tpl'}
	</div>
</div>