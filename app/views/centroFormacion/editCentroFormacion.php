<div class="data-container">
    <form action="/centroFormacion/update" method="post">
        <div class="form-group">
            <label for="txtId">Id del centro de formacion</label>
            <input type="text" readonly value="<?php echo $centroFormacion->id ?>"  name="txtId" id="txtId" class="form-control">
        </div>
        <div class="form-group">
            <label for="txtNombre">Nombre del centro de formacion</label>
            <input type="text" value="<?php echo $centroFormacion->nombre ?>"  name="txtNombre" id="txtNombre" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit">Guardar</button>
        </div>
        
    </form>
</div>
    