<!--Seccion jugadores que muestra el formulario para agregar informacion y los botones agregar/editar/borrar solo si estas logeado.-->


{include file='templates/header.tpl'}
<div>
<h2 class="display-5" id="asd" style="text-align: right">Jugadores en actividad</h2>
</div>

<h3 class="display-5"> Seccion Jugadores: </h3>


<ul class="list-group">
{foreach from=$players item=$player}
    
   <li class='list-group-item d-flex justify-content-between align-items-center'>
            <span>
             <b>Jugador: </b><a href="player/{$player->id_player}"> {$player->name_player} {$player->lastname}</a>
             
             <b>Equipo: </b>{$player->name_team}  
             </span> 
            
             <div class="ml-auto">
             {if isset($smarty.session.USER_ID)}
             <a href='edit/{$player->id_player}' type='button' class='btn btn-warning ml-auto'>Editar</a>
             <a href='delete/{$player->id_player}' type='button' class='btn btn-dark ml-auto'>Borrar</a>
            {{/if}}
             </div>
          
        </li>
    {/foreach}

</ul>
{if isset($smarty.session.USER_ID)}
{include file='templates/form_jugadores.tpl'}
{{/if}}
{include file='templates/form_buscador.tpl'}
