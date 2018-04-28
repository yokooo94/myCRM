<?php
/* Smarty version 3.1.30, created on 2018-04-28 03:24:39
  from "/Users/i337885/VS_WORKSPACE/MyCRM/myCRM/views/cabinet/signIn.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae3cd57133be6_50070656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44dfa6cd89b5ef0597baf69a253bdb54c8642769' => 
    array (
      0 => '/Users/i337885/VS_WORKSPACE/MyCRM/myCRM/views/cabinet/signIn.tpl',
      1 => 1524878619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae3cd57133be6_50070656 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="" method="post">
    <p>E-mail: <input type="email" name="email" /></p>
    <p>Пароль: <input type="password" name="password" /></p>
    <p><input type="submit" /></p>
</form>

<a href="/cabinet/signUp">Регистрация</a><?php }
}
