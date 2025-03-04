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
            <form action="/centroFormacion/update" method="post">
                <div class="form-group">
                    <label for="txtId">Id del centro de formacion</label>
                    <input type="text" readonly value="<?php echo $centroFormacion->id ?>"  name="txtId" id="txtId" class="form-control">
                </div>
                <div class="form-group">
                    <label for="txtNombre">Nombre del centro de formacion</label>
                    <input type="text" value="<?php echo $centroFormacion->nombre ?>"  name="txtNombre" id="txtNombre" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit">Guardar</button>
                </div>
                
            </form>
        </div>
    </div>
    <footer>
        <p>Desarrollo por ADSO 2873711</p>
    </footer>
    
</body>
</html>