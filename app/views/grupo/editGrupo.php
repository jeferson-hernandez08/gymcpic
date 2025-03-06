<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Grupo</title>
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
            <form action="/grupo/update" method="post">
                <!-- Campo ID (oculto) -->
                <div class="form-group">
                    <label for="txtId">ID del Grupo</label>
                    <input type="text" readonly value="<?php echo $grupo->id ?>" name="txtId" id="txtId" class="form-control">
                </div>

                <!-- Campo Ficha -->
                <div class="form-group">
                    <label for="txtFicha">Ficha del Grupo</label>
                    <input type="text" value="<?php echo $grupo->ficha ?>" name="txtFicha" id="txtFicha" class="form-control" required>
                </div>

                <!-- Campo Cantidad de Aprendices -->
                <div class="form-group">
                    <label for="txtCantAprendices">Cantidad de Aprendices</label>
                    <input type="number" value="<?php echo $grupo->cantAprendices ?>" name="txtCantAprendices" id="txtCantAprendices" class="form-control" required>
                </div>

                <!-- Campo Estado -->
                <div class="form-group">
                    <label for="txtEstado">Estado del Grupo</label>
                    <select name="txtEstado" id="txtEstado" class="form-control" required>
                        <option value="Activo" <?= $grupo->estado == 'Activo' ? 'selected' : '' ?>>Activo</option>
                        <option value="Inactivo" <?= $grupo->estado == 'Inactivo' ? 'selected' : '' ?>>Inactivo</option>
                    </select>
                </div>

                <!-- Campo Fecha Inicio Lectiva -->
                <div class="form-group">
                    <label for="txtFechaIniLectiva">Fecha Inicio Lectiva</label>
                    <input type="date" value="<?php echo $grupo->fechaIniLectiva ?>" name="txtFechaIniLectiva" id="txtFechaIniLectiva" class="form-control" required>
                </div>

                <!-- Campo Fecha Fin Lectiva -->
                <div class="form-group">
                    <label for="txtFechaFinLectiva">Fecha Fin Lectiva</label>
                    <input type="date" value="<?php echo $grupo->fechaFinLectiva ?>" name="txtFechaFinLectiva" id="txtFechaFinLectiva" class="form-control" required>
                </div>

                <!-- Campo Programa de Formación -->
                <div class="form-group">
                    <label for="txtFkIdProgForm">Programa de Formación</label>
                    <select name="txtFkIdProgForm" id="txtFkIdProgForm" class="form-control" required>
                        <option value=''>Selecciona un programa de formación</option>
                        <?php
                            if (isset($programas) && is_array($programas)) {
                                foreach ($programas as $key => $value) {
                                    if ($grupo->FkIdProgForm == $value->id) {
                                        echo "<option value='".$value->id."' selected>".$value->nombre."</option>";
                                    } else {
                                        echo "<option value='".$value->id."'>".$value->nombre."</option>";
                                    }
                                }
                            } else {
                                echo "<option value=''>No hay programas disponibles</option>";
                            }
                        ?>
                    </select>
                </div>

                <!-- Botón de Guardar -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
    <footer>
        <p>Desarrollo por ADSO 2873711</p>
    </footer>
</body>
</html>