<?php
/* Smarty version 3.1.30, created on 2018-04-28 12:18:09
  from "/Users/i337885/VS_WORKSPACE/MyCRM/myCRM/views/autoservice/includes/listBox.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae44a615f3201_37080479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b6848ec7ecbf46eeddce063e11604abe5c9188d' => 
    array (
      0 => '/Users/i337885/VS_WORKSPACE/MyCRM/myCRM/views/autoservice/includes/listBox.tpl',
      1 => 1524910604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae44a615f3201_37080479 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table border="1">
        <tr>
         <th>№ Подъемника</th>
         <th>Подъемник</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['autoService']->value->ownBox, 'box');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['box']->value) {
?>
        <tr><td><?php echo $_smarty_tpl->tpl_vars['box']->value->id;?>
</td><td><a href="/cabinet/box/<?php echo $_smarty_tpl->tpl_vars['box']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['box']->value->name;?>
</a></td></tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

       </table><?php }
}
