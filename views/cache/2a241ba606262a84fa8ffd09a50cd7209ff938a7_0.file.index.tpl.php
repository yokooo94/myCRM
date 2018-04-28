<?php
/* Smarty version 3.1.30, created on 2018-04-28 04:12:36
  from "/Users/i337885/VS_WORKSPACE/MyCRM/myCRM/views/client/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae3d894d966b4_29420250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a241ba606262a84fa8ffd09a50cd7209ff938a7' => 
    array (
      0 => '/Users/i337885/VS_WORKSPACE/MyCRM/myCRM/views/client/index.tpl',
      1 => 1524881537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae3d894d966b4_29420250 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['pathMenu']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<p>Компания : <?php echo $_smarty_tpl->tpl_vars['user']->value->company->name;?>
</p>
<p>Личный кабинет пользователя : <?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</p>


<h2>Клиенты компании</h2>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['pathAddClient']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['pathListClient']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php }
}
