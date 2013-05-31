<img class="logo" src="img/logo.png" width="450" alt="Social Night Club">

<div class="form_line">
	<div class="form">
		<span class="header_form">
			NOUVEAU MOT DE PASSE
		</span>
		<table>
			<form action="index.php?action=reset_pass&amp;code={$code}&amp;key={$key}" method="post">
				<tr>
					<td>
						<input value="{if isset($post['password'])}{$post['password']}{/if}" class="log" required type="password" name="password" placeholder="Nouveau mot de passe" />
					</td>
				</tr>
				{if isset($error_pass)}
					<tr><td>{$error_pass}</td></tr>
				{/if}
				<tr>
					<td>
						<input value="{if isset($post['password'])}{$post['vpassword']}{/if}" class="log" type="password" name="vpassword" placeholder="Confirmation du mot de passe" required/>
					</td>
				</tr>
				{if isset($error_vpass)}
					<tr><td>{$error_vpass}</td></tr>
				{/if}
				<tr>
					<td colspan="2">
						<input type="submit" class="submit" value="Envoyer" />
					</td>
				</tr>
			</form>
		</table>
	</div>
</div>