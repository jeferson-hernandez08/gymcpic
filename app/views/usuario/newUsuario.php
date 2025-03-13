
<div class="data-container">
    <form action="/usuario/create" method="post">
        <!-- Campo Nombre -->
        <div class="form-group">
            <label for="txtNombre">Nombre</label>
            <input type="text" name="txtNombre" id="txtNombre" class="form-control" required>
        </div>

        <!-- Campo Tipo de Documento -->
        <div class="form-group">
            <label for="txtTipoDocumento">Tipo de Documento</label>
            <input type="text" name="txtTipoDocumento" id="txtTipoDocumento" class="form-control" required>
        </div>

        <!-- Campo Documento -->
        <div class="form-group">
            <label for="txtDocumento">Documento</label>
            <input type="text" name="txtDocumento" id="txtDocumento" class="form-control" required>
        </div>

        <!-- Campo Fecha de Nacimiento -->
        <div class="form-group">
            <label for="txtFechaNacimiento">Fecha de Nacimiento</label>
            <input type="date" name="txtFechaNacimiento" id="txtFechaNacimiento" class="form-control" required>
        </div>

        <!-- Campo Email -->
        <div class="form-group">
            <label for="txtEmail">Email</label>
            <input type="email" name="txtEmail" id="txtEmail" class="form-control" required>
        </div>

        <!-- Campo Género -->
        <div class="form-group">
            <label for="txtGenero">Género</label>
            <input type="text" name="txtGenero" id="txtGenero" class="form-control" required>
        </div>

        <!-- Campo Estado -->
        <div class="form-group">
            <label for="txtEstado">Estado</label>
            <input type="text" name="txtEstado" id="txtEstado" class="form-control" required>
        </div>

        <!-- Campo Teléfono -->
        <div class="form-group">
            <label for="txtTelefono">Teléfono</label>
            <input type="text" name="txtTelefono" id="txtTelefono" class="form-control" required>
        </div>

        <!-- Campo EPS -->
        <div class="form-group">
            <label for="txtEps">EPS</label>
            <input type="text" name="txtEps" id="txtEps" class="form-control" required>
        </div>

        <!-- Campo Tipo de Sangre -->
        <div class="form-group">
            <label for="txtTipoSangre">Tipo de Sangre</label>
            <input type="text" name="txtTipoSangre" id="txtTipoSangre" class="form-control" required>
        </div>

        <!-- Campo Peso -->
        <div class="form-group">
            <label for="txtPeso">Peso</label>
            <input type="text" step="0.01" name="txtPeso" id="txtPeso" class="form-control" required>
        </div>

        <!-- Campo Estatura -->
        <div class="form-group">
            <label for="txtEstatura">Estatura</label>
            <input type="text" name="txtEstatura" id="txtEstatura" class="form-control" required>
        </div>

        <!-- Campo Teléfono de Emergencia -->
        <div class="form-group">
            <label for="txtTelefonoEmergencia">Teléfono de Emergencia</label>
            <input type="text" name="txtTelefonoEmergencia" id="txtTelefonoEmergencia" class="form-control" required>
        </div>

        <!-- Campo Contraseña -->
        <div class="form-group">
            <label for="txtPassword">Contraseña</label>
            <input type="password" name="txtPassword" id="txtPassword" class="form-control" required>
        </div>

        <!-- Campo Observaciones -->
        <div class="form-group">
            <label for="txtObservaciones">Observaciones</label>
            <textarea name="txtObservaciones" id="txtObservaciones" class="form-control"></textarea>
        </div>

        <!-- Campo Rol -->
        <div class="form-group">
            <label for="txtFkIdRol">Rol</label>
            <select name="txtFkIdRol" id="txtFkIdRol" required>
                <option value=''>Selecciona un rol</option>
                <?php
                    if (isset($roles) && is_array($roles)) {
                        foreach ($roles as $rol) {
                            echo "<option value='{$rol->id}'>{$rol->nombre}</option>";
                        }
                    } else {
                        echo "ERROR";
                    }
                ?>
            </select>
        </div>

        <!-- Campo Grupo -->
        <div class="form-group">
            <label for="txtFkIdGrupo">Grupo</label>
            <select name="txtFkIdGrupo" id="txtFkIdGrupo" required>
                <option value=''>Selecciona un grupo</option>
                <?php
                    if (isset($grupos) && is_array($grupos)) {
                        foreach ($grupos as $grupo) {
                            echo "<option value='{$grupo->id}'>{$grupo->ficha}</option>";
                        }
                    } else {
                        echo "ERROR";
                    }
                ?>
            </select>
        </div>

        <!-- Campo Centro de Formación -->
        <div class="form-group">
            <label for="txtFkIdCentroFormacion">Centro de Formación</label>
            <select name="txtFkIdCentroFormacion" id="txtFkIdCentroFormacion" required>
                <option value=''>Selecciona un centro de formación</option>
                <?php
                    if (isset($centros) && is_array($centros)) {
                        foreach ($centros as $centro) {
                            echo "<option value='{$centro->id}'>{$centro->nombre}</option>";
                        }
                    } else {
                        echo "ERROR";
                    }
                ?>
            </select>
        </div>

        <!-- Campo Tipo de Usuario Gym -->
        <div class="form-group">
            <label for="txtFkIdTipoUserGym">Tipo de Usuario Gym</label>
            <select name="txtFkIdTipoUserGym" id="txtFkIdTipoUserGym" required>
                <option value=''>Selecciona un tipo de usuario gym</option>
                <?php
                    if (isset($tiposUsuariosGym) && is_array($tiposUsuariosGym)) {
                        foreach ($tiposUsuariosGym as $tiposUsuariosGym) {
                            echo "<option value='{$tiposUsuariosGym->id}'>{$tiposUsuariosGym->nombre}</option>";
                        }
                    } else {
                        echo "ERROR";
                    }
                ?>
            </select>
        </div>

        <!-- Botón de Guardar -->
        <div class="form-group">
            <button type="submit">Guardar</button>
        </div>
    </form>
</div>