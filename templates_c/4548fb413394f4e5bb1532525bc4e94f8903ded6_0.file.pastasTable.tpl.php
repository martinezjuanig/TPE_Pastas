<?php
/* Smarty version 3.1.32, created on 2018-09-27 05:28:54
  from 'C:\xampp\htdocs\TPE_Pastas\templates\pastasTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bac4e76e7c5f5_30305778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4548fb413394f4e5bb1532525bc4e94f8903ded6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Pastas\\templates\\pastasTable.tpl',
      1 => 1538018927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bac4e76e7c5f5_30305778 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Pasta</th>
            <th scope="col"></th>
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
                    <td></td>
                  </tr>
              </tbody>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </table>
    </div>
  </div>
</div><?php }
}
