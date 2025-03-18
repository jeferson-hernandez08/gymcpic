<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/actividad/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/actividad/create" method="post">    
            <div class="form-group">
                <label for="txtNombre">Nombre del la actividad</label>
                <input type="text" name="txtNombre" id="txtNombre" class="form-control">
            <div class="form-group">
                <label for="txtDescripcion">Descripción de la actividad</label>
                <input type="text" name="txtDescripcion" id="txtDescripcion" class="form-control">
            </div>
            </div>
            <div class="form-group">
                <button type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>