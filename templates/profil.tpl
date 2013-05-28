<script type="text/javascript" scr="./js/edit_profil.js"></script>

<div class="pos">
	<div id="left_col">
		<div id="profil_user">
			<h3 class="h3_title h3_profil">{$title}
			</h3>
			<a href="index.php?action=edit_profil&amp;id={$infos_user['id']}">
				{if $id_user == $id_get || empty($id_get)}
					<img id='edit_infos' src='./img/edit.png' alt='&Eacute;diter profil' title='&Eacute;diter profil' />
				{/if}
			</a>
			<div id="avatar_profil">
				{if !empty($infos_user['avatar_path'])}
					<a class="boxer" href="{$infos_user['avatar_path']}" title="Avatar de {$infos_user['firstname']}">
						<img class="avatar_profil" src="{$infos_user['avatar_path']}" alt="avatar de {$infos_user['firstname']}" title="avatar de {$infos_user['firstname']}" />
					</a>
				{else}
					<a class="boxer" href="./img/avatar.gif" title="Avatar de {$infos_user['firstname']}">
						<img width="100%" height="100%" class="avatar_profil" src="./img/avatar.gif" alt="avatar de {$infos_user['firstname']}" title="avatar de {$infos_user['firstname']}" />
					</a>
				{/if}
			</div>
			{if $action != "edit_profil"}
				<div id="infos_profil_content">
					<table>
						<tr>
							<td><span class="info_profil">Pr&eacute;nom et Nom:</span></td>
							<td>{$infos_user['firstname']|CAPITALIZE} {$infos_user['lastname']|CAPITALIZE}</td>
						</tr>
						<tr>
							<td><span class="info_profil">Email:</span></td>
							<td>{$infos_user['email']}</td>
						</tr>
						{if !empty($infos_user['description'])}
							<tr>
								<td><span class="info_profil">Description:</span></td> 
								<td>{$infos_user['description']}</td>
							</tr>
						{/if}
						{if !empty($infos_user['birthdate'])}
						<tr>
							<td><span class="info_profil">Naissance: </span></td> 
							<td>{$infos_user['birthdate']}</td>
						</tr>
						{/if}
						{if !empty($infos_user['sexe'])}{$infos_user['sexe']}
						<tr>
							<td><span class="info_profil">Sexe:</span></td> 
							<td>{$infos_user['sexe']}</td>
						</tr>
						{/if}
						{if !empty($infos_user['address'])}
						<tr>
							<td><span class="info_profil">Adresse:</span></td> 
							<td>{$infos_user['address']}</td>
						</tr>
						{/if}
						{if !empty($infos_user['zip_code'])}
						<tr>
							<td><span class="info_profil">Code Postal:</span></td> 
							<td>{$infos_user['zip_code']}</td>
						</tr>
						{/if}
						{if !empty($infos_user['town'])}
						<tr>
							<td><span class="info_profil">Ville:</span></td> 
							<td>{$infos_user['town']}</td>
						</tr>
						{/if}
						{if !empty($infos_user['country'])}
						<tr>
							<td><span class="info_profil">Pays:</span></td> 
							<td>{$infos_user['country']}</td>
						</tr>
						{/if}
					</table>
				</div>
			{/if}
		</div>
	</div>
	<div id="right_col">
		{include file='message_minibox.tpl'}
		{include file='all_photo.tpl'}
		{include file='friends_list.tpl'}
	</div>
</div>