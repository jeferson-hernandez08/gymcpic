<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Actividades</title>
    <link rel="stylesheet" href="/css/styles.css">
    <style>
        
    </style>
</head>
<body>
    <header>
        <h1>GYMCPIC - Gestión de Actividades</h1>
    </header>
    <div class="container">
        <div class="data-container">
            <?php
            if (empty($actividades)) {
                echo "<br>No se encuentran actividades en la base de datos";
            } else {
                foreach ($actividades as $key => $value) {
                    echo "<div class='record'>
                        <span>ID: $value->id - $value->nombre - $value->descripcion</span>
                        <div class='buttons'>
                            <a href='/actividad/view/$value->id'>Consultar</a>
                            <a href='/actividad/edit/$value->id'>Editar</a>
                            <a href='/actividad/delete/$value->id'>Eliminar</a>
                        </div>
                    </div>";
                }
            }
            ?>
        </div>
    </div>
    <footer>
        <p>Footer</p>
    </footer>
</body>
</html>
