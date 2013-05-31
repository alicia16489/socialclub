<?php /* Smarty version Smarty-3.1.13, created on 2013-05-31 04:58:03
         compiled from ".\templates\last_photos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1164451a80e1e18a173-96194925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e494b0ae95c6cb9c439ce0dd330518d1cb1c7704' => 
    array (
      0 => '.\\templates\\last_photos.tpl',
      1 => 1369966373,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1164451a80e1e18a173-96194925',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a80e1e1f7879_51179444',
  'variables' => 
  array (
    'infos_pic' => 0,
    'key' => 0,
    'picture' => 0,
    'infos_user_pic' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a80e1e1f7879_51179444')) {function content_51a80e1e1f7879_51179444($_smarty_tpl) {?><div id="last_photos" class="hidden">
	<h3 class="h3_title">Dernières photos</h3>
	<div class="toggle_box">
		<div class="triangle_up_black"></div>
	</div>
	<!-- TEST CARROUSEL -->
	<div id="conteneur">
		<div id="carrousel">
			<?php  $_smarty_tpl->tpl_vars['picture'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['picture']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['infos_pic']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['picture']->key => $_smarty_tpl->tpl_vars['picture']->value){
$_smarty_tpl->tpl_vars['picture']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['picture']->key;
?>
				<div id="slide<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
" class="slide">
				    <div class="visu">
				    	<a class="boxer" rel="last_photo" href="<?php echo $_smarty_tpl->tpl_vars['picture']->value['path'];?>
" title="<br /><?php echo $_smarty_tpl->tpl_vars['picture']->value['description'];?>
<br /><a href='index.php?action=profil&amp;id=<?php echo $_smarty_tpl->tpl_vars['picture']->value['user_id'];?>
'><?php echo $_smarty_tpl->tpl_vars['infos_user_pic']->value[$_smarty_tpl->tpl_vars['key']->value]['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['infos_user_pic']->value[$_smarty_tpl->tpl_vars['key']->value]['lastname'];?>
</a><br />Post&eacute; le <?php echo date('d/m/Y &#224; G:i',strtotime($_smarty_tpl->tpl_vars['picture']->value['created']));?>
">
							<img class="last_photo_img" src="<?php echo $_smarty_tpl->tpl_vars['picture']->value['path'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['picture']->value['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['picture']->value['title'];?>
" />
						</a>
				    </div>
				</div>
			<?php } ?>
		</div>
	</div>
</div><?php }} ?>