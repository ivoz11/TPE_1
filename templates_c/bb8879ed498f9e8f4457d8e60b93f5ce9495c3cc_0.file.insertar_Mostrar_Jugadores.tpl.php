<?php
/* Smarty version 4.2.1, created on 2023-10-16 06:48:38
  from 'C:\xampp\htdocs\web2\TPE\templates\insertar_Mostrar_Jugadores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652cc0a6228665_65141366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb8879ed498f9e8f4457d8e60b93f5ce9495c3cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\insertar_Mostrar_Jugadores.tpl',
      1 => 1697431716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/form_jugadores.tpl' => 1,
    'file:templates/form_buscador.tpl' => 1,
  ),
),false)) {
function content_652cc0a6228665_65141366 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div>
<h5 class="display-5" id="asd" style="text-align: right"> Info Jugadores</h5>
</div>

<h6 class="display-5"> Seccion Jugadores: </h6>
<?php if ((isset($_SESSION['USER_ID']))) {
$_smarty_tpl->_subTemplateRender('file:templates/form_jugadores.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
ob_start();
}
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>


<ul class="list-group">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['players']->value, 'player');
$_smarty_tpl->tpl_vars['player']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['player']->value) {
$_smarty_tpl->tpl_vars['player']->do_else = false;
?>
    
   <li class='list-group-item d-flex justify-content-between align-items-center'>
            <span>
             <b>Jugador:</b><a href="player/<?php echo $_smarty_tpl->tpl_vars['player']->value->id_player;?>
"> <?php echo $_smarty_tpl->tpl_vars['player']->value->name_player;?>
 <?php echo $_smarty_tpl->tpl_vars['player']->value->lastname;?>
</a>
             <b> Edad: </b> <?php echo $_smarty_tpl->tpl_vars['player']->value->age;?>
 
             <b> Equipo: </b>  <?php echo $_smarty_tpl->tpl_vars['player']->value->name_team;?>
  
             <b> Perfil: </b> <?php echo $_smarty_tpl->tpl_vars['player']->value->profile_player;?>

             <b> Posicion: </b>  <?php echo $_smarty_tpl->tpl_vars['player']->value->position;?>
 
             <b> Cantidad de goles: </b> <?php echo $_smarty_tpl->tpl_vars['player']->value->goals;?>

             
             </span> 
            
             <div class="ml-auto">
             <?php if ((isset($_SESSION['USER_ID']))) {?>
             <a href='edit/<?php echo $_smarty_tpl->tpl_vars['player']->value->id_player;?>
' type='button' class='btn btn-warning ml-auto'>Editar</a>
             <a href='delete/<?php echo $_smarty_tpl->tpl_vars['player']->value->id_player;?>
' type='button' class='btn btn-dark ml-auto'>Borrar</a>
            <?php ob_start();
}
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

             </div>
          
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</ul>

<?php $_smarty_tpl->_subTemplateRender('file:templates/form_buscador.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
