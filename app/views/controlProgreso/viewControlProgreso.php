<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Controles de Progreso</title>
    <link rel="stylesheet" href="/css/styles.css">
    <style>
    </style>
</head>
<body>
    <header>
        <h1>GYMCPIC - Gestión de Controles de Progreso</h1>
    </header>
    <div class="container">
        <div class="data-container">
            <?php
                if (empty($controles)) {
                    echo "<br>No se encuentran controles de progreso en la base de datos";
                } else {
                    foreach ($controles as $key => $value) {
                        echo "<div class='record'>
                            <span>ID: $value->id - Fecha: $value->fechaRealizacion - Usuario: $value->fkIdUsuario</span>
                            <div class='buttons'>
                                <a href='/controlProgreso/view/$value->id'>Consultar</a>
                                <a href='/controlProgreso/edit/$value->id'>Editar</a>
                                <a href='/controlProgreso/delete/$value->id'>Eliminar</a>
                            </div>
                        </div>";
                    }
                }
            ?>
        </div>
    </div>
    <footer>
        <p>Desarrollo por ADSO 2873711</p>
    </footer>
</body>
</html>