<?php
/* Smarty version 3.1.32, created on 2018-10-05 19:41:37
  from 'C:\xampp\htdocs\TPE_Pastas\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb7a251cb12f4_29477641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '367a32d4fbeffcedf2bb205522e994035e3b5f92' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Pastas\\templates\\admin.tpl',
      1 => 1538761295,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bb7a251cb12f4_29477641 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <h1>Vista de administrador</h1>
    
  <div class="row">
    <div class="col-6 col-md-6">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Pasta</th>
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
                            <td><a href="delete/<?php echo $_smarty_tpl->tpl_vars['pastas']->value->id_pasta;?>
/">Borrar</a></td>
              <td><a href="editPasta/<?php echo $_smarty_tpl->tpl_vars['pastas']->value->id_pasta;?>
/">Editar</a></td>
              
            </tr>
          </tbody>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </table>
    </div>
  

    <div class="col-6 col-md-6 ">  
      <div class="row "> 

        <div class="col-12 ">  
          <form method="POST" action="savePasta">
            <div class="row">
              <div class="col">
                <input type="text" name='pasta' class="form-control" placeholder="Ingrese Pasta">
              
                <select class="custom-select" name="harinas" id="inputGroupSelect01">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['db_harinas']->value, 'harinas');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['harinas']->value) {
?>
                    <option value=<?php echo $_smarty_tpl->tpl_vars['harinas']->value->id_harina;?>
><?php echo $_smarty_tpl->tpl_vars['harinas']->value->tipo;?>
</option>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                <button type="submit">Agregar</button>
              </div>
            </div>
          </form>
        </div>
        

        <div class="col-12"> </div>
          
        <div class="col-12">
          <form method="POST" action="saveHarina">
            <input type="text" name='harina' class="form-control" placeholder="Agregar Harina">
            <button type="submit">Agregar Harina</button>
          </form>
        </div>
        
      </div>
    </div>


  </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
