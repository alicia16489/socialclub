<div class="pos">
	<div id="left_col">
	<form id="msg" action="index.php?action=sendMsg" >
		<textarea placeholder="Tapez votre message..." name="content"></textarea>
		<input name="id_chat" type="hidden" value="{$id_chat}" >
		<input type="submit" value="Envoyer">
	</form>
	</div>
	<div id="right_col">

	</div>
</div>


<div class="pos">
	<div id="left_col">
		<div id="mailbox">
			<h3 class="h3_title">Boîte de récéption</h3>
			<ul>
				<li>
					<img src="img/avatar.png" alt="avatar" height="40" width="40" />
					<span>Baptiste<br/>Gios</span>
				</li>
				<li>
					<img src="img/avatar.png" alt="avatar" height="40" width="40" />
					<span>Baptiste<br/>Gios</span>
				</li>
				<li>
					<img src="img/avatar.png" alt="avatar" height="40" width="40" />
					<span>Baptiste<br/>Gios</span>
				</li>
				<li>
					<img src="img/avatar.png" alt="avatar" height="40" width="40" />
					<span>Baptiste<br/>Gios</span>
				</li>
				<li>
					<img src="img/avatar.png" alt="avatar" height="40" width="40" />
					<span>Baptiste<br/>Gios</span>
				</li>
			</ul>
			<div id="room_chat">
				<ul>
					<li>
						<img class="me" src="img/avatar.png" alt="avatar" height="60" width="60" />
						<p class="me">
							<span>Envoy&eacute; le 12/04 &agrave; 11:42</span>
							JEM TRO L&Eacute; KAYOUeeeeeeeeee eeeeeeeee eeeeeeeeeeeee eeeeeeeeeeeeeeeeeeeeeeeeee eeeeeeeee eeeeeeeeeeee eeeeeeeee eeeeeeeeeeeeeeee eeeeeeeeeeee eeeeeeeee eeeeeeeeeeeeeeee eeeeeeeeeeeeeeeeeeeeee eeeeeeeeee eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee eeeeeeeeeeee eeeeeeeeeee eeeeeeeee eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee eeeeeeee eeeeeeeeeeeeeeee eeeeeeeeeeeeeeeee eeeeeeeeeeee eeeeeeeeeeeee</p>
						<div class="clear"></div>
					</li>
					<li>
						<img class="him" title="him" src="img/avatar.gif" alt="avatar" height="60" width="60" />
						<p class="him">
							<span>Envoy&eacute; le 12/04 &agrave; 11:42</span>
							MOA OSSI :) :)
						</p>
						<div class="clear"></div>
					</li>
				</ul>
				<div id="mail_form">
					<form id="msg" action="" >
						<textarea rows="4" placeholder="Tapez votre message..." name="content" required></textarea>
						<input type="submit" value="Envoyer">
					</form>
				</div>
				
			</div>
		</div>
	</div>
	<div id="right_col">
		{include file='message_minibox.tpl'}
	</div>
</div>
