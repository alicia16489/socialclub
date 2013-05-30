<?php /* Smarty version Smarty-3.1.13, created on 2013-05-30 11:07:36
         compiled from ".\templates\forgot_pass.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2205351a716d89416e8-99567948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f64f87846a73e98c6b9d2c6c4098fcf59c37bc2' => 
    array (
      0 => '.\\templates\\forgot_pass.tpl',
      1 => 1369822962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2205351a716d89416e8-99567948',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'email' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a716d8990148_82610743',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a716d8990148_82610743')) {function content_51a716d8990148_82610743($_smarty_tpl) {?><img class="logo" src="img/logo.png" width="450" alt="Social Night Club">

<div class="form_line">
	<div class="form">
		<span class="header_form">
			VOTRE EMAIL
		</span>
		<table>
			<form action="index.php?action=forgot_pass" method="post">
				<tr>
					<td>
						<input value="<?php if (isset($_smarty_tpl->tpl_vars['email']->value)){?><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
<?php }?>" class="log" required type="email" name="email" placeholder="Email" />
					</td>
				</tr>
				<?php if (isset($_smarty_tpl->tpl_vars['error']->value)){?>
				<tr><td>Cette email n'existe pas !</td></tr>
				<?php }?>
				<tr>
					<td colspan="2">
						<input type="submit" class="submit" value="Envoyer" />
					</td>
				</tr>
			</form>
		</table>
	</div>
</div><?php }} ?>