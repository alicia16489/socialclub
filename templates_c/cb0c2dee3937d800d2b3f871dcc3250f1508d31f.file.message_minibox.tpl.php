<?php /* Smarty version Smarty-3.1.13, created on 2013-05-31 00:23:55
         compiled from ".\templates\message_minibox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1278651a7d17b711bf9-88447962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb0c2dee3937d800d2b3f871dcc3250f1508d31f' => 
    array (
      0 => '.\\templates\\message_minibox.tpl',
      1 => 1369828256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1278651a7d17b711bf9-88447962',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mp' => 0,
    'msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a7d17b748833_14484739',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a7d17b748833_14484739')) {function content_51a7d17b748833_14484739($_smarty_tpl) {?><div id="last_mp">
	<h3 class="h3_title">Derniers messages</h3>
	<ul>
		<?php  $_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mp']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->key => $_smarty_tpl->tpl_vars['msg']->value){
$_smarty_tpl->tpl_vars['msg']->_loop = true;
?>
		<a href="index.php?action=privateMessage&id_chat=<?php echo $_smarty_tpl->tpl_vars['msg']->value['id_chat'];?>
">
			<li>
				<img src="<?php echo $_smarty_tpl->tpl_vars['msg']->value['avatar_path'];?>
" width="40" height="40" alt="Baptiste">
				<div class="message_content">
					<span class="message_author"><?php echo $_smarty_tpl->tpl_vars['msg']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['msg']->value['lastname'];?>
</span>
					<p><?php echo $_smarty_tpl->tpl_vars['msg']->value['content'];?>
</p>
				</div>
				<div class="clear"></div>
			</li>
		</a>
		<?php } ?>
	</ul>
</div><?php }} ?>