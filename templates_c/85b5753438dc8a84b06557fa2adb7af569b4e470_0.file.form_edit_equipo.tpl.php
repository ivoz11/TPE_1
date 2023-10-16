<?php
/* Smarty version 4.2.1, created on 2023-10-16 10:41:37
  from 'C:\xampp\htdocs\web2\TPE-2\templates\form_edit_equipo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652cf741e2f2d2_56313944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85b5753438dc8a84b06557fa2adb7af569b4e470' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-2\\templates\\form_edit_equipo.tpl',
      1 => 1697431073,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_652cf741e2f2d2_56313944 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form class="form-alta border m-4 position absolute top-50" action="editadoTeam" method="POST">
<input type="hidden" name="id_Team" value="<?php echo $_smarty_tpl->tpl_vars['team']->value->id_team;?>
">

<div class="form-group row margin-15px">
  <label for="team" class="col-sm-2 col-form-label"><b>Equipo:</b></label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="team" value="<?php echo $_smarty_tpl->tpl_vars['team']->value->name_team;?>
"required>
  </div>
</div>
<div class="form-group row margin-15px">
  <label for="league" class="col-sm-2 col-form-label"><b>Liga:</b></label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="league" value="<?php echo $_smarty_tpl->tpl_vars['team']->value->league;?>
" required>
  </div>
</div>

<div class="form-group row margin-15px">
  <label for="technical_director" class="col-sm-2 col-form-label"><b>Director tecnico:</b></label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="technical_director" value="<?php echo $_smarty_tpl->tpl_vars['team']->value->technical_director;?>
" required>
  </div>
</div>

<div class="form-group row margin-15px">
  <label for="cups" class="col-sm-2 col-form-label"><b>Copas:</b></label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="cups" value="<?php echo $_smarty_tpl->tpl_vars['team']->value->cups;?>
" required>
  </div>
</div>

<div class="form-group row margin-15px">
  <div class="col-sm-10  btn-sub-center">
    <button type="submit" class="btn btn-success">Editar Equipo</button>
  </div>
</div>
</form>

</div>


<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
