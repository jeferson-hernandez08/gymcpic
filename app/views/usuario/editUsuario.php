<div class="data-container">
    <form action="/usuario/update" method="post">
        <!-- Campo ID (oculto) -->
        <div class="form-group">
            <label for="txtId">Id del usuario</label>
            <input type="text" readonly value="<?php echo $usuario->id ?>" name="txtId" id="txtId" class="form-control">
        </div>

        <!-- Campo Nombre -->
        <div class="form-group">
            <label for="txtNombre">Nombre</label>
            <input type="text" value="<?php echo $usuario->nombre ?>" name="txtNombre" id="txtNombre" class="form-control">
        </div>

        <!-- Campo Tipo de Documento -->
        <div class="form-group">
            <label for="txtTipoDocumento">Tipo de Documento</label>
            <input type="text" value="<?php echo $usuario->tipoDocumento ?>" name="txtTipoDocumento" id="txtTipoDocumento" class="form-control">
        </div>

        <!-- Campo Documento -->
        <div class="form-group">
            <label for="txtDocumento">Documento</label>
            <input type="text" value="<?php echo $usuario->documento ?>" name="txtDocumento" id="txtDocumento" class="form-control">
        </div>

        <!-- Campo Fecha de Nacimiento -->
        <div class="form-group">
            <label for="txtFechaNacimiento">Fecha de Nacimiento</label>
            <input type="text" value="<?php echo $usuario->fechaNacimiento ?>" name="txtFechaNacimiento" id="txtFechaNacimiento" class="form-control">
        </div>

        <!-- Campo Email -->
        <div class="form-group">
            <label for="txtEmail">Email</label>
            <input type="text" value="<?php echo $usuario->email ?>" name="txtEmail" id="txtEmail" class="form-control">
        </div>

        <!-- Campo Género -->
        <div class="form-group">
            <label for="txtGenero">Género</label>
            <input type="text" value="<?php echo $usuario->genero ?>" name="txtGenero" id="txtGenero" class="form-control">
        </div>

        <!-- Campo Estado -->
        <div class="form-group">
            <label for="txtEstado">Estado</label>
            <input type="text" value="<?php echo $usuario->estado ?>" name="txtEstado" id="txtEstado" class="form-control">
        </div>

        <!-- Campo Teléfono -->
        <div class="form-group">
            <label for="txtTelefono">Teléfono</label>
            <input type="text" value="<?php echo $usuario->telefono ?>" name="txtTelefono" id="txtTelefono" class="form-control">
        </div>

        <!-- Campo EPS -->
        <div class="form-group">
            <label for="txtEps">EPS</label>
            <input type="text" value="<?php echo $usuario->eps ?>" name="txtEps" id="txtEps" class="form-control">
        </div>

        <!-- Campo Tipo de Sangre -->
        <div class="form-group">
            <label for="txtTipoSangre">Tipo de Sangre</label>
            <input type="text" value="<?php echo $usuario->tipoSangre ?>" name="txtTipoSangre" id="txtTipoSangre" class="form-control">
        </div>

        <!-- Campo Peso -->
        <div class="form-group">
            <label for="txtPeso">Peso</label>
            <input type="text" value="<?php echo $usuario->peso ?>" name="txtPeso" id="txtPeso" class="form-control">
        </div>

        <!-- Campo Estatura -->
        <div class="form-group">
            <label for="txtEstatura">Estatura</label>
            <input type="text" value="<?php echo $usuario->estatura ?>" name="txtEstatura" id="txtEstatura" class="form-control">
        </div>

        <!-- Campo Teléfono de Emergencia -->
        <div class="form-group">
            <label for="txtTelefonoEmergencia">Teléfono de Emergencia</label>
            <input type="text" value="<?php echo $usuario->telefonoEmergencia ?>" name="txtTelefonoEmergencia" id="txtTelefonoEmergencia" class="form-control">
        </div>

        <!-- Campo Contraseña -->
        <div class="form-group">
            <label for="txtPassword">Contraseña</label>
            <input type="password" value="<?php echo $usuario->password ?>" name="txtPassword" id="txtPassword" class="form-control">
        </div>

        <!-- Campo Observaciones -->
        <div class="form-group">
            <label for="txtObservaciones">Observaciones</label>
            <textarea name="txtObservaciones" id="txtObservaciones" class="form-control"><?php echo $usuario->observaciones ?></textarea>
        </div>

        <!-- Campo Rol -->
        <div class="form-group">
            <label for="txtFkIdRol">Rol</label>
            <select name="txtFkIdRol" id="txtFkIdRol">
                <option value=''>Selecciona un rol</option>
                <?php
                    if (isset($roles) && is_array($roles)) {
                        foreach ($roles as $key => $value) {
                            if ($usuario->FkIdRol == $value->id) {
                                echo "<option value=".$value->id." selected>".$value->nombre."</option>";
                            } else {
                                echo "<option value=".$value->id.">".$value->nombre."</option>";
                            }
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
            <select name="txtFkIdGrupo" id="txtFkIdGrupo">
                <option value=''>Selecciona un grupo</option>
                <?php
                    if (isset($grupos) && is_array($grupos)) {
                        foreach ($grupos as $grupo) {
                            if ($usuario->FkIdGrupo == $grupo->id) {
                                echo "<option value='{$grupo->id}' selected>{$grupo->ficha}</option>";
                            } else {
                                echo "<option value='{$grupo->id}'>{$grupo->ficha}</option>";
                            }
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
            <select name="txtFkIdCentroFormacion" id="txtFkIdCentroFormacion">
                <option value=''>Selecciona un centro de formación</option>
                <?php
                    if (isset($centros) && is_array($centros)) {
                        foreach ($centros as $centro) {
                            if ($usuario->FkIdCentroFormacion == $centro->id) {
                                echo "<option value='{$centro->id}' selected>{$centro->nombre}</option>";
                            } else {
                                echo "<option value='{$centro->id}'>{$centro->nombre}</option>";
                            }
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
            <select name="txtFkIdTipoUserGym" id="txtFkIdTipoUserGym">
                <option value=''>Selecciona un tipo de usuario gym</option>
                <?php
                    if (isset($tiposUsuariosGym) && is_array($tiposUsuariosGym)) {
                        foreach ($tiposUsuariosGym as $tipoUsuarioGym) {
                            if ($usuario->FkIdTipoUserGym == $tipoUsuarioGym->id) {
                                echo "<option value='{$tipoUsuarioGym->id}' selected>{$tipoUsuarioGym->nombre}</option>";
                            } else {
                                echo "<option value='{$tipoUsuarioGym->id}'>{$tipoUsuarioGym->nombre}</option>";
                            }
                        }
                    } else {
                        echo "ERROR";
                    }
                ?>
            </select>
        </div>

        <!-- Botón de Guardar -->
        <div class="form-group">
            <button type="submit">Editar</button>
        </div>
    </form>
</div>
    