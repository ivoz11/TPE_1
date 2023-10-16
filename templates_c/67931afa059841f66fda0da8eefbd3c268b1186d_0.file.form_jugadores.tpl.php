<?php
/* Smarty version 4.2.1, created on 2023-10-16 12:40:19
  from 'C:\xampp\htdocs\web2\TPE-2\templates\form_jugadores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652d13139815f4_58589306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67931afa059841f66fda0da8eefbd3c268b1186d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-2\\templates\\form_jugadores.tpl',
      1 => 1697452766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652d13139815f4_58589306 (Smarty_Internal_Template $_smarty_tpl) {
?><!--Formulario que se utiliza para insertar un jugador a la BD-->
<h3 class="display-5">Llene el formulario y agregue un jugador nuevo:</h3>
<form action='add' form method="POST" class="border m-10 position absolute top-50">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label class="form-label">Nombre</label>
                <input name="name" type="text" class="form-control"required>
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label class="form-label">Selecciona un equipo</label>
                <select name="id_Team" class="form-control">
             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['teams']->value, 'team');
$_smarty_tpl->tpl_vars['team']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['team']->value) {
$_smarty_tpl->tpl_vars['team']->do_else = false;
?>
                <option value=<?php echo $_smarty_tpl->tpl_vars['team']->value->id_team;?>
> <?php echo $_smarty_tpl->tpl_vars['team']->value->name_team;?>
 </option>
             <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    
                </select>
                
            </div>
        </div>
          
    </div>
     <div class="col-9">
            <div class="form-group">
                <label class="form-label">Apellido</label>
                <input name="lastname" type="text" class="form-control"required>
            </div>
        </div>
    <div class="form-group">
        <label class="form-label">Edad</label>
        <input name="age" class="form-control" rows="3"required>
    </div>
    <div class="form-group">
        <label class="form-label">Perfil</label>
        <input name="profile" class="form-control" rows="3"required>
    </div>
      <div class="form-group">
        <label class="form-label">Posicion</label>
        <input name="position" class="form-control" rows="3"required>
    </div>
    <div class="form-group">
        <label class="form-label">Cantidad de goles</label>
        <input name="goals" class="form-control" rows="3"required>
    </div>
    <div>
    <?php if ((isset($_SESSION['USER_ID']))) {?>
    <button type="submit" class="btn btn-success">Guardar</button>
    <?php ob_start();
}
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>

    </div>
</form><?php }
}
