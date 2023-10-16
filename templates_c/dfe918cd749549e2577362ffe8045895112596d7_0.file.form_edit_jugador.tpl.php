<?php
/* Smarty version 4.2.1, created on 2023-10-16 09:35:16
  from 'C:\xampp\htdocs\web2\TPE-2\templates\form_edit_jugador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652ce7b4115832_68283904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfe918cd749549e2577362ffe8045895112596d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-2\\templates\\form_edit_jugador.tpl',
      1 => 1697428197,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_652ce7b4115832_68283904 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form class="form-alta border m-4 position absolute top-50" action="editado" method="POST">
<input type="hidden" name="id_Player" value="<?php echo $_smarty_tpl->tpl_vars['player']->value->id_player;?>
">

<div class="form-group row margin-15px">
  <label for="name" class="col-sm-2 col-form-label"><b>Nombre:</b></label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['player']->value->name_player;?>
"required>
  </div>
</div>
<div class="form-group row margin-15px">
  <label for="lastname" class="col-sm-2 col-form-label"><b>Apellido:</b></label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="lastname" value="<?php echo $_smarty_tpl->tpl_vars['player']->value->lastname;?>
" required >
  </div>
</div>

<div class="form-group row margin-15px">
  <label for="age" class="col-sm-2 col-form-label"><b>Edad:</b></label>
  <div class="col-sm-10">
    <input type="number" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['player']->value->age;?>
" name="age" required>
  </div>
</div>

<div class="form-group row margin-15px">
  <label for="id_Team" class="col-sm-2 col-form-label"><b>Equipo:</b></label>
  <div class="col-sm-10">
    <select class="form-select" name="id_Team">
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

<div class="form-group row margin-15px">
  <label for="profile" class="col-sm-2 col-form-label"><b>Perfil:</b></label>
  <div class="col-sm-10">
    <input type="text" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['player']->value->profile_player;?>
" name="profile" required>
  </div>
</div>

<div class="form-group row margin-15px">
  <label for="position" class="col-sm-2 col-form-label"><b>Posicion:</b></label>
  <div class="col-sm-10">
    <input type="text" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['player']->value->position;?>
" name="position" required>
  </div>
</div>

<div class="form-group row margin-15px">
  <label for="goals" class="col-sm-2 col-form-label"><b>Goles:</b></label>
  <div class="col-sm-10">
    <input type="number" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['player']->value->goals;?>
" name="goals" required>
  </div>
</div>

<div class="form-group row margin-15px">
  <div class="col-sm-10  btn-sub-center">
    <button type="submit" class="btn btn-success">Editar Jugador</button>
  </div>
</div>
</form>

</div>


<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
