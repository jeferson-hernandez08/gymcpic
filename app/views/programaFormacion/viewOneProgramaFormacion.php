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
                if($programa && is_object($programa)) {
                    // echo "<pre>";
                    // print_r($rol);
                    // echo "<pre>";
                    echo "<div class='record'>
                            <span>ID: $programa->id - </span>
                            <span>Codigo: $programa->codigo</span>
                            <span>Nombre: $programa->nombre</span>
                            <span>Centro: $programa->nombreCentro</span>
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