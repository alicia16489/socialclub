<?php /* Smarty version Smarty-3.1.13, created on 2013-05-28 23:27:18
         compiled from ".\templates\all_photo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1849351a5213637bc57-72467710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '068a02ece77baaa9ab2cd9f30e1c39b0e64abba2' => 
    array (
      0 => '.\\templates\\all_photo.tpl',
      1 => 1369597921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1849351a5213637bc57-72467710',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'infos_user' => 0,
    'gallery_title' => 0,
    'friends_pic' => 0,
    'key' => 0,
    'picture' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a521363db8e3_94727116',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a521363db8e3_94727116')) {function content_51a521363db8e3_94727116($_smarty_tpl) {?><div id="last_photos">
	<h3 class="h3_title"><a href="index.php?action=user_galery&amp;id=<?php echo $_smarty_tpl->tpl_vars['infos_user']->value[0]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['gallery_title']->value;?>
</a></h3>
	<!-- TEST CAROUSEL -->
	<div id="conteneur">
		<div id="carrousel">
			<?php  $_smarty_tpl->tpl_vars['picture'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['picture']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['friends_pic']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['picture']->key => $_smarty_tpl->tpl_vars['picture']->value){
$_smarty_tpl->tpl_vars['picture']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['picture']->key;
?>
					<div id="slide<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
" class="slide">
					    <div class="visu">
					    	<a class="boxer" rel="last_photo" href="<?php echo $_smarty_tpl->tpl_vars['picture']->value['path'];?>
" title="<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['picture']->value['title'], 'UTF-8');?>
<br /><?php echo $_smarty_tpl->tpl_vars['picture']->value['description'];?>
">
								<img class="last_photo_img" src="<?php echo $_smarty_tpl->tpl_vars['picture']->value['path'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['picture']->value['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['picture']->value['title'];?>
" />
							</a>
					    </div>
					    <div class="title_carrousel">
					    	<?php echo $_smarty_tpl->tpl_vars['picture']->value['title'];?>

					    </div>
					</div>
			<?php } ?>
		</div>
	</div>
</div><?php }} ?>