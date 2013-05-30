<?php

	// CONFIG DE LA BDD
	$bdd_name="socialclub";

	// CONFIG DES ACTIONS
	$config['routes'] = array(
							'home' => 'user',
							
							// user life
							'invite' => 'user',
							'register' => 'user',
							'validate' => 'user',
							'login' => 'user',
							'disconnect' => 'user',
							'up_picture' => 'user',

							'del_picture' => 'user',
							'user_galery' => 'user',
							'avatarisator' => 'user',
							'profil' => 'user',
							'edit_profil' => 'user',
							'reset_pass' => 'user',
							'forgot_pass' => 'user',
							'privateMessage' => 'user',
							
							// user control
							'admin_panel' => 'user',
							'activate_profil' => 'user',
							'reactivate_profil' => 'user',
							
							
	);
	
	// array filtre
	$out_words=array ("le","la","lu","lo","ly","un","une","des","les");

	// ACTION PAR DEFAUT
	$config['default']['unlog'] = "login";
	$config['default']['log'] = "home";

	// EXTENSIONS D'UPLOAD AUTORISEES
	$extensions = array("jpeg", 
                        "jpg",
                        "jpe",
                        "gif",
                        "png"		 
    );

	$avatar_path = "./img/avatar.png";
	$path = "./files/";
?>