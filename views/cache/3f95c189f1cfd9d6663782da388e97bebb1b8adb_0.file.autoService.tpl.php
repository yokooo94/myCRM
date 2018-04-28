<?php
/* Smarty version 3.1.30, created on 2018-04-28 11:59:18
  from "/Users/i337885/VS_WORKSPACE/MyCRM/myCRM/views/autoservice/includes/autoService.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae445f6e255d1_86565337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f95c189f1cfd9d6663782da388e97bebb1b8adb' => 
    array (
      0 => '/Users/i337885/VS_WORKSPACE/MyCRM/myCRM/views/autoservice/includes/autoService.tpl',
      1 => 1524909557,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae445f6e255d1_86565337 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a href="/cabinet/autoservice">Назад</a>

<h3>Автосервис : <?php echo $_smarty_tpl->tpl_vars['autoService']->value->name;?>
</h3>

<p>Адрес : <?php echo $_smarty_tpl->tpl_vars['autoService']->value->address;?>
</p>
<?php }
}
