<?php /* Smarty version Smarty-3.1.13, created on 2013-05-31 00:03:01
         compiled from ".\templates\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1208651a7cc950e85e7-01139250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97d060df136bc68287855ad0037b446ebb85b73d' => 
    array (
      0 => '.\\templates\\home.tpl',
      1 => 1369500550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1208651a7cc950e85e7-01139250',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a7cc95102fb6_10229126',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a7cc95102fb6_10229126')) {function content_51a7cc95102fb6_10229126($_smarty_tpl) {?><div class="pos">
	<div id="left_col">
		<?php echo $_smarty_tpl->getSubTemplate ('last_status.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
	<div id="right_col">
		<?php echo $_smarty_tpl->getSubTemplate ('message_minibox.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate ('last_photos.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate ('friends_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div><?php }} ?>