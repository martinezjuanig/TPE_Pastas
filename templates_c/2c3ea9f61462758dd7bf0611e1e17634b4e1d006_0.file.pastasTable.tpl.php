<?php
/* Smarty version 3.1.32, created on 2018-09-24 16:23:24
  from 'C:\xampp\htdocs\HTML\TPE_Pastas\templates\pastasTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba8f35ce050d9_54624389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c3ea9f61462758dd7bf0611e1e17634b4e1d006' => 
    array (
      0 => 'C:\\xampp\\htdocs\\HTML\\TPE_Pastas\\templates\\pastasTable.tpl',
      1 => 1537798978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ba8f35ce050d9_54624389 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Pasta</th>
      <th scope="col">Harina de :</th>
      <th scope="col">Last</th>
    </tr>
  </thead>
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tablaPastas']->value, 'pasta');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pasta']->value) {
?>
        <tbody>
            <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['pasta']->value->nombre;?>
</td>
            <td>Otto</td>
            <td>@mdo</td>
            </tr>
        </tbody>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
