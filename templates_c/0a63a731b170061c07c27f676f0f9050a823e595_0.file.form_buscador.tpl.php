<?php
/* Smarty version 4.2.1, created on 2023-10-16 12:42:58
  from 'C:\xampp\htdocs\web2\TPE-2\templates\form_buscador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652d13b29ffb31_05071508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a63a731b170061c07c27f676f0f9050a823e595' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-2\\templates\\form_buscador.tpl',
      1 => 1697452977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652d13b29ffb31_05071508 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--Formulario que se utiliza para filtrar por equipos a traves de un buscador-->
<form action="mostrarTeams" method="POST">
<label>Ingrese el nombre de un equipo y podra ver todos sus jugadores: <input type="text" name="search" required></label>      
<button class="btn btn-outline-success" type="submit">Buscar</button>
</form><?php }
}
