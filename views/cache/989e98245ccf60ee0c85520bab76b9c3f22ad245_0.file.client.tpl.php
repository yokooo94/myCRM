<?php
/* Smarty version 3.1.30, created on 2018-04-28 13:09:51
  from "/Users/i337885/VS_WORKSPACE/MyCRM/myCRM/views/client/client.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae4567f7aa848_82225266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '989e98245ccf60ee0c85520bab76b9c3f22ad245' => 
    array (
      0 => '/Users/i337885/VS_WORKSPACE/MyCRM/myCRM/views/client/client.tpl',
      1 => 1524913789,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae4567f7aa848_82225266 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['pathMenu']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<p>Компания : <?php echo $_smarty_tpl->tpl_vars['user']->value->company->name;?>
</p>
<p>Личный кабинет пользователя : <?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</p>

<a href="/cabinet/client">Назад</a>

<h3>Клиент : <?php echo $_smarty_tpl->tpl_vars['client']->value->name;?>
</h3>

<p>Телефон : <?php echo $_smarty_tpl->tpl_vars['client']->value->phone;?>
</p>
<p>Автомобиль : <?php echo $_smarty_tpl->tpl_vars['client']->value->car;?>
</p>
<p>Рег. номер : <?php echo $_smarty_tpl->tpl_vars['client']->value->carNumber;?>
</p>

<?php }
}
