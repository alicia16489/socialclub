<div class="pos">
	<div id="left_col">
		<div id="mailbox">
			<h3 class="h3_title">Boîte de récéption</h3>
			<div id="new_talk">
				Nouvelle conversation
				<select>
					<option value=""></option>
					<option value="">Benoit Ciret</option>
					<option value="">Nicolas Portier</option>
				</select>
				<input type="submit" value="Go"/>
				<div class="clear"></div>
			</div>
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
						<input type="submit" value="Envoyer"><span id="ok_message"></span>
					</form>
				</div>
				
			</div>
		</div>
	</div>
	<div id="right_col">
		{include file='message_minibox.tpl'}
	</div>
</div>