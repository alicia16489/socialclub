<?php

$user = new Users;
	

	if ($action == 'sendMsg') {

		$msg = new private_message;
		$msg->set('sender_id',$_SESSION['user']['id']);
		$msg->set('id_chat',$_POST['id_chat']);
		$msg->set('content',$_POST['content']);
		$res = $msg->Save();
		$tpl = "sendMsgResponse";
		$smarty->assign('res',$res);
	}

	if(!empty($_SESSION['user']['id']))
	{
		$user->set("id",$_SESSION['user']['id']);
		$user->hydrate();
		$user->syncStatusFriends(1);
		$user->syncChatList();
		$msg = $user->getLastMessage();
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

		$last_msg = array();
		$id_chat_by_users = array();
		foreach ($chat as $key => $value) {

			$friend = new Users;
			$id1 = $value->get('id_user_1');
			$id2 = $value->get('id_user_2');
			$id_receiver = ($user->get('id') == $id1) ? $id2 : $id1;
			if ($value->get('id') == $id_chat)
				$id_current_receiver = $id_receiver;

			
	

			$friend->set('id',$id_receiver);
			$friend->hydrate('id,firstname,lastname,avatar_path');

			$chat_list[$value->get('id')] = array('id'=>$friend->get('id'),'firstname'=>$friend->get('firstname'),'lastname'=>$friend->get('lastname'),'avatar_path'=>$friend->get('avatar_path'));

			$chat[$key]->getLastMessage('*',30);
			$msg_by_chat = $chat[$key]->get('mp');
			if (!empty($msg_by_chat))
				$last_msg_obj[$chat[$key]->get('id')] = $msg_by_chat;
		}

		foreach ($last_msg_obj[$id_chat] as $key => $value) {
				$last_msg[$id_chat][] = array('id'=>$value->get('id'),'sender_id'=>$value->get('sender_id'),'content'=>$value->get('content'),'date_send'=>$value->get('date_send'),);
		}


		$smarty->assign('message',$msg);
		$smarty->assign('id_receiver',$id_current_receiver);
		$smarty->assign('last_msg',$last_msg);
		$smarty->assign('chat_list',$chat_list);
		$smarty->assign('id_chat',$id_chat);
	}


?>