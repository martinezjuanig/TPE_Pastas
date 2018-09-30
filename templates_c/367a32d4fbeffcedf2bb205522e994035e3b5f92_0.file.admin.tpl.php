<?php
/* Smarty version 3.1.32, created on 2018-09-30 23:57:40
  from 'C:\xampp\htdocs\TPE_Pastas\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb146d42dc512_21918826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '367a32d4fbeffcedf2bb205522e994035e3b5f92' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Pastas\\templates\\admin.tpl',
      1 => 1538344656,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bb146d42dc512_21918826 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <h1></h1>
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Pasta</th>
                  <th scope="col">Harina</th>
                  <th scope="col">Acción</th>
                  <th scope="col">Acción</th>
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
                    <td><a href="delete/<?php echo $_smarty_tpl->tpl_vars['pastas']->value->fk_harina;?>
/">Borrar</a></td>
                    
                  </tr>
                </tbody>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
          </div>
      </div>
    
    <form method="POST" action="save">
        <div class="row">
            <div class="col">
                <input type="text" name='pasta' class="form-control" placeholder="Ingrese Pasta">
            </div>
            </div>
                <select class="custom-select" name="harina" id="inputGroupSelect01">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['db_pastas']->value, 'pastas');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pastas']->value) {
?>
                                        <option value=<?php echo $_smarty_tpl->tpl_vars['pastas']->value->id_harina;?>
><?php echo $_smarty_tpl->tpl_vars['pastas']->value->id_harina;?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
             <button type="submit">Enviar Cambios</button>
        </div>
    </form>
  </div>

      
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
