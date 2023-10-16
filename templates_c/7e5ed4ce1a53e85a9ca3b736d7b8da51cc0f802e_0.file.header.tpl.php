<?php
/* Smarty version 4.2.1, created on 2023-10-16 12:24:18
  from 'C:\xampp\htdocs\web2\TPE-2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652d0f52beafd7_06860672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e5ed4ce1a53e85a9ca3b736d7b8da51cc0f802e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-2\\templates\\header.tpl',
      1 => 1697451458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652d0f52beafd7_06860672 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>100% FUTBOL</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a  class="navbar-brand" href="<?php echo BASE_URL;?>
">100% FUTBOL</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="">Home</a>
                  </li>
                  <?php if (!(isset($_SESSION['USER_ID']))) {?>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="login">Login</a>
                    </li>
                  <?php } else { ?> 
                    <li class="nav-item ml-auto">
                      <a class="nav-link" aria-current="page" href="logout">Logout (<?php echo $_SESSION['USER_USUARIO'];?>
)</a>
                    </li>
                  <?php }?>
                </ul>
              </div>
               
            </div>
          </nav>
    </header>

    <main class="container"><?php }
}
