<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/rol/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/rol/update" method="post">
            <div class="form-group">
                <label for="txtId">Id del rol</label>
                <input type="text" readonly value="<?php echo $rol->id ?>"  name="txtId" id="txtId" class="form-control">
            </div>
            <div class="form-group">
                <label for="txtNombre">Nombre del rol</label>
                <input type="text" value="<?php echo $rol->nombre ?>"  name="txtNombre" id="txtNombre" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit">Editar</button>
            </div>
        </form>
    </div>
</div>