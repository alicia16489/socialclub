<div class="pos">
	<div id="left_col">
		<div id="mailbox">
			<h3 class="h3_title">Boîte de récéption</h3>
			<div id="new_talk">
				Nouvelle conversation
				<form action="index.php?action=new_chat" method="POST">
				<select name="id_friend">
					<option value=""></option>
					{foreach $friends_to_chat as $friend}
					<option value="{$friend['id']}">{$friend['firstname']} {$friend['lastname']}</option>
					{/foreach}
				</select>
				<input type="submit" value="Go"/>
				</form>
				<div class="clear"></div>
			</div>
			<ul>
				{foreach $chat_list as $user}
				<a href="index.php?action=privateMessage&id_chat={$user@key}">
					<li>
						<img src="{$user['avatar_path']}" alt="avatar" height="40" width="40" />
						<span>{$user['firstname']}<br/>{$user['lastname']}</span>
					</li>
				</a>
				{foreachelse}
				<li>
					<span>Vous n'avez aucun messages !</span>
				</li>
				{/foreach}
			</ul>
			<div id="room_chat">
				<ul>
					
					{foreach $last_msg[$id_chat] as $msg}
					{if $msg['sender_id'] != $id_receiver }
					<li>
						<img class="me" src="{$chat_list[$id_chat]['avatar_path']}" alt="avatar" height="60" width="60" />
						<p class="me">
							<span>{$msg['date_send']}</span>
							{$msg['content']}
						</p>
						<div class="clear"></div>
					</li>
					{else}
					<li>
						<img class="him" title="him" src="img/avatar.gif" alt="avatar" height="60" width="60" />
						<p class="him">
							<span>{$msg['date_send']}</span>
							{$msg['content']}
						</p>
						<div class="clear"></div>
					</li>
					{/if}
					{foreachelse}
						Aucun Message !
					{/foreach}
				</ul>
				<div id="mail_form">
					<form id="msg" action="index.php?action=sendMsg" >
						<textarea rows="4" placeholder="Tapez votre message..." name="content" required></textarea>
						<input type="hidden" value="{$id_chat}" name="id_chat" />
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
