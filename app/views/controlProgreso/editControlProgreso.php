<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Control de Progreso</title>
    <link rel="stylesheet" href="/css/styles.css">
    <style>
    </style>
</head>
<body>
    <header>
        <h1>GPICGym - Software gestión gimnasio CPIC</h1>
    </header>
    <div class="container">
        <div class="data-container">
            <form action="/controlProgreso/update" method="post">
                <!-- Campo ID (oculto) -->
                <div class="form-group">
                    <label for="txtId">Id del control de progreso</label>
                    <input type="text" readonly value="<?php echo $controlProgreso->id ?>" name="txtId" id="txtId" class="form-control">
                </div>

                <!-- Campo Fecha de Realización -->
                <div class="form-group">
                    <label for="txtFechaRealizacion">Fecha de Realización</label>
                    <input type="date" value="<?php echo $controlProgreso->fechaRealizacion ?>" name="txtFechaRealizacion" id="txtFechaRealizacion" class="form-control">
                </div>

                <!-- Campo Peso -->
                <div class="form-group">
                    <label for="txtPeso">Peso</label>
                    <input type="text" value="<?php echo $controlProgreso->peso ?>" name="txtPeso" id="txtPeso" class="form-control">
                </div>

                <!-- Campo Cintura -->
                <div class="form-group">
                    <label for="txtCintura">Cintura</label>
                    <input type="text" value="<?php echo $controlProgreso->cintura ?>" name="txtCintura" id="txtCintura" class="form-control">
                </div>

                <!-- Campo Cadera -->
                <div class="form-group">
                    <label for="txtCadera">Cadera</label>
                    <input type="text" value="<?php echo $controlProgreso->cadera ?>" name="txtCadera" id="txtCadera" class="form-control">
                </div>

                <!-- Campo Muslo Derecho -->
                <div class="form-group">
                    <label for="txtMusloDerecho">Muslo Derecho</label>
                    <input type="text" value="<?php echo $controlProgreso->musloDerecho ?>" name="txtMusloDerecho" id="txtMusloDerecho" class="form-control">
                </div>

                <!-- Campo Muslo Izquierdo -->
                <div class="form-group">
                    <label for="txtMusloIzquierdo">Muslo Izquierdo</label>
                    <input type="text" value="<?php echo $controlProgreso->musloIzquierdo ?>" name="txtMusloIzquierdo" id="txtMusloIzquierdo" class="form-control">
                </div>

                <!-- Campo Brazo Derecho -->
                <div class="form-group">
                    <label for="txtBrazoDerecho">Brazo Derecho</label>
                    <input type="text" value="<?php echo $controlProgreso->brazoDerecho ?>" name="txtBrazoDerecho" id="txtBrazoDerecho" class="form-control">
                </div>

                <!-- Campo Brazo Izquierdo -->
                <div class="form-group">
                    <label for="txtBrazoIzquierdo">Brazo Izquierdo</label>
                    <input type="text" value="<?php echo $controlProgreso->brazoIzquierdo ?>" name="txtBrazoIzquierdo" id="txtBrazoIzquierdo" class="form-control">
                </div>

                <!-- Campo Antebrazo Derecho -->
                <div class="form-group">
                    <label for="txtAntebrazoDerecho">Antebrazo Derecho</label>
                    <input type="text" value="<?php echo $controlProgreso->antebrazoDerecho ?>" name="txtAntebrazoDerecho" id="txtAntebrazoDerecho" class="form-control">
                </div>

                <!-- Campo Antebrazo Izquierdo -->
                <div class="form-group">
                    <label for="txtAntebrazoIzquierdo">Antebrazo Izquierdo</label>
                    <input type="text" value="<?php echo $controlProgreso->antebrazoIzquierdo ?>" name="txtAntebrazoIzquierdo" id="txtAntebrazoIzquierdo" class="form-control">
                </div>

                <!-- Campo Pantorrilla Derecha -->
                <div class="form-group">
                    <label for="txtPantorrillaDerecha">Pantorrilla Derecha</label>
                    <input type="text" value="<?php echo $controlProgreso->pantorrillaDerecha ?>" name="txtPantorrillaDerecha" id="txtPantorrillaDerecha" class="form-control">
                </div>

                <!-- Campo Pantorrilla Izquierda -->
                <div class="form-group">
                    <label for="txtPantorrillaIzquierda">Pantorrilla Izquierda</label>
                    <input type="text" value="<?php echo $controlProgreso->pantorrillaIzquierda ?>" name="txtPantorrillaIzquierda" id="txtPantorrillaIzquierda" class="form-control">
                </div>

                <!-- Campo Examen Médico -->
                <div class="form-group">
                    <label for="txtExamenMedico">Examen Médico</label>
                    <input type="text" value="<?php echo $controlProgreso->examenMedico ?>" name="txtExamenMedico" id="txtExamenMedico" class="form-control">
                </div>

                <!-- Campo Observaciones -->
                <div class="form-group">
                    <label for="txtObservaciones">Observaciones</label>
                    <textarea name="txtObservaciones" id="txtObservaciones" class="form-control"><?php echo $controlProgreso->observaciones ?></textarea>
                </div>

                <!-- Campo Fecha del Examen -->
                <div class="form-group">
                    <label for="txtFechaExamen">Fecha del Examen</label>
                    <input type="date" value="<?php echo $controlProgreso->fechaExamen ?>" name="txtFechaExamen" id="txtFechaExamen" class="form-control">
                </div>

                <!-- Campo ID del Usuario -->
                <div class="form-group">
                    <label for="txtFkIdUsuario">ID del Usuario</label>
                    <select name="txtFkIdUsuario" id="txtFkIdUsuario">
                        <option value=''>Selecciona un usuario</option>
                        <?php
                            if (isset($usuarios) && is_array($usuarios)) {
                                foreach ($usuarios as $key => $value) {
                                    if ($controlProgreso->fkIdUsuario == $value->id) {
                                        echo "<option value=".$value->id." selected>".$value->nombre."</option>";
                                    }
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
                    <button type="submit">Editar</button>
                </div>
            </form>
        </div>
    </div>
    <footer>
        <p>Desarrollo por ADSO 2873711</p>
    </footer>
</body>
</html>