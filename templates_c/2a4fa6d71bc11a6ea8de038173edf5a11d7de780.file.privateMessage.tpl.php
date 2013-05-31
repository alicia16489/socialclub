<?php /* Smarty version Smarty-3.1.13, created on 2013-05-31 04:59:13
         compiled from ".\templates\privateMessage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1082951a80db3c4ab53-77978269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a4fa6d71bc11a6ea8de038173edf5a11d7de780' => 
    array (
      0 => '.\\templates\\privateMessage.tpl',
      1 => 1369968808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1082951a80db3c4ab53-77978269',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a80db3cd9f86_80441455',
  'variables' => 
  array (
    'chat_list' => 0,
    'user' => 0,
    'id_chat' => 0,
    'last_msg' => 0,
    'msg' => 0,
    'id_receiver' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a80db3cd9f86_80441455')) {function content_51a80db3cd9f86_80441455($_smarty_tpl) {?><div class="pos">
	<div id="left_col">
		<div id="mailbox">
			<h3 class="h3_title">Boîte de récéption</h3>
			<div id="new_talk">
				Nouvelle conversation
				<select>
					<option value=""></option>
					<option value="">Benoit Ciret</option>
					<option value="">Nicolas Portier</option>
				</select>
				<input type="submit" value="Go"/>
				<div class="clear"></div>
			</div>
			<ul>
				<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['chat_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
				<a href="index.php?action=privateMessage&id_chat=<?php echo $_smarty_tpl->tpl_vars['user']->key;?>
">
					<li>
						<img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['avatar_path'];?>
" alt="avatar" height="40" width="40" />
						<span><?php echo $_smarty_tpl->tpl_vars['user']->value['firstname'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['user']->value['lastname'];?>
</span>
					</li>
				</a>
				<?php }
if (!$_smarty_tpl->tpl_vars['user']->_loop) {
?>
				<li>
					<span>Vous n'avez aucun messages !</span>
				</li>
				<?php } ?>
			</ul>
			<div id="room_chat">
				<ul>
					<?php  $_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['last_msg']->value[$_smarty_tpl->tpl_vars['id_chat']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->key => $_smarty_tpl->tpl_vars['msg']->value){
$_smarty_tpl->tpl_vars['msg']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['msg']->value['sender_id']!=$_smarty_tpl->tpl_vars['id_receiver']->value){?>
					<li>
						<img class="me" src="<?php echo $_smarty_tpl->tpl_vars['chat_list']->value[$_smarty_tpl->tpl_vars['id_chat']->value]['avatar_path'];?>
" alt="avatar" height="60" width="60" />
						<p class="me">
							<span><?php echo $_smarty_tpl->tpl_vars['msg']->value['date_send'];?>
</span>
							<?php echo $_smarty_tpl->tpl_vars['msg']->value['content'];?>

						</p>
						<div class="clear"></div>
					</li>
					<?php }else{ ?>
					<li>
						<img class="him" title="him" src="img/avatar.gif" alt="avatar" height="60" width="60" />
						<p class="him">
							<span><?php echo $_smarty_tpl->tpl_vars['msg']->value['date_send'];?>
</span>
							<?php echo $_smarty_tpl->tpl_vars['msg']->value['content'];?>

						</p>
						<div class="clear"></div>
					</li>
					<?php }?>
					<?php }
if (!$_smarty_tpl->tpl_vars['msg']->_loop) {
?>
						Aucun Message !
					<?php } ?>
				</ul>
				<div id="mail_form">
					<form id="msg" action="index.php?action=sendMsg" >
						<textarea rows="4" placeholder="Tapez votre message..." name="content" required></textarea>
						<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id_chat']->value;?>
" name="id_chat" />
						<input type="submit" value="Envoyer"><span id="ok_message"></span>
					</form>
				</div>
				
			</div>
		</div>
	</div>
	<div id="right_col">
		<?php echo $_smarty_tpl->getSubTemplate ('message_minibox.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
<?php }} ?>