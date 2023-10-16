<?php
/* Smarty version 4.2.1, created on 2023-10-15 23:52:26
  from 'C:\xampp\htdocs\web2\TPE\templates\resultados_Equipos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652c5f1a0f5887_01059483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1b18a9544c231f783832df07aba9121718eefb4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\resultados_Equipos.tpl',
      1 => 1697406740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_652c5f1a0f5887_01059483 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="border m-4 position absolute top-50">
<h1 class="display-4"> El resultado de tu busqueda es: </h1>


       
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'rf');
$_smarty_tpl->tpl_vars['rf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rf']->value) {
$_smarty_tpl->tpl_vars['rf']->do_else = false;
?>
    <div class="border m-4 position absolute top-50">

<li> <b> Nombre:  </b><?php echo $_smarty_tpl->tpl_vars['rf']->value->name_player;?>
 </li>
<li> <b> Apellido: </b><?php echo $_smarty_tpl->tpl_vars['rf']->value->lastname;?>
 </li>
<li> <b> Edad: </b>  <?php echo $_smarty_tpl->tpl_vars['rf']->value->age;?>
 </li>
<li> <b> Equipo: </b> <?php echo $_smarty_tpl->tpl_vars['rf']->value->name_team;?>
  </li>
<li> <b> Perfil: </b> <?php echo $_smarty_tpl->tpl_vars['rf']->value->profile_player;?>
 </li>
<li> <b> Posicion: </b> <?php echo $_smarty_tpl->tpl_vars['rf']->value->position;?>
</li>
<li> <b> Cantidad de goles: </b> <?php echo $_smarty_tpl->tpl_vars['rf']->value->goals;?>
</li>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
