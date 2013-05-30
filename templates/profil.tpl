<script type="text/javascript" scr="./js/edit_profil.js"></script>

<div class="pos" id="check_own" data-check="{if isset($check_own)}{$check_own}{/if}">
	<div id="left_col">
		<div id="profil_user">
			<h3 class="h3_title h3_profil">{$title}
			</h3>
			<div id="avatar_profil">
				{if !empty($infos_user['avatar_path'])}
					<a class="boxer" href="{$infos_user['avatar_path']}" title="Avatar de {$infos_user['firstname']}">
						<img class="avatar_profil" src="{$infos_user['avatar_path']}" alt="avatar de {$infos_user['firstname']}" title="avatar de {$infos_user['firstname']}" width="150"/>
					</a>
				{else}
					<a class="boxer" href="./img/avatar.gif" title="Avatar de {$infos_user['firstname']}">
						<img width="100%" height="100%" class="avatar_profil" src="./img/avatar.gif" alt="avatar de {$infos_user['firstname']}" title="avatar de {$infos_user['firstname']}" />
					</a>
				{/if}
			</div>
				<div id="infos_profil_content">
					<table>
						<tr>
							<td><span class="info_profil">Pr&eacute;nom et Nom:</span></td>
							<td><span id="firstname_profil">{$infos_user['firstname']|CAPITALIZE}</span> <span id="lastname_profil">{$infos_user['lastname']|CAPITALIZE}</span></td>
						</tr>
						<tr>
							<td><span class="info_profil">Email:</span></td>
							<td><span id="email_profil">{$infos_user['email']}</span></td>
						</tr>
						{if isset($check_own)}
						<tr>
								<td><span class="info_profil">Description:</span></td> 
								<td><span id="description_profil">{if empty($infos_user['description'])}Ajoutez une description{/if}{$infos_user['description']}</span></td>
							</tr>
						{elseif !empty($infos_user['description']) && !isset($check_own)}
							<tr>
								<td><span class="info_profil">Description:</span></td> 
								<td>{$infos_user['description']}<td>
							</tr>
						{/if}
						{if isset($check_own)}
						<tr>
							<td><span class="info_profil">Naissance: </span></td> 
							<td><span id="birthdate_profil">{if empty($infos_user['birthdate'])}Ajoutez votre date de naissance{/if}{$infos_user['birthdate']}</span></td>
						</tr>
						{elseif !empty($infos_user['birthdate']) && !isset($check_own)}
						<tr>
							<td><span class="info_profil">Naissance: </span></td> 
							<td>{$infos_user['birthdate']}</td>
						</tr>
						{/if}
						{if isset($check_own)}
						<tr>
							<td><span class="info_profil">Sexe:</span></td> 
							<td><span id="sexe_profil">{if empty($infos_user['sexe'])}Pr&eacute;cisez votre sexe{/if}{$infos_user['sexe']}</span></td>
						</tr>
						{elseif !empty($infos_user['sexe']) && !isset($check_own)}
						<tr>
							<td><span class="info_profil">Sexe:</span></td> 
							<td>{$infos_user['sexe']}</td>
						</tr>
						{/if}
						{if isset($check_own)}
						<tr>
							<td><span class="info_profil">Adresse:</span></td> 
							<td><span id="address_profil">{if empty($infos_user['address'])}Ajoutez une adresse{/if}{$infos_user['address']}</span></td>
						</tr>
						{elseif !empty($infos_user['address']) && !isset($check_own)}
						<tr>
							<td><span class="info_profil">Adresse:</span></td> 
							<td>{$infos_user['address']}</td>
						</tr>
						{/if}
						{if isset($check_own)}
						<tr>
							<td><span class="info_profil">Code Postal:</span></td> 
							<td><span id="zipcode_profil">{if empty($infos_user['zip_code'])}Ajoutez un code postal{/if}{$infos_user['zip_code']}</span></td>
						</tr>
						{elseif !empty($infos_user['zip_code']) && !isset($check_own)}
						<tr>
							<td><span class="info_profil">Code Postal:</span></td> 
							<td>{$infos_user['zip_code']}</td>
						</tr>
						{/if}
						{if isset($check_own)}
						<tr>
							<td><span class="info_profil">Ville:</span></td> 
							<td><span id="town_profil">{if empty($infos_user['town'])}Ajoutez une ville{/if}{$infos_user['town']}</span></td>
						</tr>
						{elseif !empty($infos_user['town']) && !isset($check_own)}
						<tr>
							<td><span class="info_profil">Ville:</span></td> 
							<td>{$infos_user['town']}</td>
						</tr>
						{/if}
						{if isset($check_own)}
						<tr>
							<td><span class="info_profil">Pays:</span></td> 
							<td><span id="country_profil">{if empty($infos_user['country'])}Ajoutez un pays{/if}{$infos_user['country']}</span></td>
						</tr>
						{elseif !empty($infos_user['country']) && !isset($check_own)}
						<tr>
							<td><span class="info_profil">Pays:</span></td> 
							<td>{$infos_user['country']}</td>
						</tr>
						{/if}
					</table>
				</div>
		</div>
	</div>
	<div id="right_col">
		{include file='message_minibox.tpl'}
		{include file='all_photo.tpl'}
		{include file='friends_list.tpl'}
	</div>
</div>