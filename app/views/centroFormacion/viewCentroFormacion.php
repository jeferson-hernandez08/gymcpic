<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Centros de Formación</title>
    <link rel="stylesheet" href="/css/styles.css">
    <style>
        
    </style>
</head>
<body>
    <header>
        <h1>GYMCPIC - Gestión de Centros de Formación</h1>
    </header>
    <div class="container">
        <div class="data-container">
            <?php
            if (empty($centros)) {
                echo "<br>No se encuentran centros de formación en la base de datos";
            } else {
                foreach ($centros as $key => $value) {
                    echo "<div class='record'>
                    <span>ID: $value->id - $value->nombre</span>
                    <div class='buttons'>
                        <a href='/centroFormacion/view/$value->id'>Consultar</a>
                        <a href='/centroFormacion/edit/$value->id'>Editar</a>
                        <a href='/centroFormacion/delete/$value->id'>Eliminar</a>
                    </div>
                    </div>";
                }
            }
            ?>
        </div>
    </div>
    <footer>
        <p>Footer centroFormacion</p>
    </footer>
</body>
</html>
