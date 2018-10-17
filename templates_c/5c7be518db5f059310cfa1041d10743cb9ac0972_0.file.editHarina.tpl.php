<?php
/* Smarty version 3.1.32, created on 2018-10-17 08:14:05
  from 'C:\xampp\htdocs\TPE_Pastas\templates\editHarina.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bc6d32df2f2d5_95568709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c7be518db5f059310cfa1041d10743cb9ac0972' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Pastas\\templates\\editHarina.tpl',
      1 => 1539755774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc6d32df2f2d5_95568709 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row">
        <div class="col-md-6 col-center">
            
            <h1>Vista de administrador</h1>
            <p><?php echo $_smarty_tpl->tpl_vars['harina']->value->tipo;?>
</p>
        </div>
    </div>
  
    <div class="row">    
        <div class="col-md-6 col-center">  
          <form method="POST" action="editHarina">
                <div class="row">
                    <div class="col">
                        <input type='hidden' name='id_harina' value=<?php echo $_smarty_tpl->tpl_vars['harina']->value->id_harina;?>
>
                        <input type="text" name='tipo' class="form-control" placeholder="Escriba Aquí los cambios" required>
                        <button type="submit">Enviar cambios</button>
                    </div>
                </div>
          </form>
          <a href="admin/">Atrás</a> 
        </div>          
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
