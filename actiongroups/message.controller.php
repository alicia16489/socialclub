<?php

$user = new Users;

	if(!empty($_SESSION['user']['id']))
	{
		$user->set("id",$_SESSION['user']['id']);
		$user->hydrate();
		$user->syncFriendsList();
		$user->syncStatusFriends(1);
		$user->syncChatList();
		$chat = $user->get('chats');
		$status_friends = array();
		foreach($user->get("status_friends") as $key => $row)
		{
			$status = new Status();
			$status->set("id",$key);
			$status->set("user_id",$row['user_id']);
			$status->hydrate();
			
			$status_friends[$status->get("id")] = array("id" => $status->get("id"),
														"user_id" => $status->get("user_id"),
														"content" => $status->get("content"),
														"created" => $status->get("created"),
														"avatar_path" => $status->get("user")->get("avatar_path"),
														"firstname" => $status->get("user")->get("firstname"),
														"lastname" => $status->get("user")->get("lastname")
														);
		}

		$smarty->assign("status",$status_friends);

	}

	if ($action == 'privateMessage') {

		$chat_list = array();
		if (empty($_GET['id_chat'])) {
			$msg = $user->getLastMessage(1);
			$id_chat = $msg[0]['id_chat'];
		}
		else
			$id_chat = $_GET['id_chat'];

		
		foreach ($chat as $key => $value) {

			$friend = new Users;
			$id1 = $value->get('id_user_1');
			$id2 = $value->get('id_user_2');

			$id = ($user->get('id') == $id1) ? $id2 : $id1;

			$friend->set('id',$id);
			$friend->hydrate('id,firstname,lastname');

			$chat_list[] = $friend;

			$chat[$key]->getLastMessage('*',30);
			$last_msg[] = $chat[$key]->get('mp');
		}
		echo 'last_msg<br/>';
		var_dump($last_msg);
		echo 'chat<br/>';
		var_dump($chat);
		echo 'chat_list<br/>';
		var_dump($chat_list);
		
		$smarty->assign('last_msg',$last_msg);
		$smarty->assign('chat_list',$chat_list);
	}


?>