<?php /* Smarty version Smarty-3.1.13, created on 2013-05-29 14:03:32
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1792851a5ee94875804-86308244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1369820824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1792851a5ee94875804-86308244',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'post' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a5ee948e5e86_22076223',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a5ee948e5e86_22076223')) {function content_51a5ee948e5e86_22076223($_smarty_tpl) {?><img class="logo" src="img/logo.png" width="450" alt="Social Night Club">

<div class="form_line">
	<div class="form">
		<span class="header_form">
			CONNEXION
		</span>
		<table>
			<form action="index.php?action=login" method="post">
				<tr>
					<td>
						<input value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value)){?><?php echo $_smarty_tpl->tpl_vars['post']->value['email'];?>
<?php }?>" class="log" required type="email" name="email" placeholder="Adresse mail">
					</td>
				</tr>
				<tr>
					<td>
						<input value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value)){?><?php echo $_smarty_tpl->tpl_vars['post']->value['password'];?>
<?php }?>" class="log" type="password" name="password" placeholder="Mot de passe" required>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" class="submit" value="Connexion"><a href="./index.php?action=forgot_pass" id="forgot_pass">Mot de passe oubli&eacute;</a>
					</td>
				</tr>
				<?php if (isset($_smarty_tpl->tpl_vars['error']->value['infos'])){?>
				<tr>
					<td colspan="2" class="errors">
						Connexion impossible ! Infos erronés.
					</td>
				</tr>
				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['error']->value['actif'])){?>
				<tr>
					<td colspan="2" class="errors">
						Votre compte n'est pas encore validé, consultez votre boite mail !
						<br />
						<a href="#">Renvoyer un mail de confirmation</a>
					</td>
				</tr>
				<?php }?>
			</form>
		</table>
	</div>
</div><?php }} ?>