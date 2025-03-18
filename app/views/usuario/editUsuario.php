<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/usuario/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
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
                <select name="txtTipoDocumento" id="txtTipoDocumento" class="form-control" required>
                    <option value="">Seleccione un Tipo de Documento</option>
                    <option value="CC" <?php echo $usuario->tipoDocumento == 'CC' ? 'selected' : ''; ?>>Cédula de Ciudadanía (CC)</option>
                    <option value="TI" <?php echo $usuario->tipoDocumento == 'TI' ? 'selected' : ''; ?>>Tarjeta de Identidad (TI)</option>
                </select>
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
                <select name="txtGenero" id="txtGenero" class="form-control" required>
                    <option value="">Seleccione un Género</option>
                    <option value="M" <?php echo $usuario->genero == 'M' ? 'selected' : ''; ?>>Masculino (M)</option>
                    <option value="F" <?php echo $usuario->genero == 'F' ? 'selected' : ''; ?>>Femenino (F)</option>
                    <option value="B" <?php echo $usuario->genero == 'B' ? 'selected' : ''; ?>>Binarie (B)</option>
                </select>
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
                    <?php foreach ($roles as $rol): ?>
                        <option value="<?php echo $rol->id; ?>" <?php echo $usuario->fkIdRol == $rol->id ? 'selected' : ''; ?>><?php echo $rol->nombre; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
    
            <!-- Campo Grupo -->
            <div class="form-group">
                <label for="txtFkIdGrupo">Grupo</label>
                <select name="txtFkIdGrupo" id="txtFkIdGrupo">
                    <option value=''>Selecciona un grupo</option>
                    <?php foreach ($grupos as $grupo): ?>
                        <option value="<?php echo $grupo->id; ?>" <?php echo $usuario->fkIdGrupo == $grupo->id ? 'selected' : ''; ?>><?php echo $grupo->ficha; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
    
            <!-- Campo Centro de Formación -->
            <div class="form-group">
                <label for="txtFkIdCentroFormacion">Centro de Formación</label>
                <select name="txtFkIdCentroFormacion" id="txtFkIdCentroFormacion">
                    <option value=''>Selecciona un centro de formación</option>
                    <?php foreach ($centros as $centro): ?>
                        <option value="<?php echo $centro->id; ?>" <?php echo $usuario->fkIdCentroFormacion == $centro->id ? 'selected' : ''; ?>><?php echo $centro->nombre; ?></option>
                    <?php endforeach; ?>
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
</div>
    