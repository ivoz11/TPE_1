<?php
/* Smarty version 4.2.1, created on 2023-10-16 12:07:20
  from 'C:\xampp\htdocs\web2\TPE-2\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652d0b58941fa9_36392992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e326e7eecf899a248cc427ef8846f58683844e01' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-2\\templates\\error.tpl',
      1 => 1697442235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_652d0b58941fa9_36392992 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="position absolute top-50">
    <h1 class="list-group-item list-group-item-danger" >El equipo seleccionado no se puede eliminar por que esta siendo utilizado en la otra tabla, primero elimine los item que les correponden a dicho Equipo y vuelva a Intentarlo.</h1>
    <a href="home">Volver al inicio</a>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
