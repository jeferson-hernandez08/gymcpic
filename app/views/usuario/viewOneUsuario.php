<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Usuario</title>
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
                if($usuario && is_object($usuario)) {
                    // echo "<pre>";
                    // print_r($usuario);
                    // echo "<pre>";
                    echo "<div class='record'>
                            <span>ID: $usuario->id - </span>
                            <span>Nombre: $usuario->nombre</span>
                            <span>Tipo de Documento: $usuario->tipoDocumento</span>
                            <span>Documento: $usuario->documento</span>
                            <span>Fecha de Nacimiento: $usuario->fechaNacimiento</span>
                            <span>Email: $usuario->email</span>
                            <span>Género: $usuario->genero</span>
                            <span>Estado: $usuario->estado</span>
                            <span>Teléfono: $usuario->telefono</span>
                            <span>EPS: $usuario->eps</span>
                            <span>Tipo de Sangre: $usuario->tipoSangre</span>
                            <span>Peso: $usuario->peso</span>
                            <span>Estatura: $usuario->estatura</span>
                            <span>Teléfono de Emergencia: $usuario->telefonoEmergencia</span>
                            <span>Contraseña: ******** (almacenada de manera segura)</span>
                            <span>Observaciones: $usuario->observaciones</span>
                            <span>Rol: $usuario->nombreRol</span>
                            <span>Grupo: $usuario->nombreGrupo</span>
                            <span>Centro de Formación: $usuario->nombreCentro</span>
                            <span>Tipo de Usuario Gym: $usuario->nombreTipoUserGym</span>
                          </div>";
                }
            ?>
        </div>
    </div>
    <footer>
        <p>Desarrollo por ADSO 2873711</p>
    </footer>
</body>
</html>