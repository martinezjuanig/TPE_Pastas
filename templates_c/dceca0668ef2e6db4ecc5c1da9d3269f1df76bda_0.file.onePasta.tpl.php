<?php
/* Smarty version 3.1.32, created on 2018-10-13 21:37:20
  from 'C:\xampp\htdocs\TPE_Pastas\templates\onePasta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bc24970644552_94535839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dceca0668ef2e6db4ecc5c1da9d3269f1df76bda' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Pastas\\templates\\onePasta.tpl',
      1 => 1539312374,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc24970644552_94535839 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row">
  <div class="col-md-12 col-md-offset-3">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Pastas</th>
          <th scope="col">Harina</th>
        </tr>
      </thead>
        <tbody>
          <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['pasta']->value->nombre;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['pasta']->value->tipo;?>
</td>
            <td></td>
          </tr>
        </tbody>
    </table>
  </div>
</div>
    
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
