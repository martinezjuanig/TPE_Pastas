<?php
/* Smarty version 3.1.32, created on 2018-10-03 05:14:37
  from 'C:\xampp\htdocs\TPE_Pastas\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb4341d133438_35859349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '331389404c0406745a8f1740a23348065280890b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Pastas\\templates\\header.tpl',
      1 => 1538536353,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb4341d133438_35859349 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="css/bootstrap-4.1.3/css/bootstrap.min.css">
    <title>PastaMan</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="home">"Pasta Man"</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pasta">Pastas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="harina">Harinas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=loginForm>LogIn</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=logOut>LogOut</a>
          </li>
        </ul>
      </div>
</nav>
<div class="container-fluid"><?php }
}
