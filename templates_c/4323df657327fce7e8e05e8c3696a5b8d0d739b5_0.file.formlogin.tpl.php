<?php
/* Smarty version 4.2.1, created on 2023-10-16 07:20:39
  from 'C:\xampp\htdocs\web2\TPE\templates\formlogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652cc8270ac478_29997828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4323df657327fce7e8e05e8c3696a5b8d0d739b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\formlogin.tpl',
      1 => 1697433446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652cc8270ac478_29997828 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="mt-5 w-25 mx-auto">
    <form method="POST" action="validate">
        <div class="form-group">
            <label for="user">Usuario</label>
            <input type="text" required class="form-control" id="user" name="user"required>
        </div>
        <div class="form-group">
            <label for="password">contrase&ntilde;a</label>
            <input type="password" required class="form-control" id="password" name="password"required>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
            <div class="alert alert-danger mt-3">
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div>
        <?php }?>
        <button type="submit" class="btn btn-primary mt-3">Entrar</button>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
