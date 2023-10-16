
<!--Muestra el equipo seleccionado individualmente, con mas detalles. Se vuelve a tomar la ID con un input hidden-->


{include file='templates/header.tpl'}



<div class="border m-4 position absolute top-50">
    <input type="hidden" name="id_Team" value="{$team->id_team}">
        
        <ul class="list-group">

            <li class="list-group-item list-group-item-light fs-5">Equipo:</li>
            <li class="list-group-item list-group-item-info fs-5">{$team->name_team}</li>
        
            <li class="list-group-item list-group-item-light fs-5">Liga: </li>
            <li class="list-group-item list-group-item-info fs-5"> {$team->league}</li>

            <li class="list-group-item list-group-item-light fs-5">Director tecnico: </li>
            <li class="list-group-item list-group-item-info fs-5"> {$team->technical_director}</li>
        
            <li class="list-group-item list-group-item-light fs-5">Cantidad de copas: </li>
            <li class="list-group-item list-group-item-info fs-5">{$team->cups}</li>
        </ul>

    {if isset($smarty.session.USER_ID)}
        <a href='editTeam/{$team->id_team}' type='button' class='btn btn-warning ml-auto'>Editar</a>
    {{/if}}

</div>

{include file='templates/footer.tpl'}