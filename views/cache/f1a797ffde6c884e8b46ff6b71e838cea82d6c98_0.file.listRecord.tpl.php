<?php
/* Smarty version 3.1.30, created on 2018-04-28 13:13:21
  from "/Users/i337885/VS_WORKSPACE/MyCRM/myCRM/views/box/includes/listRecord.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae4575104ad32_35861299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1a797ffde6c884e8b46ff6b71e838cea82d6c98' => 
    array (
      0 => '/Users/i337885/VS_WORKSPACE/MyCRM/myCRM/views/box/includes/listRecord.tpl',
      1 => 1524913999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae4575104ad32_35861299 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table border="1">
        <tr>
         <th>№ Записи</th>
         <th>Клиент</th>
         <th>Автомобиль</th>
          <th>Начало</th>
           <th>Конец</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['box']->value->ownRecord, 'record');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['record']->value) {
?>
        <tr><td><?php echo $_smarty_tpl->tpl_vars['record']->value->id;?>
</td><td><a href="/cabinet/client/<?php echo $_smarty_tpl->tpl_vars['record']->value->client->id;?>
"><?php echo $_smarty_tpl->tpl_vars['record']->value->client->name;?>
</a></td><td><?php echo $_smarty_tpl->tpl_vars['record']->value->client->car;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['record']->value->dateStart;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['record']->value->dateEnd;?>
</td></tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

       </table><?php }
}
