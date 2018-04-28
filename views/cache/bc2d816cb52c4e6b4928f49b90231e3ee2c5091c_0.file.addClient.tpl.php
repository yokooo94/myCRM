<?php
/* Smarty version 3.1.30, created on 2018-04-28 04:12:36
  from "/Users/i337885/VS_WORKSPACE/MyCRM/myCRM/views/client/includes/addClient.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae3d894da2335_79114119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc2d816cb52c4e6b4928f49b90231e3ee2c5091c' => 
    array (
      0 => '/Users/i337885/VS_WORKSPACE/MyCRM/myCRM/views/client/includes/addClient.tpl',
      1 => 1524881553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae3d894da2335_79114119 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3>Новый клиент</h3>
<form action="" method="post">
    <p>Имя: <input type="text" name="name" /></p>
    <p>Телефон: <input type="text" name="phone" /></p>
    <p>Автомобиль: <input type="text" name="car" /></p>
    <p>Рег. номер: <input type="text" name="carNumber" /></p>
    <p><input type="submit" /></p>
</form>
<?php }
}
