<?php /* Smarty version Smarty-3.1.13, created on 2013-05-31 00:31:18
         compiled from ".\templates\privateMessage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:348751a7d336dbaef0-48354016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a4fa6d71bc11a6ea8de038173edf5a11d7de780' => 
    array (
      0 => '.\\templates\\privateMessage.tpl',
      1 => 1369953075,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '348751a7d336dbaef0-48354016',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id_chat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a7d336df4836_37177932',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a7d336df4836_37177932')) {function content_51a7d336df4836_37177932($_smarty_tpl) {?><div class="pos">
	<div id="left_col">
	<form id="msg" action="index.php?action=sendMsg" >
		<textarea placeholder="Tapez votre message..." name="content"></textarea>
		<input name="id_chat" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id_chat']->value;?>
" >
		<input type="submit" value="Envoyer">
	</form>
	</div>
	<div id="right_col">

	</div>
</div>


<?php }} ?>