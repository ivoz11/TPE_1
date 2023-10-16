<!--Formulario que se utiliza para insertar un equipo a la BD-->
<h3 class="display-5">Llene el formulario y agregue un equipo nuevo:</h3>
<form action="addTeam" method="POST" class="border m-10 position absolute top-50">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label class="form-label">Equipo</label>
                <input name="team" style="width: 250px" type="text" class="form-control" required>
            </div>
        </div>    
    <div class="form-group">
        <label class="form-label">Liga</label>
        <input name="league" class="form-control" style="width: 250px" rows="3" required ></input>
    </div>
    <div class="form-group">
        <label class="form-label">Director Tecnico</label>
        <input name="technical_director" class="form-control" style="width: 250px" rows="3" required ></input>
    </div>
    <div class="form-group">
        <label class="form-label">Copas</label>
        <input name="cups" class="form-control" style="width: 250px" rows="3" required ></input>
    </div>
    {if isset($smarty.session.USER_ID)}
    <button type="submit" class="btn btn-success" style="width: 100px; margin:8px;">Guardar</button>{{/if}}
</form>