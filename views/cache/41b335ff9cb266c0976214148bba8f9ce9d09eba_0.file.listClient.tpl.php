<?php
/* Smarty version 3.1.30, created on 2018-04-28 13:08:35
  from "/Users/i337885/VS_WORKSPACE/MyCRM/myCRM/views/client/includes/listClient.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae45633103f59_70460833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41b335ff9cb266c0976214148bba8f9ce9d09eba' => 
    array (
      0 => '/Users/i337885/VS_WORKSPACE/MyCRM/myCRM/views/client/includes/listClient.tpl',
      1 => 1524913712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae45633103f59_70460833 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table border="1">
        <tr>
         <th>№ Клиента</th>
         <th>Имя</th>
         <th>Телефон</th>
         <th>Автомобиль</th>
         <th>Рег. Номер</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->company->ownClient, 'client');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['client']->value) {
?>
        <tr><td><?php echo $_smarty_tpl->tpl_vars['client']->value->id;?>
</td><td><a href="/cabinet/client/<?php echo $_smarty_tpl->tpl_vars['client']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['client']->value->name;?>
</a></td><td><?php echo $_smarty_tpl->tpl_vars['client']->value->phone;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['client']->value->car;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['client']->value->carNumber;?>
</td></tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

       </table><?php }
}
