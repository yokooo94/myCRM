<?php
/* Smarty version 3.1.30, created on 2018-04-28 03:24:39
  from "/Users/i337885/VS_WORKSPACE/MyCRM/myCRM/views/cabinet/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae3cd570d53f0_82418800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc8e8993028f48da50b6fe39ffadabe1aa5ca8ae' => 
    array (
      0 => '/Users/i337885/VS_WORKSPACE/MyCRM/myCRM/views/cabinet/index.tpl',
      1 => 1524878591,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae3cd570d53f0_82418800 (Smarty_Internal_Template $_smarty_tpl) {
?>
Личный кабинет пользователя : <?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>


<a href="/cabinet/logOut">Выйти</a><?php }
}
