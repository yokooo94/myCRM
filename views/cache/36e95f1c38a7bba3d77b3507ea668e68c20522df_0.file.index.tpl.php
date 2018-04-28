<?php
/* Smarty version 3.1.30, created on 2018-04-28 11:41:34
  from "/Users/i337885/VS_WORKSPACE/MyCRM/myCRM/views/autoservice/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae441cedb7205_59887205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36e95f1c38a7bba3d77b3507ea668e68c20522df' => 
    array (
      0 => '/Users/i337885/VS_WORKSPACE/MyCRM/myCRM/views/autoservice/index.tpl',
      1 => 1524908469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae441cedb7205_59887205 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['pathMenu']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<p>Компания : <?php echo $_smarty_tpl->tpl_vars['user']->value->company->name;?>
</p>
<p>Личный кабинет пользователя : <?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</p>


<h2>Автосервисы компании</h2>


<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['pathAddAutoService']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['pathListAutoService']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


<?php }
}
