<?php
/* Smarty version 3.1.30, created on 2018-04-28 03:24:53
  from "/Users/i337885/VS_WORKSPACE/MyCRM/myCRM/views/cabinet/signUp.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae3cd655effd5_65981183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '991d27e1f1b160bbb2f6004dfd013cec3978a1fb' => 
    array (
      0 => '/Users/i337885/VS_WORKSPACE/MyCRM/myCRM/views/cabinet/signUp.tpl',
      1 => 1524878663,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae3cd655effd5_65981183 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="" method="post">
    <p>E-mail: <input type="email" name="email" /></p>
    <p>Пароль: <input type="password" name="password" /></p>
    <p><input type="submit" /></p>
</form>

<a href="/cabinet/signIn">Вход в личный кабинет</a><?php }
}
