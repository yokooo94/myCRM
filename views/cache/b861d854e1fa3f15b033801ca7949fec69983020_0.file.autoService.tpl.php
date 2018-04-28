<?php
/* Smarty version 3.1.30, created on 2018-04-28 12:20:34
  from "/Users/i337885/VS_WORKSPACE/MyCRM/myCRM/views/autoservice/autoService.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae44af260c275_74232497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b861d854e1fa3f15b033801ca7949fec69983020' => 
    array (
      0 => '/Users/i337885/VS_WORKSPACE/MyCRM/myCRM/views/autoservice/autoService.tpl',
      1 => 1524910823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae44af260c275_74232497 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['pathMenu']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<p>Компания : <?php echo $_smarty_tpl->tpl_vars['user']->value->company->name;?>
</p>
<p>Личный кабинет пользователя : <?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</p>


<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['pathAutoService']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['pathAddBox']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['pathListBox']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
