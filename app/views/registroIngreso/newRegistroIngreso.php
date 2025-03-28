<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/registroIngreso/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/registroIngreso/create" method="post">
            <!-- Campo Fecha de Ingreso -->
            <div class="form-group">
                <label for="txtFechaIn">Fecha de Ingreso</label>
                <input type="datetime-local" name="txtFechaIn" id="txtFechaIn" class="form-control" required>
            </div>

            <!-- Campo Fecha de Salida -->
            <div class="form-group">
                <label for="txtFechaOut">Fecha de Salida</label>
                <input type="datetime-local" name="txtFechaOut" id="txtFechaOut" class="form-control" required>
            </div>

            <!-- Campo Usuario -->
            <div class="form-group">
                <label for="txtFkIdUserGym">Usuario</label>
                <select name="txtFkIdUserGym" id="txtFkIdUserGym" class="form-control" required>
                <option value="">Seleccione un Usuario</option>
                    <?php
                        if (isset($usuarios) && is_array($usuarios)) {
                            foreach ($usuarios as $key => $value) {
                                echo "<option value=".$value->id.">".$value->nombre."</option>";
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
                    <option value="">Seleccione Actividad</option>
                    <?php
                        if (isset($actividades) && is_array($actividades)) {     
                            foreach ($actividades as $actividad) {             // Es loo mismo que $key => $value VERIFICAR
                                echo "<option value='{$actividad->id}'>{$actividad->nombre}</option>";
                            }
                        } else {
                            echo "<option value=''>No hay actividades disponibles</option>";
                        }
                    ?>
                </select>
            </div>

            <!-- Campo Trainer -->
            <div class="form-group">
                <label for="txtFkIdTrainer">Entrenador</label>
                <select name="txtFkIdTrainer" id="txtFkIdTrainer" class="form-control" required>
                    <option value="">Seleccione un Entrenador</option>
                    <?php
                        if (isset($usuarios) && is_array($usuarios)) {
                            foreach ($usuarios as $usuario) {
                                echo "<option value='{$usuario->id}'>{$usuario->nombre}</option>";
                            }
                        } else {
                            echo "<option value=''>No hay trainers disponibles</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>