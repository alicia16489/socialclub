<?php /* Smarty version Smarty-3.1.13, created on 2013-05-30 23:10:39
         compiled from ".\templates\user_galery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1537251a5ef9a8b7563-29025113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2657bc6830060574f34887d7462102a212c5e40' => 
    array (
      0 => '.\\templates\\user_galery.tpl',
      1 => 1369947418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1537251a5ef9a8b7563-29025113',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a5ef9a973382_77189034',
  'variables' => 
  array (
    'title' => 0,
    'action' => 0,
    'infos_user' => 0,
    'infos_pic_galery' => 0,
    'info_pic' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a5ef9a973382_77189034')) {function content_51a5ef9a973382_77189034($_smarty_tpl) {?><div class="pos">
	<div id="left_col">
		<div id="gallery_user">
			<h3 class="h3_title h3_profil"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>

				<?php if ($_smarty_tpl->tpl_vars['action']->value!='profil'){?>
					<a href="index.php?action=profil&amp;id=<?php echo $_smarty_tpl->tpl_vars['infos_user']->value['user_id'];?>
">retour au profil</a>
				<?php }?>
			</h3>
			<div id="photo_wall">
			<?php  $_smarty_tpl->tpl_vars['info_pic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info_pic']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['infos_pic_galery']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info_pic']->key => $_smarty_tpl->tpl_vars['info_pic']->value){
$_smarty_tpl->tpl_vars['info_pic']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['info_pic']->key;
?>
				<div class="descro"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info_pic']->value['description']);?>
</div>
				<div class="content_img">
					<a class="boxer boxer_gallery tooltip" id="boxer<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" rel="gallery" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info_pic']->value['path']);?>
" title="<?php echo mb_strtoupper(htmlspecialchars($_smarty_tpl->tpl_vars['info_pic']->value['title']), 'UTF-8');?>
<br /><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info_pic']->value['description']);?>
 <span class='del_ava'><a href='index.php?action=del_picture&amp;id=<?php echo $_smarty_tpl->tpl_vars['info_pic']->value['id'];?>
'><img class='ico_gallery' src='./img/del_img.png' alt='Supprimer cette image' title='Supprimer cette image' /></a> <a href='index.php?action=avatarisator&amp;path=<?php echo $_smarty_tpl->tpl_vars['info_pic']->value['path'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['infos_user']->value['user_id'];?>
'><img src='./img/ava_img.png' class='ico_gallery' alt='Mettre en avatar' title='Mettre en avatar' /></a></span>" >
						<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info_pic']->value['path']);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info_pic']->value['title']);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info_pic']->value['title']);?>
" class="gallery_img" />
					</a>
				</div>
			<?php } ?>
			</div>
		</div>
	</div>
	<div id="right_col">
		<?php echo $_smarty_tpl->getSubTemplate ('message_minibox.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate ('last_photos.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate ('friends_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div><?php }} ?>