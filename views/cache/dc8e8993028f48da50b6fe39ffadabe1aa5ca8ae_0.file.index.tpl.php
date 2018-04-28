<?php
/* Smarty version 3.1.30, created on 2018-04-28 03:49:37
  from "/Users/i337885/VS_WORKSPACE/MyCRM/myCRM/views/cabinet/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae3d33116d181_80718053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc8e8993028f48da50b6fe39ffadabe1aa5ca8ae' => 
    array (
      0 => '/Users/i337885/VS_WORKSPACE/MyCRM/myCRM/views/cabinet/index.tpl',
      1 => 1524880175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae3d33116d181_80718053 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['pathMenu']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<p>Компания : <?php echo $_smarty_tpl->tpl_vars['user']->value->company->name;?>
</p>
<p>Личный кабинет пользователя : <?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</p><?php }
}
