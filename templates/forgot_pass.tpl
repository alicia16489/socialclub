<img class="logo" src="img/logo.png" width="450" alt="Social Night Club">

<div class="form_line">
	<div class="form">
		<span class="header_form">
			VOTRE EMAIL
		</span>
		<table>
			<form action="index.php?action=forgot_pass" method="post">
				<tr>
					<td>
						<input value="{if isset($email)}{$email}{/if}" class="log" required type="email" name="email" placeholder="Email" />
					</td>
				</tr>
				{if isset($error)}
				<tr><td>Cette email n'existe pas !</td></tr>
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