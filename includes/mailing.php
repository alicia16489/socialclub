<?php

	function mailing($email,$object,$type,$name=null,$sender=null,$body=null,$key=null) {
		if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $email)){
		$line = "\r\n";
		}
		else{
		$line = "\n";
		}
		
		//format texte et format HTML.
		$message_txt = "Votre boite mail est obsolete, merci d'en changer et de recommencer l'inscription avec votre nouvel email.";
	
		 //boundary
		$boundary = "-----=".md5(rand());
		
		// smarty - assignation
		$smarty = new Smarty;
		if($sender != null){
			$smarty->assign("sender",$sender);
		}
		if($body != null){
			$smarty->assign("body",$body);
		}
		if($name != null){
			$smarty->assign("name",$name);
		}
		switch($type){
			case "invite":
				$action="register";
				$href="localhost/socialclub/index.php?action=".$action."&amp;key=".$key."&amp;code=".base64_encode($email);
			break;
			case "validate" :
				$action="validate";
				$href="localhost/socialclub/index.php?action=".$action."&amp;code=".base64_encode($email);
			break;
			case "reset_pass":
				$action="validate";
				$href="localhost/socialclub/index.php?action=".$action."&amp;code=".base64_encode($email);
			break;
		}
		$smarty->assign("url",$href);
		$message_html = $smarty->fetch("email.".$type.".tpl");

		//header
		$header = "From: SITE <OpenEntity@mail.com>".$line;
		$header .= "Reply-to: \"SITE\" <OpenEntity@mail.com>".$line;
		$header .= "MIME-Version: 1.0".$line;
		$header .= "Content-Type: multipart/alternative;".$line." boundary=\"".$boundary."\"".$line;

		//message.
		$message = $line."--".$boundary.$line;

		//ajout du message au format texte.
		$message.= "Content-Type: text/plain; charset=\"UTF-8\"".$line;
		$message.= "Content-Transfer-Encoding: 8bit".$line;
		$message.= $line.$message_txt.$line;

		//ajout du message au format HTML
			$message.= $line."--".$boundary.$line;

				$message.= "Content-Type: text/html; charset=\"UTF-8\"".$line;
				$message.= "Content-Transfer-Encoding: 8bit".$line;
				$message.= $line.$message_html.$line;

			$message.= $line."--".$boundary."--".$line;

		$message.= $line."--".$boundary."--".$line;


		mail($email,$object,$message,$header);
}
?>