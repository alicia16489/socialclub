<?php /* Smarty version Smarty-3.1.13, created on 2013-05-31 01:56:17
         compiled from ".\templates\privateMessage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:348751a7d336dbaef0-48354016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a4fa6d71bc11a6ea8de038173edf5a11d7de780' => 
    array (
      0 => '.\\templates\\privateMessage.tpl',
      1 => 1369958173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '348751a7d336dbaef0-48354016',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a7d336df4836_37177932',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a7d336df4836_37177932')) {function content_51a7d336df4836_37177932($_smarty_tpl) {?><div class="pos">
	<div id="left_col">
		<div id="mailbox">
			<h3 class="h3_title">Boîte de récéption</h3>
			<ul>
				<li>
					<img src="img/avatar.png" alt="avatar" height="40" width="40" />
					<span>Baptiste<br/>Gios</span>
				</li>
				<li>
					<img src="img/avatar.png" alt="avatar" height="40" width="40" />
					<span>Baptiste<br/>Gios</span>
				</li>
				<li>
					<img src="img/avatar.png" alt="avatar" height="40" width="40" />
					<span>Baptiste<br/>Gios</span>
				</li>
				<li>
					<img src="img/avatar.png" alt="avatar" height="40" width="40" />
					<span>Baptiste<br/>Gios</span>
				</li>
				<li>
					<img src="img/avatar.png" alt="avatar" height="40" width="40" />
					<span>Baptiste<br/>Gios</span>
				</li>
			</ul>
			<div id="room_chat">
				<ul>
					<li>
						<img class="me" src="img/avatar.png" alt="avatar" height="60" width="60" />
						<p class="me">
							<span>Envoy&eacute; le 12/04 &agrave; 11:42</span>
							JEM TRO L&Eacute; KAYOUeeeeeeeeee eeeeeeeee eeeeeeeeeeeee eeeeeeeeeeeeeeeeeeeeeeeeee eeeeeeeee eeeeeeeeeeee eeeeeeeee eeeeeeeeeeeeeeee eeeeeeeeeeee eeeeeeeee eeeeeeeeeeeeeeee eeeeeeeeeeeeeeeeeeeeee eeeeeeeeee eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee eeeeeeeeeeee eeeeeeeeeee eeeeeeeee eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee eeeeeeee eeeeeeeeeeeeeeee eeeeeeeeeeeeeeeee eeeeeeeeeeee eeeeeeeeeeeee</p>
						<div class="clear"></div>
					</li>
					<li>
						<img class="him" title="him" src="img/avatar.gif" alt="avatar" height="60" width="60" />
						<p class="him">
							<span>Envoy&eacute; le 12/04 &agrave; 11:42</span>
							MOA OSSI :) :)
						</p>
						<div class="clear"></div>
					</li>
				</ul>
				<div id="mail_form">
					<form id="msg" action="" >
						<textarea rows="4" placeholder="Tapez votre message..." name="content" required></textarea>
						<input type="submit" value="Envoyer">
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