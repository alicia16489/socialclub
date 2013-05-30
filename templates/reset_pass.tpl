<img class="logo" src="img/logo.png" width="450" alt="Social Night Club">

<div class="form_line">
	<div class="form">
		<span class="header_form">
			NOUVEAU MOT DE PASSE
		</span>
		<table>
			<form action="index.php?action=reset_pass" method="post">
				<tr>
					<td>
						<input class="log" required type="password" name="password" placeholder="Nouveau mot de passe" />
					</td>
				</tr>
				<tr>
					<td>
						<input class="log" type="password" name="vpassword" placeholder="Confirmation du mot de passe" required/>
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
</div>