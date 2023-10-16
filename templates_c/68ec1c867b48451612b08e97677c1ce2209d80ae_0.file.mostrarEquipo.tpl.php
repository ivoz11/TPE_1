<?php
/* Smarty version 4.2.1, created on 2023-10-16 13:00:43
  from 'C:\xampp\htdocs\web2\TPE-2\templates\mostrarEquipo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652d17dbc3e3b8_85623726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68ec1c867b48451612b08e97677c1ce2209d80ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-2\\templates\\mostrarEquipo.tpl',
      1 => 1697451769,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_652d17dbc3e3b8_85623726 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--Muestra el equipo seleccionado individualmente, con mas detalles. Se vuelve a tomar la ID con un input hidden-->


<?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div class="border m-4 position absolute top-50">
    <input type="hidden" name="id_Team" value="<?php echo $_smarty_tpl->tpl_vars['team']->value->id_team;?>
">
        
        <ul class="list-group">

            <li class="list-group-item list-group-item-light fs-5">Equipo:</li>
            <li class="list-group-item list-group-item-info fs-5"><?php echo $_smarty_tpl->tpl_vars['team']->value->name_team;?>
</li>
        
            <li class="list-group-item list-group-item-light fs-5">Liga: </li>
            <li class="list-group-item list-group-item-info fs-5"> <?php echo $_smarty_tpl->tpl_vars['team']->value->league;?>
</li>

            <li class="list-group-item list-group-item-light fs-5">Director tecnico: </li>
            <li class="list-group-item list-group-item-info fs-5"> <?php echo $_smarty_tpl->tpl_vars['team']->value->technical_director;?>
</li>
        
            <li class="list-group-item list-group-item-light fs-5">Cantidad de copas: </li>
            <li class="list-group-item list-group-item-info fs-5"><?php echo $_smarty_tpl->tpl_vars['team']->value->cups;?>
</li>
        </ul>

    <?php if ((isset($_SESSION['USER_ID']))) {?>
        <a href='editTeam/<?php echo $_smarty_tpl->tpl_vars['team']->value->id_team;?>
' type='button' class='btn btn-warning ml-auto'>Editar</a>
    <?php ob_start();
}
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>


</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
