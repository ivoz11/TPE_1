<!--Formulario que se utiliza para insertar un jugador a la BD-->
<h3 class="display-5">Llene el formulario y agregue un jugador nuevo:</h3>
<form action='add' form method="POST" class="border m-10 position absolute top-50">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label class="form-label">Nombre</label>
                <input name="name" type="text" class="form-control"required>
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label class="form-label">Selecciona un equipo</label>
                <select name="id_Team" class="form-control">
             {foreach from=$teams item=$team}
                <option value={$team->id_team}> {$team->name_team} </option>
             {/foreach}
                    
                </select>
                
            </div>
        </div>
          
    </div>
     <div class="col-9">
            <div class="form-group">
                <label class="form-label">Apellido</label>
                <input name="lastname" type="text" class="form-control"required>
            </div>
        </div>
    <div class="form-group">
        <label class="form-label">Edad</label>
        <input name="age" class="form-control" rows="3"required>
    </div>
    <div class="form-group">
        <label class="form-label">Perfil</label>
        <input name="profile" class="form-control" rows="3"required>
    </div>
      <div class="form-group">
        <label class="form-label">Posicion</label>
        <input name="position" class="form-control" rows="3"required>
    </div>
    <div class="form-group">
        <label class="form-label">Cantidad de goles</label>
        <input name="goals" class="form-control" rows="3"required>
    </div>
    <div>
    {if isset($smarty.session.USER_ID)}
    <button type="submit" class="btn btn-success">Guardar</button>
    {{/if}}
    </div>
</form>