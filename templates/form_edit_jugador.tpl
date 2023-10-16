{include file='templates/header.tpl'}
<!--Formulario que se utiliza para editar un jugador, con un Input en modo Hidden para tomar la ID de dicho jugador-->

<form class="form-alta border m-4 position absolute top-50" action="editado" method="POST">
<input type="hidden" name="id_Player" value="{$player->id_player}">

<div class="form-group row margin-15px">
  <label for="name" class="col-sm-2 col-form-label"><b>Nombre:</b></label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="name" value="{$player->name_player}"required>
  </div>
</div>
<div class="form-group row margin-15px">
  <label for="lastname" class="col-sm-2 col-form-label"><b>Apellido:</b></label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="lastname" value="{$player->lastname}" required >
  </div>
</div>

<div class="form-group row margin-15px">
  <label for="age" class="col-sm-2 col-form-label"><b>Edad:</b></label>
  <div class="col-sm-10">
    <input type="number" class="form-control"  value="{$player->age}" name="age" required>
  </div>
</div>

<div class="form-group row margin-15px">
  <label for="id_Team" class="col-sm-2 col-form-label"><b>Equipo:</b></label>
  <div class="col-sm-10">
    <select class="form-select" name="id_Team">
    {foreach from=$teams item=$team}
      <option value={$team->id_team}> {$team->name_team} </option>
    {/foreach}
    </select>
  </div>
</div>

<div class="form-group row margin-15px">
  <label for="profile" class="col-sm-2 col-form-label"><b>Perfil:</b></label>
  <div class="col-sm-10">
    <input type="text" class="form-control"  value="{$player->profile_player}" name="profile" required>
  </div>
</div>

<div class="form-group row margin-15px">
  <label for="position" class="col-sm-2 col-form-label"><b>Posicion:</b></label>
  <div class="col-sm-10">
    <input type="text" class="form-control"  value="{$player->position}" name="position" required>
  </div>
</div>

<div class="form-group row margin-15px">
  <label for="goals" class="col-sm-2 col-form-label"><b>Goles:</b></label>
  <div class="col-sm-10">
    <input type="number" class="form-control"  value="{$player->goals}" name="goals" required>
  </div>
</div>

<div class="form-group row margin-15px">
  <div class="col-sm-10  btn-sub-center">
    <button type="submit" class="btn btn-success">Editar Jugador</button>
  </div>
</div>
</form>

</div>


{include file='templates/footer.tpl'}
