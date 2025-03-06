<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Grupo</title>
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
            <?php
                if ($grupo && is_object($grupo)) {
                    // echo "<pre>";
                    // print_r($grupo); // Para depuración
                    // echo "<pre>";
                    echo "<div class='record'>
                            <span>ID: $grupo->id - </span>
                            <span>Ficha: $grupo->ficha - </span>
                            <span>Cantidad de Aprendices: $grupo->cantAprendices - </span>
                            <span>Estado: $grupo->estado - </span>
                            <span>Fecha Inicio Lectiva: $grupo->fechaIniLectiva - </span>
                            <span>Fecha Fin Lectiva: $grupo->fechaFinLectiva - </span>
                            <span>Programa de Formación: $grupo->nombrePrograma</span>
                          </div>";
                } else {
                    echo "<p>No se encontró información del grupo.</p>";
                }
            ?>
        </div>
    </div>
    <footer>
        <p>Desarrollo por ADSO 2873711</p>
    </footer>
</body>
</html>