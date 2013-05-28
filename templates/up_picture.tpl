<<<<<<< HEAD
<div class="pos">
	<div id="left_col">
		<div id="form_upload">
			<h3 class="h3_title">Ajouter une photo</h3>
			<form method="post" action="?action=up_picture" enctype="multipart/form-data">
				<input type="text" name="title" id="title_picture" placeholder="Titre de la photo" required/>	
				<textarea name="resum" id="resum_picture" placeholder="Description de la photo" required></textarea>
				<input type="file" name="file" id="up_picture" required/>
				<input type="submit" value="POSTER" id="submit_up" required/>
			</form>
		</div>
	</div>
	<div id="right_col">
		{include file='message_minibox.tpl'}
		{include file='last_photos.tpl'}
		{include file='friends_list.tpl'}
	</div>
</div>