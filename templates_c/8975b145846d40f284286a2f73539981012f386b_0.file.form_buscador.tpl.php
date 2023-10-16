<?php
/* Smarty version 4.2.1, created on 2023-10-15 22:47:39
  from 'C:\xampp\htdocs\web2\TPE\templates\form_buscador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652c4febd6e352_62209188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8975b145846d40f284286a2f73539981012f386b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\form_buscador.tpl',
      1 => 1697401409,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652c4febd6e352_62209188 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="mostrarTeams" method="POST">
<label>Filtrar item por equipo: <input type="text" name="search" required></label>      
<button type="submit" class="btn btn-success">Buscar</button>
</form><?php }
}
