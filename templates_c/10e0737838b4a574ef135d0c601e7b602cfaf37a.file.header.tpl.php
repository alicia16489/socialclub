<?php /* Smarty version Smarty-3.1.13, created on 2013-05-28 23:53:04
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:605451a521360948f8-54528348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1369777758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '605451a521360948f8-54528348',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a52136096fe9_43765195',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a52136096fe9_43765195')) {function content_51a52136096fe9_43765195($_smarty_tpl) {?><header>
    <div class="pos">
    	<h1>
            <span>Social Night Club</span>
            <a href="index.php">
                <img src="img/logo.png" width="200" alt="Social Night Club" />
            </a>
        </h1>
        <nav>
            <ul>
                <li>
                    <a href="./index.php?action=profil">Profil</a>
                </li>
                <li>
                    <a href="./index.php?action=privateMessage">Messagerie</a>
                </li>
                <li>
                    <a href="./index.php?action=user_galery">Photos</a>
                </li>
                <li>
                    <a href="./index.php?action=invite">Inviter un ami</a>
                </li>
                <li>
                    <a href="./index.php?action=disconnect">Deconnexion</a>
                </li>
            </ul>
            <div id="post_status_box">
                <span>Exprimez-vous !</span>
                <div id="triangle_down"></div>
            </div>
        </nav>
    </div>
</header>
<?php }} ?>