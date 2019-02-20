<?php
/* Smarty version 3.1.32, created on 2019-02-20 19:34:18
  from 'C:\xampp\htdocs\TPE_Pastas\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c6d9daa6663e4_03790104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '367a32d4fbeffcedf2bb205522e994035e3b5f92' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Pastas\\templates\\admin.tpl',
      1 => 1550687645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c6d9daa6663e4_03790104 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <h1>Vista de administrador</h1>
<div class="row ">
  <div class="col-md-9 col-center">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Pasta</th>
          <th scope="col">Harina</th>
          <th scope="col">Editar Pasta</th>
          <th scope="col">Editar Harina</th>
          <th scope="col">Borrar</th>
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
            <td><a href="adminPasta/<?php echo $_smarty_tpl->tpl_vars['pastas']->value->id_pasta;?>
/">Editar</a></td>
            <td><a href="adminHarina/<?php echo $_smarty_tpl->tpl_vars['pastas']->value->id_harina;?>
/">Editar</a></td>
            <td><a href="delete/<?php echo $_smarty_tpl->tpl_vars['pastas']->value->id_pasta;?>
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

<div class="row ">
  <div class="col-md-9 col-center ">  
    <form method="POST" action="savePasta" enctype="multipart/form-data">
      <div class="row">
        <div class="col">
          <input type="text" name='pasta' class="form-control" placeholder="Ingrese Pasta" required>
          <select class="custom-select" name="harina" id="inputGroupSelect01">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['harinasTable']->value, 'harinas');
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
          <input type="file" name='adjunto' class="form-control-file" id="adjunto" placeholder="Imagen" accept="image/jpeg">
          <button type="submit">Agregar</button>
        </div>
      </div>
    </form>
  </div>
      
  <div class="col-md-9 col-center"> </div>
      
  <div class="col-md-9 col-center">
    <form method="POST" action="saveHarina">
      <input type="text" name='harina' class="form-control" placeholder="Agregar Harina" required>
      <button type="submit">Agregar Harina</button>
    </form>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
