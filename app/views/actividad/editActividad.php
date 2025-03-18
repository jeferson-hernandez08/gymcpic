<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/actividad/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <form action="/actividad/update" method="post">
        <div class="form-group">
            <label for="txtId">Id del la actividad</label>
            <input type="text" readonly value="<?php echo $actividad->id ?>"  name="txtId" id="txtId" class="form-control">
        </div>
        <div class="form-group">
            <label for="txtNombre">Nombre del la actividad</label>
            <input type="text" value="<?php echo $actividad->nombre ?>"  name="txtNombre" id="txtNombre" class="form-control">
        </div>
        <div class="form-group">
            <label for="txtDescripcion">Descripcion del la actividad</label>
            <input type="text" value="<?php echo $actividad->descripcion ?>"  name="txtDescripcion" id="txtDescripcion" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit">Editar</button>
        </div>
        
    </form>
</div>
   