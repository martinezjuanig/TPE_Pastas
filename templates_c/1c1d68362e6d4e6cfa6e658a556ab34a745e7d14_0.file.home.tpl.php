<?php
/* Smarty version 3.1.32, created on 2018-10-17 08:54:20
  from 'C:\xampp\htdocs\TPE_Pastas\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bc6dc9cd04ce0_38913479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c1d68362e6d4e6cfa6e658a556ab34a745e7d14' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Pastas\\templates\\home.tpl',
      1 => 1539759189,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc6dc9cd04ce0_38913479 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
  <div class="col-md-12 col-md-offset-3">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Pastas</th>
          <th scope="col">Harina</th>
          <th scope="col">Detalles</th>
        </tr>
      </thead>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['db_pastas']->value, 'pastas');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pastas']->value) {
?>
        <tbody>
          <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['pastas']->value->nombre;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['pastas']->value->tipo;?>
</td>
            <td><a href="detalle/<?php echo $_smarty_tpl->tpl_vars['pastas']->value->id_pasta;?>
/">Ver mas</a></td>
          </tr>
        </tbody>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
  </div>
</div>
    



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
