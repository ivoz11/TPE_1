<?php
/* Smarty version 4.2.1, created on 2023-10-16 13:00:34
  from 'C:\xampp\htdocs\web2\TPE-2\templates\resultados_Equipos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652d17d2191431_16309236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd85ea0dce68c31265587106ebbf104e0dbac8ef0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-2\\templates\\resultados_Equipos.tpl',
      1 => 1697451820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_652d17d2191431_16309236 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!--Muestra los resultados de lo buscado por el usuario en los Input. En este caso el usuario ingresa el equipo o una aproximacion al equipo y lista todos los items(jugadores) que pertenecen a dicho equipo-->
<?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="border m-4 position absolute top-50">
<h1 class="display-3 text-center"> El resultado de tu busqueda es: </h1>
       
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'rf');
$_smarty_tpl->tpl_vars['rf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rf']->value) {
$_smarty_tpl->tpl_vars['rf']->do_else = false;
?>
        <div class="border m-4 position absolute top-50">
        <ul class="list-group">
            <li class="list-group-item"> <b> Nombre:  </b><?php echo $_smarty_tpl->tpl_vars['rf']->value->name_player;?>
 </li>
            <li class="list-group-item"> <b> Apellido: </b><?php echo $_smarty_tpl->tpl_vars['rf']->value->lastname;?>
 </li>
            <li class="list-group-item"> <b> Edad: </b>  <?php echo $_smarty_tpl->tpl_vars['rf']->value->age;?>
 </li>
            <li class="list-group-item"> <b> Equipo: </b> <?php echo $_smarty_tpl->tpl_vars['rf']->value->name_team;?>
  </li>
            <li class="list-group-item"> <b> Perfil: </b> <?php echo $_smarty_tpl->tpl_vars['rf']->value->profile_player;?>
 </li>
            <li class="list-group-item"> <b> Posicion: </b> <?php echo $_smarty_tpl->tpl_vars['rf']->value->position;?>
</li>
            <li class="list-group-item"> <b> Cantidad de goles: </b> <?php echo $_smarty_tpl->tpl_vars['rf']->value->goals;?>
</li>
        </ul>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
