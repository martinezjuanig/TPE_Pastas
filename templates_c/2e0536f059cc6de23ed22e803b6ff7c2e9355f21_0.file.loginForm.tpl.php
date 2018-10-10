<?php
/* Smarty version 3.1.32, created on 2018-10-03 05:14:53
  from 'C:\xampp\htdocs\TPE_Pastas\templates\loginForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb4342d4ad9a9_46699333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e0536f059cc6de23ed22e803b6ff7c2e9355f21' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Pastas\\templates\\loginForm.tpl',
      1 => 1538536308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bb4342d4ad9a9_46699333 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 <div class="container">
    <div class="col-12">
      <div class="row-center">
        <div class="col-md-6 col-md-offset-3">

          <form action="logIn" method="post">

            <div class="form-group">
              <label for="user">Name</label>
              <input type="text" class="form-control" name="username"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
            </div>

            
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
            </div>

            
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
