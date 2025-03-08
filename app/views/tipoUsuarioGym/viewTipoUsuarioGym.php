<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Tipos de Usuario</title>
    <link rel="stylesheet" href="/css/styles.css">
    <style>
        /* Estilos adicionales si los necesitas */
    </style>
</head>
<body>
    <header>
        <h1>GYMCPIC - Gestión de Tipos de Usuario</h1>
    </header>
    <div class="container">
        <div class="data-container">
            <?php
                if (empty($tiposUsuario)) {
                    echo "<br>No se encuentran tipos de usuario en la base de datos";
                } else {
                    foreach ($tiposUsuario as $key => $value) {
                        echo "<div class='record'>
                            <span>ID: $value->id - $value->nombre</span>
                            <div class='buttons'>
                                <a href='/tipoUsuarioGym/view/$value->id'>Consultar</a>
                                <a href='/tipoUsuarioGym/edit/$value->id'>Editar</a>
                                <a href='/tipoUsuarioGym/delete/$value->id'>Eliminar</a>
                            </div>
                        </div>";
                    }
                }
            ?>
        </div>
    </div>
    <footer>
        <p>footer Tipos de Usuario</p>
    </footer>
</body>
</html>