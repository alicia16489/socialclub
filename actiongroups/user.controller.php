<?php
	// setup utilisateur
	$user = new Users();

	if(!empty($_SESSION['user']['id']))
	{
		$user->set("id",$_SESSION['user']['id']);
		$user->hydrate();

		if (!isset($_POST['ajax']))
		{
			$user->syncFriendsList(1);
			$user->syncStatusFriends(1);
			$user->syncPicturesFriends(1);
			$user->syncPicturesList();

			if (!empty($action))
				$smarty->assign('action', $action);

			if (!empty($_GET['id']))
				$smarty->assign("id_get", $_GET['id']);
			else
				$smarty->assign("id_get", "");
	
			$smarty->assign("avatar",$avatar_path);


				// Get 5 latests message
				$user->syncChatList();
				$chat = $user->get('chats');
				$hasMp = FALSE;
				$mp = $user->getLastMessage();

				// END Message and chats

				$smarty->assign("message",$mp);
		}
	}
	
	if($action == "home")
	{
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

		$infos_pic = array();
		foreach ($user->get("pictures_friends") as $key => $value)
		{
			$friend = new Users();
			$friend->set("id", $value['user_id']);
			$friend->hydrate("firstname,lastname");

			$infos_user_pic[$key] = array("firstname" => $friend->get("firstname"),
									 	  "lastname" => $friend->get("lastname"));
		}

	

		$smarty->assign("status",$status_friends);
		
		$smarty->assign("friends",$user->get("friends"));
		
		$smarty->assign('infos_pic', $user->get("pictures_friends"));
		$smarty->assign('infos_user_pic', $infos_user_pic);
	}
	elseif($action == "forgot_pass"){
		
		if(!empty($_POST)){
			
			$user->set("email",$_POST['email']);
			$user->hydrate("id");
			if($user->get("state_hydrate")){
				
				$object = "Reset password";
				$email = $user->get("email");
				$type = "reset_pass";
				
				mailing($email,$object,$type,null,null,null,stringHash($grain.$_POST['email']));
				
				header("Location: index.php"); die();
			}
			else{
				$smarty->assign("error","no");
			}
			$smarty->assign("email",$_POST['email']);
		}
	}
	elseif($action == "reset_pass"){
		
		if(!empty($_POST['password'])){
			
			if($_POST['password'] == $_POST['vpassword']){
				
				if(strlen($_POST['password']) > 7){
					
					$user->set("email",base64_decode($_GET['code']));
					$user->hydrate();
					if($user->get("state_hydrate")){
						
						$key = stringHash($grain.$user->get("email"));
						if($key == $_GET['key']){
							$user->set("password",stringHash($_POST['password']));
							$user->save();
							
							header("Location: index.php"); die();
						}
					}
				}
				else{	
					$smarty->assign("error_pass","8 caractères minimum");
				}
			}
			else{
				$smarty->assign("error_vpass","Confirmation de password incorrect");
			}
		}
		$smarty->assign("code",$_GET['code']);
		$smarty->assign("key",$_GET['key']);
		$smarty->assign("post",$_POST);
	}
	elseif($action == "invite")
	{
		if(!empty($_POST))
		{
			$mailing_state=false;
			$smarty->assign("post",$_POST);
			$invite = new Invites();
			$invite->set("email",$_POST['email']); // set email for invite
			$invite->hydrate();
			if(!$invite->get("state_hydrate"))
			{ // scheck hydrate state for making new key and insert
				$invite->set("key",makeMeAKey());
				$invite->set("users_id",$_SESSION['user']['id']);
				$invite->save();
				$mailing_state=true;
			}
			
			// var diff date time between last invite and now
			$datetime1 = new DateTime($invite->get("last_time"));
			$datetime2 = new DateTime();
			$interval = $datetime2->diff($datetime1);
			$int_inter=$interval->format('%h');
			
			// if last invite > 24 hours, send a new one
			if($int_inter > 24 || $mailing_state)
			{
				$object = "Invitation à Social Night Club";
				$email = $invite->get("email");
				$sender = $user->get("firstname")." ".$user->get("lastname");
				$type = "invite";
				
				mailing($email,$object,$type,null,$sender,null,$invite->get("key"));
			}
			
		}
		
	}
	elseif($action == "register")
	{
		if(!empty($_POST)){
			$reg_errors = array();
			$state=true;
			foreach($_POST as $key => $value)
			{
				if(empty($_POST[$key])){
					$reg_errors['empty'][$key] = true;
					$state=false;
				}
				$smarty->assign($key,$value);
			}
			if($state)
			{
				$invite = new Invites();
				$invite->set("email",$_POST['email']);
				$invite->hydrate();
				$key = $invite->get("key");
				
				if($key == $_POST['active_key'])
				{
					$user->set("firstname",$_POST['firstname']);
					$user->set("lastname",$_POST['lastname']);
					$user->set("email",$_POST['email']);
					$user->set("password",stringHash($_POST['password']));
				}
			}
			
			$smarty->assign("errors",$reg_errors);
		}
		else{
			if(isset($code) && isset($reg_key)){
				$smarty->assign("active_key",$reg_key);
				$smarty->assign("email",$code);
			}
		}
	}
	elseif($action == "validate")
	{
		$email = $code;
		$template = './templates/annonce.tpl'; // on change le template
		$message = "Vous avez activ&eacute; votre compte avec succ&egrave;s. Vous allez maintenant &ecirc;tre redirig&eacute; vers le site.";
		
		$user->set("email",$email);
		$user->hydrate();
		if(!$user->get('state_hydrate'))
		{ // si l'hydrate echoue
			$message = "Email inéxistant";
		}
		else
		{
			$user->set('actif',1); // on change l'etat d'activation de l'instance (binary)
			$user->save(); // on update en bdd
		}
		
		$smarty->assign("message",$message); // on assigne le message pour le template
		
		header ("Refresh: 5;URL=index.php?action=login"); die(); // on redirige vers la page de login
	}
	elseif($action == "login")
	{
		if(!empty($_POST['email']))
		{
			$user->set("email",$_POST['email']);
			$user->hydrate();
			$user->get("password");
			if(!$user->get('state_hydrate'))
			{
				$login_error['hydrate'] = true;
			}
			elseif($user->get('password') != stringHash($_POST['password']))
			{
				$login_error['infos'] = true;
			}
			else
			{
				$_SESSION['user']['id'] = $user->get('id');
				session_write_close();

				header("Location: index.php"); die();
			}
			if(isset($login_error)){
				$smarty->assign("error",$login_error);
				$smarty->assign("post",$_POST);
			}
		}
	}


	elseif ($action == "disconnect")
	{
		$_SESSION = array();
		session_unset();
		session_destroy();
		header("Location: index.php"); die();
	}
	elseif ($action == "up_picture")
	{
		if (!empty($_POST))
		{
			if (empty($_POST['title']))
				$errors['title'] = "Vous devez indiquez un titre";

			if (empty($_POST['resum']))
				$errors['resum'] = "Vous devez indiquez une description";

			if (empty($_FILES['file']['name']))
				$errors['file'] = "Vous devez charger une photo";

			if (empty($errors))
			{
				$pictures= new Pictures();
				$infos_file = uploadPic($_FILES['file']);
				extract($infos_file);
				extract($_POST);

				$pictures->set("users_id",$_SESSION['user']['id']);
				$pictures->set("title",$title);
				$pictures->set("description",$resum);
				$pictures->set("path",$path);
				$pictures->save();
			}
		}
	}
	elseif ($action == "user_galery")
	{
		$user_galery = new Users();

	  	if (isset($_GET['id']) && $_GET['id'] != $_SESSION['user']['id'])
	  	{
	  		$friends_galery = new Users();
		    $friends_galery->set("id", $_GET['id']);
		    $friends_galery->hydrate("firstname,lastname");
		  	$title = "Photos de ".$friends_galery->get("firstname")." ".$friends_galery->get("lastname");

		  	$user_galery->set("id", $_GET['id']);
	  	}
	  	else
	  	{
	  		$title = "Mes photos";
	  		$user_galery->set("id", $_SESSION['user']['id']);
	  	}

	  	$user_galery->syncPicturesList();

	  	$infos_user = array("user_id" => $user_galery->get("id"));

	  	foreach ($user->get("pictures_friends") as $key => $value)
		{
			$friend = new Users();
			$friend->set("id", $value['user_id']);
			$friend->hydrate("firstname,lastname");

			$infos_user_pic[$key] = array("firstname" => $friend->get("firstname"),
									 	  "lastname" => $friend->get("lastname"));
		}

		$smarty->assign('infos_user', $infos_user);
	  	$smarty->assign('infos_pic', $user->get("pictures_friends"));
	  	$smarty->assign('infos_user_pic', $infos_user_pic);
	  	$smarty->assign("friends",$user->get("friends"));
	  	$smarty->assign('title', $title);
	  	$smarty->assign('infos_pic_galery', $user_galery->get("pictures"));
	}
	elseif ($action == "del_picture")
	{
		if (!empty($_SESSION['user']['id']) && isset($_GET['id']))

		{
			$pictures_del = new Pictures();
			$pictures_del->set("id", $_GET['id']);
			$pictures_del->delete("AND", array("users_id" => $_SESSION['user']['id']));

			header('location: index.php?action=user_galery');
		}
		else
			header("loaction: index.php");
	}
	elseif ($action == "avatarisator")
	{
		if (!empty($_SESSION['user']['id']) && isset($_GET['path']))
		{
			$us = new Users();
			$us->set("id", $_SESSION['user']['id']);
			$us->set("rank_user_id", 1);
			$us->set("avatar_path", $_GET['path']);
			$us->saveFk(NULL, array("id" => $_SESSION['user']['id']));

			header('location: index.php?action=user_galery');
		}
		else
		{
			header("location: index.php");
		}
	}
	elseif ($action == "profil")
	{
		if (!isset($_POST['ajax']))
		{
			$profil_user = new Users();

			if (isset($_GET['id']) && $_GET['id'] != $_SESSION['user']['id'])
			{
				$profil_user->set("id", $_GET['id']);
				$profil_user->hydrate();

				if ($profil_user->get("state_hydrate") == true)
				{
					$name = new Users();
					$name->set("id",$_GET['id']);
					$name->hydrate();
					$title = "Profil de ".$name->get("firstname")." ".$name->get("lastname");
					$gallery_title = "Voir ses photos";
				}
				else
					header("location: index.php");
			}
			else
			{
				$check_own = "yes";

				$profil_user->set("id",$_SESSION['user']['id']);
				$title = "Mon profil";
				$gallery_title = "Voir mes photos";

				$profil_user->hydrate();

				$smarty->assign('check_own', $check_own);
			}

			$profil_user->syncPicturesList();
			$profil_user->syncFriendsList(1);

			$infos_user = array();

			$infos_user = array("id" => $profil_user->get("id"),
								 "email" => $profil_user->get("email"),
								 "firstname" => $profil_user->get("firstname"),
								 "lastname" => $profil_user->get("lastname"),
								 "description" => $profil_user->get("description"),
								 "sexe" => $profil_user->get("sexe"),
								 "birthdate" => $profil_user->get("birthdate"),
								 "address" => $profil_user->get("address"),
								 "zip_code" => $profil_user->get("zip_code"),
								 "town" => $profil_user->get("town"),
								 "country" => $profil_user->get("country"),
								 "avatar_path" => $profil_user->get("avatar_path"),
								 "created" => $profil_user->get("created"));

			$infos_pic = array();
			$user_pic_name = array();

			foreach ($user->get("pictures_friends") as $key => $value)
			{
				$user_pic = new Users();
				$user_pic->set("id", $value['user_id']);
				$user_pic->hydrate("firstname,lastname");

				$user_pic_name = array("firstname" => $user_pic->get("firstname"),
									   "lastname" => $user_pic->get("lastname"));
			}

			$smarty->assign('gallery_title', $gallery_title);
			$smarty->assign('title', $title);
			$smarty->assign('infos_user', $infos_user);
			$smarty->assign('friends', $profil_user->get("friends"));
			$smarty->assign('friends_pic', $profil_user->get("pictures"));
		}
		else
		{
			$data_ajax_liquide = array();

			if (empty($post[$elem]))
				$data_ajax_liquide['state'] = "Vous devez remplir ce champ";
			else
			{
				if ($elem == "email")
				{
					$check_mail = new Users();

					$check_mail->set("email", $post[$elem]);
					$check_mail->hydrate();

					if ($check_mail->get("state_hydrate") == true && $check_mail->get("email") != $user->get("email"))
						$data_ajax_liquide['state'] = "Cette email est d&eacute;j&agrave; utilis&eacute";
					elseif (filter_var($post[$elem], FILTER_VALIDATE_EMAIL) ==  false)
						$data_ajax_liquide['state'] = "Cette email n'est pas valide";
					else
					{
						$user->set($elem,$post[$elem]);
						$user->save();
						$data_ajax_liquide['state'] = "ok";
					}
				}
				else
				{
					$user->set($elem,$post[$elem]);
					$user->save();
					$data_ajax_liquide['state'] = "ok";
				}
			}
		}
	}

?>