<?php /* Smarty version Smarty-3.1.13, created on 2013-05-29 14:03:50
         compiled from ".\templates\profil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:647351a5eea6d24388-14574915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5a423ae1fb293ed4403fd380270b2f2b861cc84' => 
    array (
      0 => '.\\templates\\profil.tpl',
      1 => 1369820976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '647351a5eea6d24388-14574915',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'check_own' => 0,
    'title' => 0,
    'infos_user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a5eea7042024_08924368',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a5eea7042024_08924368')) {function content_51a5eea7042024_08924368($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_CAPITALIZE')) include 'C:\\wamp\\www\\Dropbox\\SocialClub\\Final Officiel Social Club\\libs\\plugins\\modifier.CAPITALIZE.php';
?><script type="text/javascript" scr="./js/edit_profil.js"></script>

<div class="pos" id="check_own" data-check="<?php if (isset($_smarty_tpl->tpl_vars['check_own']->value)){?><?php echo $_smarty_tpl->tpl_vars['check_own']->value;?>
<?php }?>">
	<div id="left_col">
		<div id="profil_user">
			<h3 class="h3_title h3_profil"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>

			</h3>
			<div id="avatar_profil">
				<?php if (!empty($_smarty_tpl->tpl_vars['infos_user']->value['avatar_path'])){?>
					<a class="boxer" href="<?php echo $_smarty_tpl->tpl_vars['infos_user']->value['avatar_path'];?>
" title="Avatar de <?php echo $_smarty_tpl->tpl_vars['infos_user']->value['firstname'];?>
">
						<img class="avatar_profil" src="<?php echo $_smarty_tpl->tpl_vars['infos_user']->value['avatar_path'];?>
" alt="avatar de <?php echo $_smarty_tpl->tpl_vars['infos_user']->value['firstname'];?>
" title="avatar de <?php echo $_smarty_tpl->tpl_vars['infos_user']->value['firstname'];?>
" width="150"/>
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
				<div id="infos_profil_content">
					<table>
						<tr>
							<td><span class="info_profil">Pr&eacute;nom et Nom:</span></td>
							<td><span id="firstname_profil"><?php echo smarty_modifier_CAPITALIZE($_smarty_tpl->tpl_vars['infos_user']->value['firstname']);?>
</span> <span id="lastname_profil"><?php echo smarty_modifier_CAPITALIZE($_smarty_tpl->tpl_vars['infos_user']->value['lastname']);?>
</span></td>
						</tr>
						<tr>
							<td><span class="info_profil">Email:</span></td>
							<td><span id="email_profil"><?php echo $_smarty_tpl->tpl_vars['infos_user']->value['email'];?>
</span></td>
						</tr>
						<?php if (isset($_smarty_tpl->tpl_vars['check_own']->value)){?>
						<tr>
								<td><span class="info_profil">Description:</span></td> 
								<td><span id="description_profil"><?php if (empty($_smarty_tpl->tpl_vars['infos_user']->value['description'])){?>Ajoutez une description<?php }?><?php echo $_smarty_tpl->tpl_vars['infos_user']->value['description'];?>
</span></td>
							</tr>
						<?php }elseif(!empty($_smarty_tpl->tpl_vars['infos_user']->value['description'])&&!isset($_smarty_tpl->tpl_vars['check_own']->value)){?>
							<tr>
								<td><span class="info_profil">Description:</span></td> 
								<td><?php echo $_smarty_tpl->tpl_vars['infos_user']->value['description'];?>
<td>
							</tr>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['check_own']->value)){?>
						<tr>
							<td><span class="info_profil">Naissance: </span></td> 
							<td><span id="birthdate_profil"><?php if (empty($_smarty_tpl->tpl_vars['infos_user']->value['birthdate'])){?>Ajoutez votre date de naissance<?php }?><?php echo $_smarty_tpl->tpl_vars['infos_user']->value['birthdate'];?>
</span></td>
						</tr>
						<?php }elseif(!empty($_smarty_tpl->tpl_vars['infos_user']->value['birthdate'])&&!isset($_smarty_tpl->tpl_vars['check_own']->value)){?>
						<tr>
							<td><span class="info_profil">Naissance: </span></td> 
							<td><?php echo $_smarty_tpl->tpl_vars['infos_user']->value['birthdate'];?>
</td>
						</tr>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['check_own']->value)){?>
						<tr>
							<td><span class="info_profil">Sexe:</span></td> 
							<td><span id="sexe_profil"><?php if (empty($_smarty_tpl->tpl_vars['infos_user']->value['sexe'])){?>Pr&eacute;cisez votre sexe<?php }?><?php echo $_smarty_tpl->tpl_vars['infos_user']->value['sexe'];?>
</span></td>
						</tr>
						<?php }elseif(!empty($_smarty_tpl->tpl_vars['infos_user']->value['sexe'])&&!isset($_smarty_tpl->tpl_vars['check_own']->value)){?>
						<tr>
							<td><span class="info_profil">Sexe:</span></td> 
							<td><?php echo $_smarty_tpl->tpl_vars['infos_user']->value['sexe'];?>
</td>
						</tr>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['check_own']->value)){?>
						<tr>
							<td><span class="info_profil">Adresse:</span></td> 
							<td><span id="address_profil"><?php if (empty($_smarty_tpl->tpl_vars['infos_user']->value['address'])){?>Ajoutez une adresse<?php }?><?php echo $_smarty_tpl->tpl_vars['infos_user']->value['address'];?>
</span></td>
						</tr>
						<?php }elseif(!empty($_smarty_tpl->tpl_vars['infos_user']->value['address'])&&!isset($_smarty_tpl->tpl_vars['check_own']->value)){?>
						<tr>
							<td><span class="info_profil">Adresse:</span></td> 
							<td><?php echo $_smarty_tpl->tpl_vars['infos_user']->value['address'];?>
</td>
						</tr>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['check_own']->value)){?>
						<tr>
							<td><span class="info_profil">Code Postal:</span></td> 
							<td><span id="zipcode_profil"><?php if (empty($_smarty_tpl->tpl_vars['infos_user']->value['zip_code'])){?>Ajoutez un code postal<?php }?><?php echo $_smarty_tpl->tpl_vars['infos_user']->value['zip_code'];?>
</span></td>
						</tr>
						<?php }elseif(!empty($_smarty_tpl->tpl_vars['infos_user']->value['zip_code'])&&!isset($_smarty_tpl->tpl_vars['check_own']->value)){?>
						<tr>
							<td><span class="info_profil">Code Postal:</span></td> 
							<td><?php echo $_smarty_tpl->tpl_vars['infos_user']->value['zip_code'];?>
</td>
						</tr>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['check_own']->value)){?>
						<tr>
							<td><span class="info_profil">Ville:</span></td> 
							<td><span id="town_profil"><?php if (empty($_smarty_tpl->tpl_vars['infos_user']->value['town'])){?>Ajoutez une ville<?php }?><?php echo $_smarty_tpl->tpl_vars['infos_user']->value['town'];?>
</span></td>
						</tr>
						<?php }elseif(!empty($_smarty_tpl->tpl_vars['infos_user']->value['town'])&&!isset($_smarty_tpl->tpl_vars['check_own']->value)){?>
						<tr>
							<td><span class="info_profil">Ville:</span></td> 
							<td><?php echo $_smarty_tpl->tpl_vars['infos_user']->value['town'];?>
</td>
						</tr>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['check_own']->value)){?>
						<tr>
							<td><span class="info_profil">Pays:</span></td> 
							<td><span id="country_profil"><?php if (empty($_smarty_tpl->tpl_vars['infos_user']->value['country'])){?>Ajoutez un pays<?php }?><?php echo $_smarty_tpl->tpl_vars['infos_user']->value['country'];?>
</span></td>
						</tr>
						<?php }elseif(!empty($_smarty_tpl->tpl_vars['infos_user']->value['country'])&&!isset($_smarty_tpl->tpl_vars['check_own']->value)){?>
						<tr>
							<td><span class="info_profil">Pays:</span></td> 
							<td><?php echo $_smarty_tpl->tpl_vars['infos_user']->value['country'];?>
</td>
						</tr>
						<?php }?>
					</table>
				</div>
		</div>
	</div>
	<div id="right_col">
		<?php echo $_smarty_tpl->getSubTemplate ('message_minibox.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate ('all_photo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate ('friends_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div><?php }} ?>