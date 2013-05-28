<div class="form">
	<span class="header_form">
		INSCRIPTION
	</span>
	<table>
		<form action="index.php?action=register" method="post">
			<tr>
				<td>
					<input value="{if isset($firstname)}{$firstname}{/if}" class="log" type="text" name="firstname" placeholder="Pr&eacute;nom" />
				</td>
			</tr>
			<tr>
				<td class="errors">
					{if isset($errors['empty']['firstname'])}
						Votre prénom ne peut être vide.
					{/if}
				</td>
			</tr>
			<tr>
				<td>
					<input value="{if isset($lastname)}{$lastname}{/if}" class="log" type="text" name="lastname" placeholder="Nom de famille" />
				</td>
			</tr>
			<tr>
				<td class="errors">
					{if isset($errors['empty']['lastname'])}
						Votre nom de famille ne peut être vide.
					{/if}
				</td>
			</tr>
			<tr>
				<td>
					<input value="{if isset($email)}{$email}{/if}" class="log" type="email" name="email" placeholder="Adresse mail" />
				</td>
			</tr>
			<tr>
				<td class="errors">
					{if isset($errors['empty']['email'])}
						Votre email ne peut être vide.
					{/if}
				</td>
			</tr>
			<tr>
				<td>
					<input value="{if isset($password)}{$password}{/if}" class="log" type="password" name="password" placeholder="Mot de passe" />
				</td>
			</tr>
			<tr>
				<td class="errors">
					{if isset($errors['empty']['password'])}
						Votre password ne peut être vide.
					{/if}
				</td>
			</tr>
			<tr>
				<td>
					<input value="{if isset($vpassword)}{$vpassword}{/if}" class="log" type="password" name="vpassword" placeholder="Confirmation du mot de passe" />
				</td>
			</tr>
			<tr>
				<td class="errors">
					{if isset($errors['empty']['vpassword'])}
						Votre confirmation ne peut être vide.
					{/if}
				</td>
			</tr>
			<tr>
				<td>
					<input value="{if isset($active_key)}{$active_key}{/if}" class="log" type="text" name="active_key" placeholder="Cl&eacute; d'invitation" />
				</td>
			</tr>
			<tr>
				<td class="errors">
					{if isset($errors['empty']['active_key'])}
						Votre clé ne peut être vide.
					{/if}
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" class="submit" value="Envoyer" />
				</td>
			</tr>
		</form>
	</table>
</div>