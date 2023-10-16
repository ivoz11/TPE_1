<?php
/* Smarty version 4.2.1, created on 2023-10-16 06:35:18
  from 'C:\xampp\htdocs\web2\TPE\templates\mostrarEquipo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652cbd86903694_44775551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd80d2cb61f35aefbb0b349c42af74bb94ffcbdd0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\mostrarEquipo.tpl',
      1 => 1697405590,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_652cbd86903694_44775551 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div class="border m-4 position absolute top-50">
<div>
<input type="hidden" name="id_Team" value="<?php echo $_smarty_tpl->tpl_vars['team']->value->id_team;?>
">
    <div>
        <h2>Equipo:</h2><li class="list-group-item list-group-item-success"><?php echo $_smarty_tpl->tpl_vars['team']->value->name_team;?>
</li>
    </div>
    <div>
        <h3>Liga: </h3><li class="list-group-item list-group-item-dark"> <?php echo $_smarty_tpl->tpl_vars['team']->value->league;?>
</li>
    </div>
    <div>
        <h3>Director tecnico: </h3><li class="list-group-item list-group-item-dark"> <?php echo $_smarty_tpl->tpl_vars['team']->value->technical_director;?>
</li>
    </div>
    <div>
        <h3>Cantidad de copas: </h3><li class="list-group-item list-group-item-dark"><?php echo $_smarty_tpl->tpl_vars['team']->value->cups;?>
</li>
    </div>

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
