<?php /* Smarty version Smarty-3.1.13, created on 2013-05-29 14:03:18
         compiled from ".\templates\friends_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2267251a5ee86162f25-80803308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbce910844626c95a03b7468d5d16b7550ca4463' => 
    array (
      0 => '.\\templates\\friends_list.tpl',
      1 => 1369760531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2267251a5ee86162f25-80803308',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'friends' => 0,
    'friend' => 0,
    'avatar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a5ee861c6430_96645774',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a5ee861c6430_96645774')) {function content_51a5ee861c6430_96645774($_smarty_tpl) {?><div id="friends_list">
	<h3 class="h3_title">Amis</h3>
	<div>
		<?php if (isset($_smarty_tpl->tpl_vars['friends']->value)){?>
			<?php  $_smarty_tpl->tpl_vars['friend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['friend']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['friends']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['friend']->key => $_smarty_tpl->tpl_vars['friend']->value){
$_smarty_tpl->tpl_vars['friend']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['friend']->key;
?>
				<a href="index.php?action=profil&amp;id=<?php echo $_smarty_tpl->tpl_vars['friend']->value['id'];?>
">
					<img src="<?php if (!empty($_smarty_tpl->tpl_vars['friend']->value['avatar_path'])){?><?php echo $_smarty_tpl->tpl_vars['friend']->value['avatar_path'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
<?php }?>" width="60" height="60" alt="<?php echo $_smarty_tpl->tpl_vars['friend']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['friend']->value['lastname'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['friend']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['friend']->value['lastname'];?>
" />
				</a>
			<?php } ?>
		<?php }else{ ?>
			Vous n'avez pas encore d'ami(e)s
		<?php }?>
	</div>
</div><?php }} ?>