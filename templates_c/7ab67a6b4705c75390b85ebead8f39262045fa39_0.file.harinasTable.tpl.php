<?php
/* Smarty version 3.1.32, created on 2018-09-27 05:28:54
  from 'C:\xampp\htdocs\TPE_Pastas\templates\harinasTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bac4e76f03520_39477610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ab67a6b4705c75390b85ebead8f39262045fa39' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Pastas\\templates\\harinasTable.tpl',
      1 => 1538018857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bac4e76f03520_39477610 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Harina</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tablaHarinas']->value, 'harina');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['harina']->value) {
?>
          <tbody>
            <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['harina']->value->tipo;?>
</td>
              <td> </td>
            </tr>
          </tbody>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
    </div>
  </div>
</div>
<?php }
}
