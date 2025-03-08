<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Programa de Formacion</title>
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
            <form action="/programaFormacion/create" method="post">
                <!-- Campo Nombre -->
                <div class="form-group">
                    <label for="txtCodigo">Código del Programa de Formacion</label>
                    <input type="text" name="txtCodigo" id="txtCodigo" class="form-control" required>
                </div>
                
                <!-- Campo Nombre del Programa de Formacion -->
                <div class="form-group">
                    <label for="txtNombre">Nombre del Programa de Formacion</label>
                    <input type="text" name="txtNombre" id="txtNombre" class="form-control" required>
                </div>

                <!-- Campo Id del Centro de Formacion -->
                <div class="form-group">
                    <label for="txtFkIdCentroFormacion">Id del Centro de Formacion</label>
                    <select name="txtFkIdCentroFormacion" id="txtFkIdCentroFormacion">
                        <?php
                            if (isset($centros) && is_array($centros)) {
                                foreach ($centros as $key => $value) {
                                    echo "<option value=".$value->id.">".$value->nombre."</option>";
                                }
                            } else {
                                echo "ERROR";
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
    <footer>
        <p>Desarrollo por ADSO 2873711</p>
    </footer>
    
</body>
</html>