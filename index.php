<?php
	/* SETUP */
	
		session_start();
		date_default_timezone_set("Europe/Paris"); // set date default timezone
		header('Content-Type: text/html; charset=UTF-8'); //encode
		include('./includes/mailing.php');
		include('./libs/Smarty.class.php');
		include ('./includes/config.php');
				
		include ('./includes/tools.php');
		spl_autoload_register('downloadClass');

	
	/* END SETUP */
	
	/* DEFAULT ACTION */

		$action = $config['default']['unlog'];
		if(!empty($_SESSION)){
			$action = $config['default']['log'];
		}

	/* END DEFAULT ACTION */
	
	/* GET */
	
		if (!empty($_GET['key']))
			$reg_key = $_GET['key'];
		if (!empty($_GET['action']))
			$action = $_GET['action'];
		if (!empty($_GET['code']))
			$code = base64_decode($_GET['code']);
		
	/* END GET */
	
	// action control
	if (!array_key_exists($action, $config['routes']))
		die ("L'action demand&eacute;e n'existe pas. <br /> <a href='index.php'>retour &agrave; l'accueil</a>");
	
	// setup view
	$template = $action;
	$smarty = new Smarty;
		
	// rooter action with file control
	include($route=route($action));

	// main view : template including
	include ("views/main.view.php");

?>