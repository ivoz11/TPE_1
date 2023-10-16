<?php
/* Smarty version 4.2.1, created on 2023-10-16 07:47:33
  from 'C:\xampp\htdocs\web2\TPE\templates\form_equipo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652cce7599bfe7_29942889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b38bfde2815c5529a4940e0f9a101122a35d2701' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\form_equipo.tpl',
      1 => 1697434992,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652cce7599bfe7_29942889 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="addTeam" method="POST" class="my-3">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Equipo</label>
                <input name="team" style="width: 250px" type="text" class="form-control" required>
            </div>
        </div>
    <div class="form-group">
        <label>Liga</label>
        <input name="league" class="form-control" style="width: 250px" rows="3" required ></input>
    </div>
    <div class="form-group">
        <label>Director Tecnico</label>
        <input name="technical_director" class="form-control" style="width: 250px" rows="3" required ></input>
    </div>
    <div class="form-group">
        <label>Copas</label>
        <input name="cups" class="form-control" style="width: 250px" rows="3" required ></input>
    </div>
    <?php if ((isset($_SESSION['USER_ID']))) {?>
    <button type="submit" class="btn btn-success" style="width: 100px; margin:8px;">Guardar</button><?php ob_start();
}
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

</form><?php }
}
