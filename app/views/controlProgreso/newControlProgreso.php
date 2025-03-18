<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/controlProgreso/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <form action="/controlProgreso/create" method="post">
        <!-- Campo Fecha de Realización -->
        <div class="form-group">
            <label for="txtFechaRealizacion">Fecha de Realización</label>
            <input type="date" name="txtFechaRealizacion" id="txtFechaRealizacion" class="form-control" required>
        </div>

        <!-- Campo Peso -->
        <div class="form-group">
            <label for="txtPeso">Peso</label>
            <input type="text" name="txtPeso" id="txtPeso" class="form-control" required>
        </div>

        <!-- Campo Cintura -->
        <div class="form-group">
            <label for="txtCintura">Cintura</label>
            <input type="text" name="txtCintura" id="txtCintura" class="form-control" required>
        </div>

        <!-- Campo Cadera -->
        <div class="form-group">
            <label for="txtCadera">Cadera</label>
            <input type="text" name="txtCadera" id="txtCadera" class="form-control" required>
        </div>

        <!-- Campo Muslo Derecho -->
        <div class="form-group">
            <label for="txtMusloDerecho">Muslo Derecho</label>
            <input type="text" name="txtMusloDerecho" id="txtMusloDerecho" class="form-control" required>
        </div>

        <!-- Campo Muslo Izquierdo -->
        <div class="form-group">
            <label for="txtMusloIzquierdo">Muslo Izquierdo</label>
            <input type="text" name="txtMusloIzquierdo" id="txtMusloIzquierdo" class="form-control" required>
        </div>

        <!-- Campo Brazo Derecho -->
        <div class="form-group">
            <label for="txtBrazoDerecho">Brazo Derecho</label>
            <input type="text" name="txtBrazoDerecho" id="txtBrazoDerecho" class="form-control" required>
        </div>

        <!-- Campo Brazo Izquierdo -->
        <div class="form-group">
            <label for="txtBrazoIzquierdo">Brazo Izquierdo</label>
            <input type="text" name="txtBrazoIzquierdo" id="txtBrazoIzquierdo" class="form-control" required>
        </div>

        <!-- Campo Antebrazo Derecho -->
        <div class="form-group">
            <label for="txtAntebrazoDerecho">Antebrazo Derecho</label>
            <input type="text" name="txtAntebrazoDerecho" id="txtAntebrazoDerecho" class="form-control" required>
        </div>

        <!-- Campo Antebrazo Izquierdo -->
        <div class="form-group">
            <label for="txtAntebrazoIzquierdo">Antebrazo Izquierdo</label>
            <input type="text" name="txtAntebrazoIzquierdo" id="txtAntebrazoIzquierdo" class="form-control" required>
        </div>

        <!-- Campo Pantorrilla Derecha -->
        <div class="form-group">
            <label for="txtPantorrillaDerecha">Pantorrilla Derecha</label>
            <input type="text" name="txtPantorrillaDerecha" id="txtPantorrillaDerecha" class="form-control" required>
        </div>

        <!-- Campo Pantorrilla Izquierda -->
        <div class="form-group">
            <label for="txtPantorrillaIzquierda">Pantorrilla Izquierda</label>
            <input type="text" name="txtPantorrillaIzquierda" id="txtPantorrillaIzquierda" class="form-control" required>
        </div>

        <!-- Campo Examen Médico -->
        <div class="form-group">
            <label for="txtExamenMedico">Examen Médico</label>
            <input type="text" name="txtExamenMedico" id="txtExamenMedico" class="form-control" required>
        </div>

        <!-- Campo Observaciones -->
        <div class="form-group">
            <label for="txtObservaciones">Observaciones</label>
            <textarea name="txtObservaciones" id="txtObservaciones" class="form-control" required></textarea>
        </div>

        <!-- Campo Fecha del Examen -->
        <div class="form-group">
            <label for="txtFechaExamen">Fecha del Examen</label>
            <input type="date" name="txtFechaExamen" id="txtFechaExamen" class="form-control" required>
        </div>

        <!-- Campo ID del Usuario -->
        <div class="form-group">
            <label for="txtFkIdUsuario">ID del Usuario</label>
            <select name="txtFkIdUsuario" id="txtFkIdUsuario" required>
                <option value=''>Selecciona un usuario</option>
                <?php
                    if (isset($usuarios) && is_array($usuarios)) {
                        foreach ($usuarios as $key => $value) {
                            echo "<option value=".$value->id.">".$value->nombre."</option>";
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
