
<!--Seccion equipos que muestra el formulario para agregar y los botones para editar/borrar solo si estas logeado.-->


<h3 class="display-5"> Seccion Equipos: </h3>


<ul class="list-group">
{foreach from=$teams item=$team}
    
    <li class='list-group-item d-flex justify-content-between align-items-center'>
        
        <span>
        <b>Equipo: </b><a href="team/{$team->id_team}"> {$team->name_team}</a>
        
        <b>Liga: </b> {$team->league} 
        </span> 
    
        <div class="ml-auto">
        {if isset($smarty.session.USER_ID)}
            <a href='editTeam/{$team->id_team}' type='button' class='btn btn-warning ml-auto'>Editar</a>
            <a href='deleteTeam/{$team->id_team}' type='button' class='btn btn-dark ml-auto'>Borrar</a>
        {{/if}}
        </div>
 
</li>        
    {/foreach}
</ul>
{if isset($smarty.session.USER_ID)}
{include file='templates/form_equipo.tpl'}
{{/if}}


{include file='templates/footer.tpl'}