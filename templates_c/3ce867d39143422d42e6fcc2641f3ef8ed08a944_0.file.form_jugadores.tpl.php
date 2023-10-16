<?php
/* Smarty version 4.2.1, created on 2023-10-16 08:21:11
  from 'C:\xampp\htdocs\web2\TPE\templates\form_jugadores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652cd6577c5677_71379275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ce867d39143422d42e6fcc2641f3ef8ed08a944' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\form_jugadores.tpl',
      1 => 1697437202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652cd6577c5677_71379275 (Smarty_Internal_Template $_smarty_tpl) {
?>

<form action='add' form method="POST" class="border m-4 position absolute top-50">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Nombre</label>
                <input name="name" type="text" class="form-control"required>
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label>Elegí equipo</label>
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
                <label>Apellido</label>
                <input name="lastname" type="text" class="form-control"required>
            </div>
        </div>
    <div class="form-group">
        <label>Edad</label>
        <input name="age" class="form-control" rows="3"required></textarea>
    </div>
    <div class="form-group">
        <label>Perfil</label>
        <input name="profile" class="form-control" rows="3"required></textarea>
    </div>
      <div class="form-group">
        <label>Posicion</label>
        <input name="position" class="form-control" rows="3"required></textarea>
    </div>
    <div class="form-group">
        <label>Cantidad de goles</label>
        <input name="goals" class="form-control" rows="3"required></textarea>
    </div>
    
    
    <?php if ((isset($_SESSION['USER_ID']))) {?>
    <button type="submit" class="btn btn-success">Guardar</button>
    <?php ob_start();
}
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

</form><?php }
}
