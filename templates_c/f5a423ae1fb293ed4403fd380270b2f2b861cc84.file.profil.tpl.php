<?php /* Smarty version Smarty-3.1.13, created on 2013-05-28 23:45:53
         compiled from ".\templates\profil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2199151a521360ae549-86221838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5a423ae1fb293ed4403fd380270b2f2b861cc84' => 
    array (
      0 => '.\\templates\\profil.tpl',
      1 => 1369777552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2199151a521360ae549-86221838',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a521362fe339_62441022',
  'variables' => 
  array (
    'title' => 0,
    'infos_user' => 0,
    'id_user' => 0,
    'id_get' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a521362fe339_62441022')) {function content_51a521362fe339_62441022($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_CAPITALIZE')) include 'C:\\wamp\\www\\Dropbox\\SocialClub\\Final Officiel Social Club\\libs\\plugins\\modifier.CAPITALIZE.php';
?><script type="text/javascript" scr="./js/edit_profil.js"></script>

<div class="pos">
	<div id="left_col">
		<div id="profil_user">
			<h3 class="h3_title h3_profil"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>

			</h3>
			<a href="index.php?action=edit_profil&amp;id=<?php echo $_smarty_tpl->tpl_vars['infos_user']->value['id'];?>
">
				<?php if ($_smarty_tpl->tpl_vars['id_user']->value==$_smarty_tpl->tpl_vars['id_get']->value||empty($_smarty_tpl->tpl_vars['id_get']->value)){?>
					<img id='edit_infos' src='./img/edit.png' alt='&Eacute;diter profil' title='&Eacute;diter profil' />
				<?php }?>
			</a>
			<div id="avatar_profil">
				<?php if (!empty($_smarty_tpl->tpl_vars['infos_user']->value['avatar_path'])){?>
					<a class="boxer" href="<?php echo $_smarty_tpl->tpl_vars['infos_user']->value['avatar_path'];?>
" title="Avatar de <?php echo $_smarty_tpl->tpl_vars['infos_user']->value['firstname'];?>
">
						<img class="avatar_profil" src="<?php echo $_smarty_tpl->tpl_vars['infos_user']->value['avatar_path'];?>
" alt="avatar de <?php echo $_smarty_tpl->tpl_vars['infos_user']->value['firstname'];?>
" title="avatar de <?php echo $_smarty_tpl->tpl_vars['infos_user']->value['firstname'];?>
" />
					</a>
				<?php }else{ ?>
					<a class="boxer" href="./img/avatar.gif" title="Avatar de <?php echo $_smarty_tpl->tpl_vars['infos_user']->value['firstname'];?>
">
						<img width="100%" height="100%" class="avatar_profil" src="./img/avatar.gif" alt="avatar de <?php echo $_smarty_tpl->tpl_vars['infos_user']->value['firstname'];?>
" title="avatar de <?php echo $_smarty_tpl->tpl_vars['infos_user']->value['firstname'];?>
" />
					</a>
				<?php }?>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['action']->value!="edit_profil"){?>
				<div id="infos_profil_content">
					<table>
						<tr>
							<td><span class="info_profil">Pr&eacute;nom et Nom:</span></td>
							<td><?php echo smarty_modifier_CAPITALIZE($_smarty_tpl->tpl_vars['infos_user']->value['firstname']);?>
 <?php echo smarty_modifier_CAPITALIZE($_smarty_tpl->tpl_vars['infos_user']->value['lastname']);?>
</td>
						</tr>
						<tr>
							<td><span class="info_profil">Email:</span></td>
							<td><?php echo $_smarty_tpl->tpl_vars['infos_user']->value['email'];?>
</td>
						</tr>
						<?php if (!empty($_smarty_tpl->tpl_vars['infos_user']->value['description'])){?>
							<tr>
								<td><span class="info_profil">Description:</span></td> 
								<td><?php echo $_smarty_tpl->tpl_vars['infos_user']->value['description'];?>
</td>
							</tr>
						<?php }?>
						<?php if (!empty($_smarty_tpl->tpl_vars['infos_user']->value['birthdate'])){?>
						<tr>
							<td><span class="info_profil">Naissance: </span></td> 
							<td><?php echo $_smarty_tpl->tpl_vars['infos_user']->value['birthdate'];?>
</td>
						</tr>
						<?php }?>
						<?php if (!empty($_smarty_tpl->tpl_vars['infos_user']->value['sexe'])){?><?php echo $_smarty_tpl->tpl_vars['infos_user']->value['sexe'];?>

						<tr>
							<td><span class="info_profil">Sexe:</span></td> 
							<td><?php echo $_smarty_tpl->tpl_vars['infos_user']->value['sexe'];?>
</td>
						</tr>
						<?php }?>
						<?php if (!empty($_smarty_tpl->tpl_vars['infos_user']->value['address'])){?>
						<tr>
							<td><span class="info_profil">Adresse:</span></td> 
							<td><?php echo $_smarty_tpl->tpl_vars['infos_user']->value['address'];?>
</td>
						</tr>
						<?php }?>
						<?php if (!empty($_smarty_tpl->tpl_vars['infos_user']->value['zip_code'])){?>
						<tr>
							<td><span class="info_profil">Code Postal:</span></td> 
							<td><?php echo $_smarty_tpl->tpl_vars['infos_user']->value['zip_code'];?>
</td>
						</tr>
						<?php }?>
						<?php if (!empty($_smarty_tpl->tpl_vars['infos_user']->value['town'])){?>
						<tr>
							<td><span class="info_profil">Ville:</span></td> 
							<td><?php echo $_smarty_tpl->tpl_vars['infos_user']->value['town'];?>
</td>
						</tr>
						<?php }?>
						<?php if (!empty($_smarty_tpl->tpl_vars['infos_user']->value['country'])){?>
						<tr>
							<td><span class="info_profil">Pays:</span></td> 
							<td><?php echo $_smarty_tpl->tpl_vars['infos_user']->value['country'];?>
</td>
						</tr>
						<?php }?>
					</table>
				</div>
			<?php }?>
		</div>
	</div>
	<div id="right_col">
		<?php echo $_smarty_tpl->getSubTemplate ('message_minibox.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate ('all_photo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate ('friends_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div><?php }} ?>