{include file='templates/header.tpl'}
<!--Mensaje de error por si queres eliminar un equipo utilizado en la tabla principal-->
<div class="position absolute top-50">
    <h1 class="list-group-item list-group-item-danger" >El equipo seleccionado no se puede eliminar por que esta siendo utilizado en la otra tabla, primero elimine los item que les correponden a dicho Equipo y vuelva a Intentarlo.</h1>
    <a href="home">Volver al inicio</a>
</div>

{include file='templates/footer.tpl'}