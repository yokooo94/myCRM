<?php
/* Smarty version 3.1.30, created on 2018-04-28 03:43:15
  from "/Users/i337885/VS_WORKSPACE/MyCRM/myCRM/views/cabinet/includes/menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae3d1b33fc9b6_89462087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84e2cf4cb9242d7a815b694c51da99e98d258316' => 
    array (
      0 => '/Users/i337885/VS_WORKSPACE/MyCRM/myCRM/views/cabinet/includes/menu.tpl',
      1 => 1524879794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae3d1b33fc9b6_89462087 (Smarty_Internal_Template $_smarty_tpl) {
?>

<style>
    .myborder{
        border: 1px solid black;
    }
</style>

<div class="myborder">
    <h2>Меню</h2>
  <ul>
    <li><a href="/cabinet">Главная</a></li>
    <li><a href="/cabinet/client">Клиенты</a></li>
    <li><a href="/cabinet/logOut">Выйти</a></li>
  </ul>
</div>
<?php }
}
