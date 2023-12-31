<?php
/* Smarty version 4.2.1, created on 2023-10-16 08:40:45
  from 'C:\xampp\htdocs\web2\TPE\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652cdaedec0364_06981832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '965710785cc9ef594df960c0c299835164faf048' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\header.tpl',
      1 => 1697438444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652cdaedec0364_06981832 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>100% FUTBOL</title>
</head>
<body>
    <header>
        <nav class="navbar text-bg-warning  p-1">
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
