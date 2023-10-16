<?php
/* Smarty version 4.2.1, created on 2023-10-16 12:40:19
  from 'C:\xampp\htdocs\web2\TPE-2\templates\form_equipo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652d1313bdceb1_20552367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc03911a7fd61a8b03e176c08282ff1a53bb7e03' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-2\\templates\\form_equipo.tpl',
      1 => 1697452817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652d1313bdceb1_20552367 (Smarty_Internal_Template $_smarty_tpl) {
?><!--Formulario que se utiliza para insertar un equipo a la BD-->
<h3 class="display-5">Llene el formulario y agregue un equipo nuevo:</h3>
<form action="addTeam" method="POST" class="border m-10 position absolute top-50">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label class="form-label">Equipo</label>
                <input name="team" style="width: 250px" type="text" class="form-control" required>
            </div>
        </div>    
    <div class="form-group">
        <label class="form-label">Liga</label>
        <input name="league" class="form-control" style="width: 250px" rows="3" required ></input>
    </div>
    <div class="form-group">
        <label class="form-label">Director Tecnico</label>
        <input name="technical_director" class="form-control" style="width: 250px" rows="3" required ></input>
    </div>
    <div class="form-group">
        <label class="form-label">Copas</label>
        <input name="cups" class="form-control" style="width: 250px" rows="3" required ></input>
    </div>
    <?php if ((isset($_SESSION['USER_ID']))) {?>
    <button type="submit" class="btn btn-success" style="width: 100px; margin:8px;">Guardar</button><?php ob_start();
}
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>

</form><?php }
}
