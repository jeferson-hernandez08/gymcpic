<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/registroIngreso/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <form action="/registroIngreso/update" method="post">
        <!-- Campo ID (oculto) -->
        <div class="form-group">
            <label for="txtId">ID del Registro de Ingreso</label>
            <input type="text" readonly value="<?php echo $registro->id ?>" name="txtId" id="txtId" class="form-control">
        </div>

        <!-- Campo Fecha de Ingreso -->
        <div class="form-group">
            <label for="txtFechaIn">Fecha de Ingreso</label>
            <input type="datetime-local" value="<?php echo date('Y-m-d\TH:i', strtotime($registro->fechaIn)); ?>" name="txtFechaIn" id="txtFechaIn" class="form-control" required>
        </div>

        <!-- Campo Fecha de Salida -->
        <div class="form-group">
            <label for="txtFechaOut">Fecha de Salida</label>
            <input type="datetime-local" value="<?php echo date('Y-m-d\TH:i', strtotime($registro->fechaOut)); ?>" name="txtFechaOut" id="txtFechaOut" class="form-control" required>
        </div>

        <!-- Campo Usuario -->
        <div class="form-group">
            <label for="txtFkIdUserGym">Usuario</label>
            <select name="txtFkIdUserGym" id="txtFkIdUserGym" class="form-control" required>
                <option value=''>Selecciona un usuario</option>
                <?php
                    if (isset($usuarios) && is_array($usuarios)) {
                        foreach ($usuarios as $usuario) {
                            $selected = ($registro->FkIdUserGym == $usuario->id) ? "selected" : "";
                            echo "<option value='{$usuario->id}' $selected>{$usuario->nombre}</option>";
                        }
                    } else {
                        echo "<option value=''>No hay usuarios disponibles</option>";
                    }
                ?>
            </select>
        </div>

        <!-- Campo Actividad -->
        <div class="form-group">
            <label for="txtFkIdActividad">Actividad</label>
            <select name="txtFkIdActividad" id="txtFkIdActividad" class="form-control" required>
                <option value=''>Selecciona una actividad</option>
                <?php
                    if (isset($actividades) && is_array($actividades)) {
                        foreach ($actividades as $actividad) {
                            $selected = ($registro->FkIdActividad == $actividad->id) ? "selected" : "";
                            echo "<option value='{$actividad->id}' $selected>{$actividad->nombre}</option>";
                        }
                    } else {
                        echo "<option value=''>No hay actividades disponibles</option>";
                    }
                ?>
            </select>
        </div>

        <!-- Campo Trainer -->
        <div class="form-group">
            <label for="txtFkIdTrainer">Trainer</label>
            <select name="txtFkIdTrainer" id="txtFkIdTrainer" class="form-control" required>
                <option value=''>Selecciona un Entrenador</option>
                <?php
                    if (isset($usuarios) && is_array($usuarios)) {
                        foreach ($usuarios as $usuario) {
                            $selected = ($registro->FkIdTrainer == $usuario->id) ? "selected" : "";
                            echo "<option value='{$usuario->id}' $selected>{$usuario->nombre}</option>";
                        }
                    } else {
                        echo "<option value=''>No hay trainers disponibles</option>";
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
    