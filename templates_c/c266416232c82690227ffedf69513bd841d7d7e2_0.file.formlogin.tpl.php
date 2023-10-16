<?php
/* Smarty version 4.2.1, created on 2023-10-16 12:29:39
  from 'C:\xampp\htdocs\web2\TPE-2\templates\formlogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652d1093df9141_99131649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c266416232c82690227ffedf69513bd841d7d7e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-2\\templates\\formlogin.tpl',
      1 => 1697451651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652d1093df9141_99131649 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!--Formulario que se utiliza para logearse y poder tener la funcionalidad de ABM, con un IF que si esta mal la contraseña se enviara un mensaje-->

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
