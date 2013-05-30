<?php

	function include_template($template){
		// VERIFIE L'EXISTENCE DES VUES
			$template_path = './templates/'.$template.'.template.php';

			if (is_readable($template_path) && file_exists($template_path))
				return $template_path;
			else
				die ('Page '.$template_path.' inexistant ou innaccessible <br /> <a href="index.php">retour &agrave; l\'accueil</a>');

	}
	
	function filtre($string,$delimiter){
		global $out_words;
		$string = str_replace("'"," ",$string);
		$words = explode($delimiter,$string);
		$keywords = array();
			
		foreach($words as $word){
			if(!in_array($word,$out_words) && strlen($word) > 2){
				$keywords[]=$word;
			}
		}
		
		return $keywords;
	}

	function route($action){
		global $config;
	
		$actiongroups = 'actiongroups/'.$config['routes'][$action].'.controller.php';
		if (is_readable($actiongroups))
			return $actiongroups;
		else
			die ('Le fichier '.$actiongroups.' n\'existe pas ou est innaccessible');
	}

	// FONCTION D'AUTOCHARGEMENT DES CLASSES
	function downloadClass($class)
	{
		require('class/'.$class.'.class.php');
	}

	// FONCTION REQUETE
	function myQuery($query){
		global $link;
		global $bdd_name;
	
		if (!isset($link))
		{
		$link = mysqli_connect("127.0.0.1", "root", "", $bdd_name);

		if (mysqli_connect_errno())
			die("&Eacute;chec de la connexion : ".mysqli_connect_error());
		}

		$result = mysqli_query($link, $query);

		if ($result === FALSE){
			die('Erreur d\'envoie de la requ&ecirc;te: '.mysqli_errno($link).' et : '.mysqli_error($link));
		}
		
		return ($result);
	}

	function myFetchAssoc($query, $type="assoc"){
		if($type=="assoc"){
			$result = myQuery($query);
			$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
		}
		elseif ($type=="count"){
			$result = myQuery($query);
			$data = mysqli_num_rows($result);
		}

		return ($data);
	}

	// //-- EMAIL CHECK --//
	// --> use this: if (!filter_var($email, FILTER_VAR_EMAIL)) :thumbs: 
	// //-- EMAIL CHECK --//

	//-- LETTER GENERATOR --//
	function qrRand($nb)
	{
	    $r = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	    $t = "";

	    for ($j = 0; $j < $nb; $j++)
	    {
	    	$i = rand(0,35);
	    	$t .= $r[$i];
	    }

	    return $t;
	}
	//-- LETTER GENERATOR --//
		
	//-- KEYGENERATOR --//
	function makeMeAKey(){
			$key = qrRand(6);
			$query = "SELECT `key` FROM `invites` WHERE `key` = '".$key."'";
			
			while(myFetchAssoc($query)){
				$key = qrRand(6);
			}

			return $key;
	}

	//-- STRING CHECK --//
	function stringCheck($string, $type = NULL, $sizeMin = NULL, $sizeMax = NULL)
	{
		if ($type == 'alpha')
		{//alpha
			if(ctype_alpha($string))
			{
				if(strlen($string) >= $sizeMin && strlen($string) <= $sizeMax)
					return TRUE;
				else
					return FALSE;
			}
			else
				return FALSE;
		}
		elseif ($type == 'digit')
		{//digit
			if(ctype_digit($string))
			{
				if(strlen($string) >= $sizeMin && strlen($string) <= $sizeMax)
					return TRUE;
				else
					return FALSE;
			}
			else
				return FALSE;
		}
		elseif ($type == 'alphanum')
		{
			if(ctype_alnum($string))
			{
				if(strlen($string) >= $sizeMin && strlen($string) <= $sizeMax)
					return TRUE;
				else
					return FALSE;
			}
			else
				return FALSE;
		}
		else
		{//other (password)
			if(strlen($string) >= $sizeMin && strlen($string) <= $sizeMax)
				return TRUE;
			else
				return FALSE;
		}
		
	}
	//-- STRING CHECK --//
		
		
	//-- STRING HASH --//
	function stringHash($string)
	{
		$hashedString = hash("sha256", $string);
		
		return ($hashedString);
	}
	//-- STRING HASH --//
	
	function myRealString($string){
		global $link;
		
		$newstr = mysqli_real_escape_string($link,$string);
		
		return $newstr;
	}

	function uploadPic($file)
	{
		global $extensions;
		global $path;

		$errors = array();
		$infos_save = array();
		$dest = $path.stringHash($_SESSION['user']['id']);

		$file_name = $file['name'];
		$file_size = $file['size'];
		$file_tmp = $file['tmp_name'];
		$file_type = $file['type'];
		$file_error = $file['error'];
		$file_ini = pathinfo($file_name);
		$file_ext = strtolower($file_ini['extension']);
		$new_dest = $dest."/".$file_name;

		if (!is_uploaded_file($file_tmp))
			$errors['up'] = "Error while uploading file";

		if ($file_size > 2097152)
			$errors['size'] = "File size must be less than 2 MB";

		if (!in_array($file_ext, $extensions))
			$errors['ext'] = "Your extension's file is not accepted : ".$file_ext;

		if ($file_error != 0)
			$errors['err'] = "There was a mistake please try again";

		if (file_exists($new_dest))
			$errors['double'] = "You can't upload the same artwork twice";

		if (empty($errors))
		{
			if (!is_dir($dest))
				mkdir($dest, 0700);

			move_uploaded_file($file_tmp, $new_dest);

			$infos_file['path'] = $new_dest;
			$infos_file['size'] = $file_size;
			$infos_file['name'] = $file_name;

			return ($infos_file);
		}
		else
			return ($errors);
	}

?>