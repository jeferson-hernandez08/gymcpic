<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Programas de Formación</title>
    <link rel="stylesheet" href="/css/styles.css">
    <style>
        
    </style>
</head>
<body>
    <header>
        <h1>GYMCPIC - Gestión de Programas de Formación</h1>
    </header>
    <div class="container">
        <div class="data-container">
            <?php
                if (empty($programas)) {
                    echo "<br>No se encuentran programas de formación en la base de datos";
                } else {
                    foreach ($programas as $key => $value) {
                        echo "<div class='record'>
                            <span>ID: $value->id - $value->codigo - $value->nombre - $value->fkIdCentroFormacion</span>
                            <div class='buttons'>
                                <a href='/programaFormacion/view/$value->id'>Consultar</a>
                                <a href='/programaFormacion/edit/$value->id'>Editar</a>
                                <a href='/programaFormacion/delete/$value->id'>Eliminar</a>
                            </div>
                        </div>";
                    }
                }
            ?>
        </div>
    </div>
    <footer>
        <p>footer Programa de centroFormacion</p>
    </footer>
</body>
</html>
