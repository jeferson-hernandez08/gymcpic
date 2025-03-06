<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Grupo</title>
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
            <form action="/grupo/create" method="post">
                <!-- Campo Ficha -->
                <div class="form-group">
                    <label for="txtFicha">Ficha del Grupo</label>
                    <input type="text" name="txtFicha" id="txtFicha" class="form-control" required>
                </div>

                <!-- Campo Cantidad de Aprendices -->
                <div class="form-group">
                    <label for="txtCantAprendices">Cantidad de Aprendices</label>
                    <input type="number" name="txtCantAprendices" id="txtCantAprendices" class="form-control" required>
                </div>

                <!-- Campo Estado -->
                <div class="form-group">
                    <label for="txtEstado">Estado del Grupo</label>
                    <select name="txtEstado" id="txtEstado" class="form-control" required>
                        <option value="Activo">Activo</option>
                        <option value="Inactivo">Inactivo</option>
                    </select>
                </div>

                <!-- Campo Fecha Inicio Lectiva -->
                <div class="form-group">
                    <label for="txtFechaIniLectiva">Fecha Inicio Lectiva</label>
                    <input type="date" name="txtFechaIniLectiva" id="txtFechaIniLectiva" class="form-control" required>
                </div>

                <!-- Campo Fecha Fin Lectiva -->
                <div class="form-group">
                    <label for="txtFechaFinLectiva">Fecha Fin Lectiva</label>
                    <input type="date" name="txtFechaFinLectiva" id="txtFechaFinLectiva" class="form-control" required>
                </div>

                <!-- Campo Programa de Formación -->
                <div class="form-group">
                    <label for="txtFkIdProgForm">Programa de Formación</label>
                    <select name="txtFkIdProgForm" id="txtFkIdProgForm" class="form-control" required>
                        <?php
                            if (isset($programas) && is_array($programas)) {
                                foreach ($programas as $key => $value) {
                                    echo "<option value='".$value->id."'>".$value->nombre."</option>";
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