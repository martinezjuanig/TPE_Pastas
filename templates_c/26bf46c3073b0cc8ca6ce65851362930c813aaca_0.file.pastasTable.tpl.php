<?php
/* Smarty version 3.1.32, created on 2018-09-19 00:14:26
  from 'C:\xampp\htdocs\TPEweb2\templates\pastasTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba178c216fa72_72640482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26bf46c3073b0cc8ca6ce65851362930c813aaca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEweb2\\templates\\pastasTable.tpl',
      1 => 1537308863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ba178c216fa72_72640482 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tablaPastas']->value, 'pasta');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pasta']->value) {
?>
     <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['pasta']->value->nombre;?>
</td>
        <td></td>
        
     </tr>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
