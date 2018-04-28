<?php
/* Smarty version 3.1.30, created on 2018-04-28 11:59:58
  from "/Users/i337885/VS_WORKSPACE/MyCRM/myCRM/views/autoservice/includes/listAutoService.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae4461e4f7d59_81370868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '028a348d2d327eebc535b9e19b63ca7de20ceeef' => 
    array (
      0 => '/Users/i337885/VS_WORKSPACE/MyCRM/myCRM/views/autoservice/includes/listAutoService.tpl',
      1 => 1524909596,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae4461e4f7d59_81370868 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table border="1">
        <tr>
         <th>№ Автосервиса</th>
         <th>Имя</th>
         <th>Телефон</th>
         <th>Адрес</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->company->ownAutoservice, 'autoservice');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['autoservice']->value) {
?>
        <tr><td><?php echo $_smarty_tpl->tpl_vars['autoservice']->value->id;?>
</td><td><a href="/cabinet/autoservice/<?php echo $_smarty_tpl->tpl_vars['autoservice']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['autoservice']->value->name;?>
</a></td><td><?php echo $_smarty_tpl->tpl_vars['autoservice']->value->phone;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['autoservice']->value->address;?>
</td></tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

       </table><?php }
}
