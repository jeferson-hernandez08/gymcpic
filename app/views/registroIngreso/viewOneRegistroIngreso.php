<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Registro de Ingreso</title>
    <link rel="stylesheet" href="/css/styles.css">
    <style>
        /* Estilos adicionales si los necesitas */
    </style>
</head>
<body>
    <header>
        <h1>GPICGym - Software gestión gimnasio CPIC</h1>
    </header>
    <div class="container">
        <div class="data-container">
            <?php
                if ($registro && is_object($registro)) {
                    // echo "<pre>";
                    // print_r($rol);
                    // echo "<pre>";
                    echo "<div class='record'>
                            <span>ID: $registro->id</span>
                            <span>Fecha de Ingreso: $registro->fechaIn</span>
                            <span>Fecha de Salida: $registro->fechaOut</span>
                            <span>Usuario: $registro->nombreUsuario</span>
                            <span>Actividad: $registro->nombreActividad</span>
                            <span>Trainer: $registro->nombreTrainer</span>
                          </div>";
                } else {
                    echo "<p>No se encontró el registro de ingreso.</p>";
                }
            ?>
        </div>
    </div>
    <footer>
        <p>Desarrollo por ADSO 2873711</p>
    </footer>
</body>
</html>