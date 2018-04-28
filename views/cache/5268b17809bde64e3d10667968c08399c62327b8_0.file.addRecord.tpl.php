<?php
/* Smarty version 3.1.30, created on 2018-04-28 13:03:16
  from "/Users/i337885/VS_WORKSPACE/MyCRM/myCRM/views/box/includes/addRecord.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae454f4429276_85486067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5268b17809bde64e3d10667968c08399c62327b8' => 
    array (
      0 => '/Users/i337885/VS_WORKSPACE/MyCRM/myCRM/views/box/includes/addRecord.tpl',
      1 => 1524913370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae454f4429276_85486067 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3>Новая запись</h3>
<form action="" method="post">
    <p>Клиент: <select name="client">
    <option selected>Выберите клиента</option>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['box']->value->autoservice->company->ownClient, 'client');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['client']->value) {
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['client']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['client']->value->name;?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

   </select></p>
    <p>Начало: <input type="datetime-local" name="dateStart" /></p>
    <p>Конец: <input type="datetime-local" name="dateEnd" /></p>
    <p><input type="submit" /></p>
</form>
<?php }
}
