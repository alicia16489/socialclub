<?php /* Smarty version Smarty-3.1.13, created on 2013-05-28 23:27:17
         compiled from ".\templates\last_status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2544051a52135da8eb4-06031758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9118292a2daac3a2ac86ce89e827448fc3e623e' => 
    array (
      0 => '.\\templates\\last_status.tpl',
      1 => 1369761040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2544051a52135da8eb4-06031758',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
    'row' => 0,
    'avatar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a52135e932f0_08479095',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a52135e932f0_08479095')) {function content_51a52135e932f0_08479095($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\wamp\\www\\Dropbox\\SocialClub\\Final Officiel Social Club\\libs\\plugins\\modifier.capitalize.php';
?><div id="last_status">
	<h3 class="h3_title">Derniers statuts</h3>
	<?php if (!empty($_smarty_tpl->tpl_vars['status']->value)){?>
	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['status']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
		<section class="status">
			<span class="status_author">
				<img src="<?php if (!empty($_smarty_tpl->tpl_vars['row']->value['avatar_path'])){?><?php echo $_smarty_tpl->tpl_vars['row']->value['avatar_path'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
<?php }?>" width="60" height="60" alt="Baptiste">
				<br/>
				<span><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['row']->value['firstname']);?>
<br/><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['row']->value['lastname']);?>
</span>
			</span>
			<div class="status_content">
				<p>
					<?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>

				</p>
			</div>
			<div class="clear"></div>
		</section>
	<?php } ?>
	<?php }?>
</div><?php }} ?>