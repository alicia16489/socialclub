<?php
	$smarty -> display('./templates/head.tpl');
	
	if (!empty($_SESSION['user']['id']))
	{
		$smarty->assign('id_user', $_SESSION['user']['id']);
		$smarty->display('./templates/header.tpl');
	}

	$smarty->display('./templates/'.$template.'.tpl');
	$smarty->display('./templates/footer.tpl');
?>