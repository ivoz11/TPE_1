

<!--Muestra los resultados de lo buscado por el usuario en los Input. En este caso el usuario ingresa el equipo o una aproximacion al equipo y lista todos los items(jugadores) que pertenecen a dicho equipo-->
{include file='templates/header.tpl'}

<div class="border m-4 position absolute top-50">
<h1 class="display-3 text-center"> El resultado de tu busqueda es: </h1>
       
    {foreach from=$results item=$rf}
        <div class="border m-4 position absolute top-50">
        <ul class="list-group">
            <li class="list-group-item"> <b> Nombre:  </b>{$rf->name_player} </li>
            <li class="list-group-item"> <b> Apellido: </b>{$rf->lastname} </li>
            <li class="list-group-item"> <b> Edad: </b>  {$rf->age } </li>
            <li class="list-group-item"> <b> Equipo: </b> {$rf->name_team}  </li>
            <li class="list-group-item"> <b> Perfil: </b> {$rf->profile_player} </li>
            <li class="list-group-item"> <b> Posicion: </b> {$rf->position}</li>
            <li class="list-group-item"> <b> Cantidad de goles: </b> {$rf->goals}</li>
        </ul>
        </div>
    {/foreach}

</div>
{include file='templates/footer.tpl'}