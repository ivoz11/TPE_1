<?php
/* Smarty version 4.2.1, created on 2023-10-15 23:24:20
  from 'C:\xampp\htdocs\web2\TPE\templates\mostrarJugador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652c5884a66b52_93821635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31418af9b03bd56c0d6ff0bd0054e28100d3fe71' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\mostrarJugador.tpl',
      1 => 1697405056,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_652c5884a66b52_93821635 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div class="border m-4 position absolute top-50">
  <div>
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['player']->value->id_player;?>
">
    <div>
        <h2>Nombre:</h2><li class="list-group-item list-group-item-success"><?php echo $_smarty_tpl->tpl_vars['player']->value->name_player;?>
</li>
    </div>
    <div>
        <h2>Apellido:</h2><li class="list-group-item list-group-item-success"><?php echo $_smarty_tpl->tpl_vars['player']->value->lastname;?>
</li>
    </div>
    <div>
        <h3>Edad:</h3> <li class="list-group-item list-group-item-primary"><?php echo $_smarty_tpl->tpl_vars['player']->value->age;?>
</li>
    </div>

    <div>
      <h3>Equipo: </h3><li class="list-group-item list-group-item-warning"><?php echo $_smarty_tpl->tpl_vars['player']->value->id_team;?>
</li>
    </div>

    <div>
      <h3>Perfil:</h3> <li class="list-group-item list-group-item-danger"><?php echo $_smarty_tpl->tpl_vars['player']->value->profile_player;?>
</li>
    </div>
    <div>
    <h3>Posicion:</h3><li class="list-group-item list-group-item-dark"> <?php echo $_smarty_tpl->tpl_vars['player']->value->position;?>
</li>
    </div>
     <div>
    <h3>Cantidad de goles:</h3><li class="list-group-item list-group-item-dark"> <?php echo $_smarty_tpl->tpl_vars['player']->value->goals;?>
</li>
    </div>
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
