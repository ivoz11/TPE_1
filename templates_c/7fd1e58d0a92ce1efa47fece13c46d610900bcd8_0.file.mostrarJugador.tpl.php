<?php
/* Smarty version 4.2.1, created on 2023-10-16 12:26:52
  from 'C:\xampp\htdocs\web2\TPE-2\templates\mostrarJugador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652d0fec393068_11344507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fd1e58d0a92ce1efa47fece13c46d610900bcd8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-2\\templates\\mostrarJugador.tpl',
      1 => 1697451782,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_652d0fec393068_11344507 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--Muestra el jugador seleccionado individualmente, con mas detalles. Se vuelve a tomar la ID con un input hidden-->

<?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div class="border m-4 position absolute top-50">

    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['player']->value->id_player;?>
">
    
    <ul class="list-group">
    
      <li class="list-group-item list-group-item-light fs-5">Nombre:</li>
      <li class="list-group-item list-group-item-info fs-5"><?php echo $_smarty_tpl->tpl_vars['player']->value->name_player;?>
</li>
   
      <li class="list-group-item list-group-item-light fs-5">Apellido:</li>
      <li class="list-group-item list-group-item-info fs-5"><?php echo $_smarty_tpl->tpl_vars['player']->value->lastname;?>
</li>
  
      <li class="list-group-item list-group-item-light fs-5">Edad:</li>
      <li class="list-group-item list-group-item-info fs-5"><?php echo $_smarty_tpl->tpl_vars['player']->value->age;?>
</li>
    
      <li class="list-group-item list-group-item-light fs-5">Equipo: </li>
      <li class="list-group-item list-group-item-info fs-5"><?php echo $_smarty_tpl->tpl_vars['player']->value->id_team;?>
</li>
   
      <li class="list-group-item list-group-item-light fs-5">Perfil</li> 
      <li class="list-group-item list-group-item-info fs-5"><?php echo $_smarty_tpl->tpl_vars['player']->value->profile_player;?>
</li>
    
      <li class="list-group-item list-group-item-light fs-5">Posicion:</li>
      <li class="list-group-item list-group-item-info fs-5"> <?php echo $_smarty_tpl->tpl_vars['player']->value->position;?>
</li>
   
      <li class="list-group-item list-group-item-light fs-5">Cantidad de goles:</li>
      <li class="list-group-item list-group-item-info fs-5"> <?php echo $_smarty_tpl->tpl_vars['player']->value->goals;?>
</li>
    
    </ul>
    <?php if ((isset($_SESSION['USER_ID']))) {?>

    <a href='edit/<?php echo $_smarty_tpl->tpl_vars['player']->value->id_player;?>
' type='button' class='btn btn-warning ml-auto'>Editar</a>

  <?php ob_start();
}
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>


</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
