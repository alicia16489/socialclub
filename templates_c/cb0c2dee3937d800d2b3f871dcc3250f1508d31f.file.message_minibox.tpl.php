<?php /* Smarty version Smarty-3.1.13, created on 2013-05-31 04:41:24
         compiled from ".\templates\message_minibox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1049851a80db3d06365-54573178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb0c2dee3937d800d2b3f871dcc3250f1508d31f' => 
    array (
      0 => '.\\templates\\message_minibox.tpl',
      1 => 1369968082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1049851a80db3d06365-54573178',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a80db3d40bb4_63537019',
  'variables' => 
  array (
    'message' => 0,
    'mp' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a80db3d40bb4_63537019')) {function content_51a80db3d40bb4_63537019($_smarty_tpl) {?><div id="last_mp">
	<h3 class="h3_title">Derniers messages</h3>
	<ul>
		<?php  $_smarty_tpl->tpl_vars['mp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['message']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mp']->key => $_smarty_tpl->tpl_vars['mp']->value){
$_smarty_tpl->tpl_vars['mp']->_loop = true;
?>
		<a href="index.php?action=privateMessage&id_chat=<?php echo $_smarty_tpl->tpl_vars['mp']->value['id_chat'];?>
">
			<li>
				<img src="<?php echo $_smarty_tpl->tpl_vars['mp']->value['avatar_path'];?>
" width="40" height="40" alt="<?php echo $_smarty_tpl->tpl_vars['mp']->value['firstname'];?>
">
				<div class="message_content">
					<span class="message_author"><?php echo $_smarty_tpl->tpl_vars['mp']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['mp']->value['lastname'];?>
</span>
					<p><?php echo $_smarty_tpl->tpl_vars['mp']->value['content'];?>
</p>
				</div>
				<div class="clear"></div>
			</li>
		</a>
		<?php }
if (!$_smarty_tpl->tpl_vars['mp']->_loop) {
?>
			Aucun nouveau message
		<?php } ?>
	</ul>
</div><?php }} ?>