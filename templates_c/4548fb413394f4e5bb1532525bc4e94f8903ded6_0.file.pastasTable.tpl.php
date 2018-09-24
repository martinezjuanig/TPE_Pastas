<?php
/* Smarty version 3.1.32, created on 2018-09-24 20:53:49
  from 'C:\xampp\htdocs\TPE_Pastas\templates\pastasTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba932bde62de9_26225600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4548fb413394f4e5bb1532525bc4e94f8903ded6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Pastas\\templates\\pastasTable.tpl',
      1 => 1537815221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ba932bde62de9_26225600 (Smarty_Internal_Template $_smarty_tpl) {
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
            <td><?php echo $_smarty_tpl->tpl_vars['pasta']->value->fk_harina;?>
</td>
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
