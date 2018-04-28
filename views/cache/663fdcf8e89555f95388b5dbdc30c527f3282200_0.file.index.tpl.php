<?php
/* Smarty version 3.1.30, created on 2018-04-28 12:55:01
  from "/Users/i337885/VS_WORKSPACE/MyCRM/myCRM/views/box/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae45305d9efa5_01240347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '663fdcf8e89555f95388b5dbdc30c527f3282200' => 
    array (
      0 => '/Users/i337885/VS_WORKSPACE/MyCRM/myCRM/views/box/index.tpl',
      1 => 1524912900,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae45305d9efa5_01240347 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['pathMenu']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<p>Компания : <?php echo $_smarty_tpl->tpl_vars['user']->value->company->name;?>
</p>
<p>Личный кабинет пользователя : <?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</p>

<a href="/cabinet/autoservice/<?php echo $_smarty_tpl->tpl_vars['box']->value->autoservice->id;?>
">Назад</a>

<h3>Подъемник  : <?php echo $_smarty_tpl->tpl_vars['box']->value->name;?>
</h3>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['pathAddRecord']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['pathListRecord']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


<?php }
}
