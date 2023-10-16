
<!--Muestra el jugador seleccionado individualmente, con mas detalles. Se vuelve a tomar la ID con un input hidden-->

{include file='templates/header.tpl'}



<div class="border m-4 position absolute top-50">

    <input type="hidden" value="{$player->id_player}">
    
    <ul class="list-group">
    
      <li class="list-group-item list-group-item-light fs-5">Nombre:</li>
      <li class="list-group-item list-group-item-info fs-5">{$player->name_player}</li>
   
      <li class="list-group-item list-group-item-light fs-5">Apellido:</li>
      <li class="list-group-item list-group-item-info fs-5">{$player->lastname}</li>
  
      <li class="list-group-item list-group-item-light fs-5">Edad:</li>
      <li class="list-group-item list-group-item-info fs-5">{$player->age}</li>
    
      <li class="list-group-item list-group-item-light fs-5">Equipo: </li>
      <li class="list-group-item list-group-item-info fs-5">{$player->id_team}</li>
   
      <li class="list-group-item list-group-item-light fs-5">Perfil</li> 
      <li class="list-group-item list-group-item-info fs-5">{$player->profile_player}</li>
    
      <li class="list-group-item list-group-item-light fs-5">Posicion:</li>
      <li class="list-group-item list-group-item-info fs-5"> {$player->position}</li>
   
      <li class="list-group-item list-group-item-light fs-5">Cantidad de goles:</li>
      <li class="list-group-item list-group-item-info fs-5"> {$player->goals}</li>
    
    </ul>
    {if isset($smarty.session.USER_ID)}

    <a href='edit/{$player->id_player}' type='button' class='btn btn-warning ml-auto'>Editar</a>

  {{/if}}

</div>

{include file='templates/footer.tpl'}