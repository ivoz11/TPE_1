{include file='templates/header.tpl'}

<!--Formulario que se utiliza para editar un equipo, con un Input en modo Hidden para tomar la ID de dicho equipo-->
<form class="form-alta border m-4 position absolute top-50" action="editadoTeam" method="POST">
<input type="hidden" name="id_Team" value="{$team->id_team}">

<div class="form-group row margin-15px">
  <label for="team" class="col-sm-2 col-form-label"><b>Equipo:</b></label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="team" value="{$team->name_team}"required>
  </div>
</div>
<div class="form-group row margin-15px">
  <label for="league" class="col-sm-2 col-form-label"><b>Liga:</b></label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="league" value="{$team->league}" required>
  </div>
</div>

<div class="form-group row margin-15px">
  <label for="technical_director" class="col-sm-2 col-form-label"><b>Director tecnico:</b></label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="technical_director" value="{$team->technical_director}" required>
  </div>
</div>

<div class="form-group row margin-15px">
  <label for="cups" class="col-sm-2 col-form-label"><b>Copas:</b></label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="cups" value="{$team->cups}" required>
  </div>
</div>

<div class="form-group row margin-15px">
  <div class="col-sm-10  btn-sub-center">
    <button type="submit" class="btn btn-success">Editar Equipo</button>
  </div>
</div>
</form>

</div>


{include file='templates/footer.tpl'}