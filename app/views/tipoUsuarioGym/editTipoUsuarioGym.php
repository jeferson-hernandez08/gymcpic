<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/tipoUsuarioGym/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/tipoUsuarioGym/update" method="post">
            <!-- Campo ID (oculto) -->
            <div class="form-group">
                <label for="txtId">ID del Tipo de Usuario</label>
                <input type="text" readonly value="<?php echo $tipoUsuario->id ?>" name="txtId" id="txtId" class="form-control">
            </div>

            <!-- Campo Nombre del Tipo de Usuario -->
            <div class="form-group">
                <label for="txtNombre">Nombre del Tipo de Usuario</label>
                <input type="text" value="<?php echo $tipoUsuario->nombre ?>" name="txtNombre" id="txtNombre" class="form-control" required>
            </div>

            <!-- Botón de Guardar -->
            <div class="form-group">
                <button type="submit">Editar</button>
            </div>
        </form>
    </div>
</div>
    