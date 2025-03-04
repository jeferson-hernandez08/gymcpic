<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                if(empty($roles)) {
                    echo "<br>No se encuentran roles en la base de datos";
                } else {
                    foreach ($roles as $key => $value) {
                        echo "<div class='record'>
                            <span>ID: $value->id - $value->nombre</span>
                            <div class='buttons'>
                                <a href='/rol/view/$value->id'>Consultar</a>
                                <a href='/rol/edit/$value->id'>Editar</a>
                                <a href='/rol/delete/$value->id'>Eliminar</a>
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