<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Tipo de Usuario</title>
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
                if ($tipoUsuario && is_object($tipoUsuario)) {
                    echo "<div class='record'>
                            <span>ID: $tipoUsuario->id</span>
                            <span>Nombre: $tipoUsuario->nombre</span>
                          </div>";
                } else {
                    echo "<p>No se encontró el tipo de usuario.</p>";
                }
            ?>
        </div>
    </div>
    <footer>
        <p>Desarrollo por ADSO 2873711</p>
    </footer>
</body>
</html>