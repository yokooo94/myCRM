<?php
/* Smarty version 3.1.30, created on 2018-04-28 11:39:35
  from "/Users/i337885/VS_WORKSPACE/MyCRM/myCRM/views/autoservice/includes/addAutoService.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae44157716e47_11736400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7810bc4dc90ab5551f5dfde5e566e846adb6fd96' => 
    array (
      0 => '/Users/i337885/VS_WORKSPACE/MyCRM/myCRM/views/autoservice/includes/addAutoService.tpl',
      1 => 1524908195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae44157716e47_11736400 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3>Новый автосервис</h3>
<form action="" method="post">
    <p>Наименование: <input type="text" name="name" /></p>
    <p>Телефон: <input type="text" name="phone" /></p>
    <p>Адрес: <input type="text" name="address" /></p>
    <p><input type="submit" /></p>
</form>
<?php }
}
