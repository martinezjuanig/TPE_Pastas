<?php
/* Smarty version 3.1.32, created on 2018-10-13 21:44:11
  from 'C:\xampp\htdocs\TPE_Pastas\templates\harinasTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bc24b0b7dfea0_70168298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ab67a6b4705c75390b85ebead8f39262045fa39' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Pastas\\templates\\harinasTable.tpl',
      1 => 1539459700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc24b0b7dfea0_70168298 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="row">
    <div class="col-md-6 col-center">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Harina</th>
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
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
