<?php /* Smarty version Smarty-3.1.13, created on 2013-05-28 23:33:49
         compiled from ".\templates\invite.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3161751a522bd1d31e4-14404465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '592516fcce2e2fd3facca80361fe5d67c402c9d0' => 
    array (
      0 => '.\\templates\\invite.tpl',
      1 => 1369760665,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3161751a522bd1d31e4-14404465',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a522bd2359f5_82166632',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a522bd2359f5_82166632')) {function content_51a522bd2359f5_82166632($_smarty_tpl) {?><div class="form">
	<span class="header_form">
		INVITER UN AMI
	</span>
	<table>
		<form action="index.php?action=invite" method="post">
			<tr>
				<td>
					<input value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value)){?><?php echo $_smarty_tpl->tpl_vars['post']->value['email'];?>
<?php }?>" class="log" type="email" name="email" placeholder="Adresse mail" />
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" class="submit" value="Envoyer" />
				</td>
			</tr>
		</form>
	</table>
</div><?php }} ?>