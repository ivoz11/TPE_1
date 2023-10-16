<?php
/* Smarty version 4.2.1, created on 2023-10-15 23:22:35
  from 'C:\xampp\htdocs\web2\TPE\templates\insertar_Mostrar_Equipo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652c581b0f07e7_11665125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fa17c4949e1be9ee12f57d6d877d122ca48f941' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\insertar_Mostrar_Equipo.tpl',
      1 => 1697404948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/form_equipo.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_652c581b0f07e7_11665125 (Smarty_Internal_Template $_smarty_tpl) {
?>


<h6 class="display-5"> Seccion Equipos: </h6>

<?php if ((isset($_SESSION['USER_ID']))) {
$_smarty_tpl->_subTemplateRender('file:templates/form_equipo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
ob_start();
}
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>

<ul class="list-group">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['teams']->value, 'team');
$_smarty_tpl->tpl_vars['team']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['team']->value) {
$_smarty_tpl->tpl_vars['team']->do_else = false;
?>
    
   <li class='list-group-item d-flex justify-content-between align-items-center'>
   <span>
    <b>Equipo:</b><a href="team/<?php echo $_smarty_tpl->tpl_vars['team']->value->id_team;?>
"> <?php echo $_smarty_tpl->tpl_vars['team']->value->name_team;?>
</a>
    <b>Liga:</b> <?php echo $_smarty_tpl->tpl_vars['team']->value->league;?>
 
    <b>Director tecnico:</b>  <?php echo $_smarty_tpl->tpl_vars['team']->value->technical_director;?>
  
    <b>Cantidad de copas:</b> <?php echo $_smarty_tpl->tpl_vars['team']->value->cups;?>

    </span> 
   
    <div class="ml-auto">
    <?php if ((isset($_SESSION['USER_ID']))) {?>
        <a href='editTeam/<?php echo $_smarty_tpl->tpl_vars['team']->value->id_team;?>
' type='button' class='btn btn-warning ml-auto'>Editar</a>
        <a href='deleteTeam/<?php echo $_smarty_tpl->tpl_vars['team']->value->id_team;?>
' type='button' class='btn btn-dark ml-auto'>Borrar</a>
   <?php ob_start();
}
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>

    </div>
 
</li>        
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>


<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
