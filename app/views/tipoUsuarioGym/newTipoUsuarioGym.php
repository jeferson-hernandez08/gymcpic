<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/tipoUsuarioGym/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/tipoUsuarioGym/create" method="post">
            <!-- Campo Nombre del Tipo de Usuario -->
            <div class="form-group">
                <label for="txtNombre">Nombre del Tipo de Usuario</label>
                <input type="text" name="txtNombre" id="txtNombre" class="form-control" required>
            </div>

            <!-- Botón de Guardar -->
            <div class="form-group">
                <button type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>
    