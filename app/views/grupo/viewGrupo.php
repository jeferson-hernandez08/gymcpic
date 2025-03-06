<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Grupos</title>
    <link rel="stylesheet" href="/css/styles.css">
    <style>
        
    </style>
</head>
<body>
    <header>
        <h1>GYMCPIC - Gestión de Grupos</h1>
    </header>
    <div class="container">
        <div class="data-container">
            <?php
                if (empty($grupos)) {
                    echo "<br>No se encuentran grupos en la base de datos";
                } else {
                    foreach ($grupos as $key => $value) {
                        echo "<div class='record'>
                            <span>ID: $value->id - $value->ficha - $value->cantAprendices - $value->estado - $value->fechaIniLectiva - $value->fechaFinLectiva - $value->fkIdProgForm</span>
                            <div class='buttons'>
                                <a href='/grupo/view/$value->id'>Consultar</a>
                                <a href='/grupo/edit/$value->id'>Editar</a>
                                <a href='/grupo/delete/$value->id'>Eliminar</a>
                            </div>
                        </div>";
                    }
                }
            ?>
        </div>
    </div>
    <footer>
        <p>footer Grupo de ProgramaFormacion</p>
    </footer>
</body>
</html>