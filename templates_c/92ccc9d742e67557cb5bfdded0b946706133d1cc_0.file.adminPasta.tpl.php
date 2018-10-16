<?php
/* Smarty version 3.1.32, created on 2018-10-13 21:32:04
  from 'C:\xampp\htdocs\TPE_Pastas\templates\adminPasta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bc24834abdd23_81292615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92ccc9d742e67557cb5bfdded0b946706133d1cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Pastas\\templates\\adminPasta.tpl',
      1 => 1539459121,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc24834abdd23_81292615 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="row">
        <div class="col-md-6 col-center">
            <h1>Vista de administrador</h1>
            <p><?php echo $_smarty_tpl->tpl_vars['pasta']->value->nombre;?>
</p>
        </div>
    </div>
  
    <div class="row">    
        <div class="col-md-6 col-center">  
          <form method="POST" action="editPasta">
                <div class="row">
                    <div class="col">
                        <input type='hidden' name='id_pasta' value=<?php echo $_smarty_tpl->tpl_vars['pasta']->value->id_pasta;?>
>
                        <input type="text" name='nombre' class="form-control" placeholder="">
                        <button type="submit">Enviar cambios</button>
                    </div>
                </div>
          </form>
        </div>          
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
