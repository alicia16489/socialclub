<div class="form">
	<span class="header_form">
		INVITER UN AMI
	</span>
	<table>
		<form action="index.php?action=invite" method="post">
			<tr>
				<td>
					<input value="{if isset($post)}{$post['email']}{/if}" class="log" type="email" name="email" placeholder="Adresse mail" />
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" class="submit" value="Envoyer" />
				</td>
			</tr>
		</form>
	</table>
</div>