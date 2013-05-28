<img class="logo" src="img/logo.png" width="450" alt="Social Night Club">

<div class="form_line">
	<div class="form">
		<span class="header_form">
			CONNEXION
		</span>
		<table>
			<form action="index.php?action=login" method="post">
				<tr>
					<td>
						<input value="{if isset($post)}{$post['email']}{/if}" class="log" required type="email" name="email" placeholder="Adresse mail">
					</td>
				</tr>
				<tr>
					<td>
						<input value="{if isset($post)}{$post['password']}{/if}" class="log" type="password" name="password" placeholder="Mot de passe" required>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" class="submit" value="Connexion"><a href="#" id="forgot_pass">Mot de passe oubli&eacute;</a>
					</td>
				</tr>
				{if isset($error['infos'])}
				<tr>
					<td colspan="2" class="errors">
						Connexion impossible ! Infos erronés.
					</td>
				</tr>
				{/if}
				{if isset($error['actif'])}
				<tr>
					<td colspan="2" class="errors">
						Votre compte n'est pas encore validé, consultez votre boite mail !
						<br />
						<a href="#">Renvoyer un mail de confirmation</a>
					</td>
				</tr>
				{/if}
			</form>
		</table>
	</div>
</div>