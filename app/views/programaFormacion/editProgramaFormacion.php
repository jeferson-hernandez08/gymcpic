<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <form action="/programaFormacion/update" method="post">
                <div class="form-group">
                    <label for="txtId">Id del programa de formacion</label>
                    <input type="text" readonly value="<?php echo $programa->id ?>"  name="txtId" id="txtId" class="form-control">
                </div>
                <div class="form-group">
                    <label for="txtCodigo">Codigo del Programa de formacion</label>
                    <input type="text" value="<?php echo $programa->codigo ?>" name="txtCodigo" id="txtCodigo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="txtNombre">Nombre del programa de formacion</label>
                    <input type="text" value="<?php echo $programa->nombre ?>" name="txtNombre" id="txtNombre" class="form-control">
                </div>
                <div class="form-group">
                    <label for="txtFkIdCentroFormacion">ID del Centro</label>
                    <select name="txtFkIdCentroFormacion" id="txtFkIdCentroFormacion">
                    <option value=''>Selecciona un centro de formación</option>
                        <?php
                            if (isset($centros) && is_array($centros)) {
                                foreach ($centros as $key => $value) {
                                    if ($programa->FkIdCentroFormacion == $value->id) {
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