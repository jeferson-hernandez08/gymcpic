<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Registros de Ingreso</title>
    <link rel="stylesheet" href="/css/styles.css">
    <style>
        /* Estilos adicionales si los necesitas */
    </style>
</head>
<body>
    <header>
        <h1>GYMCPIC - Gestión de Registros de Ingreso</h1>
    </header>
    <div class="container">
        <div class="data-container">
            <?php
                if (empty($registros)) {
                    echo "<br>No se encuentran registros de ingreso en la base de datos";
                } else {
                    foreach ($registros as $registro => $value) {
                        echo "<div class='record'>
                            <span>ID: $value->id - Fecha In: $value->fechaIn - Fecha Out: $value->fechaOut - Usuario: $value->nombreUsuario - Actividad: $value->nombreActividad - Trainer: $value->nombreTrainer</span>
                            <div class='buttons'>
                                <a href='/registroIngreso/view/$value->id'>Consultar</a>
                                <a href='/registroIngreso/edit/$value->id'>Editar</a>
                                <a href='/registroIngreso/delete/$value->id'>Eliminar</a>
                            </div>
                        </div>";
                    }
                }
            ?>
        </div>
    </div>
    <footer>
        <p>footer Registro de Ingreso</p>
    </footer>
</body>
</html>