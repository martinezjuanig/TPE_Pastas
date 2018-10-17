<?php
/* Smarty version 3.1.32, created on 2018-10-17 09:06:43
  from 'C:\xampp\htdocs\TPE_Pastas\templates\loginForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bc6df83ced043_72666093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e0536f059cc6de23ed22e803b6ff7c2e9355f21' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Pastas\\templates\\loginForm.tpl',
      1 => 1539759853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc6df83ced043_72666093 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 <div class="container">
    <div class="col-12">
      <div class="row-center">
        <div class="col-md-6 col-md-offset-3">

          <form action="logIn" method="post">

            <div class="form-group">
              <label for="user">Name</label>
              <input type="text" class="form-control" name="username"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" required>
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required>
            </div>
            <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
              <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
            <?php }?>

            <button type="submit" class="btn btn-primary">Submit</button>

          </form>

        </div>
      </div>
    </div>
  </div> 
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<?php }
}
