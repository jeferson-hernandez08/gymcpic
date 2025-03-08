<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tipo de Usuario</title>
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
            <form action="/tipoUsuarioGym/update" method="post">
                <!-- Campo ID (oculto) -->
                <div class="form-group">
                    <label for="txtId">ID del Tipo de Usuario</label>
                    <input type="text" readonly value="<?php echo $tipoUsuario->id ?>" name="txtId" id="txtId" class="form-control">
                </div>

                <!-- Campo Nombre del Tipo de Usuario -->
                <div class="form-group">
                    <label for="txtNombre">Nombre del Tipo de Usuario</label>
                    <input type="text" value="<?php echo $tipoUsuario->nombre ?>" name="txtNombre" id="txtNombre" class="form-control" required>
                </div>

                <!-- Botón de Guardar -->
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