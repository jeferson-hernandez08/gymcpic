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
            <form action="/actividad/update" method="post">
                <div class="form-group">
                    <label for="txtId">Id del la actividad</label>
                    <input type="text" readonly value="<?php echo $actividad->id ?>"  name="txtId" id="txtId" class="form-control">
                </div>
                <div class="form-group">
                    <label for="txtNombre">Nombre del la actividad</label>
                    <input type="text" value="<?php echo $actividad->nombre ?>"  name="txtNombre" id="txtNombre" class="form-control">
                </div>
                <div class="form-group">
                    <label for="txtDescripcion">Descripcion del la actividad</label>
                    <input type="text" value="<?php echo $actividad->descripcion ?>"  name="txtDescripcion" id="txtDescripcion" class="form-control">
                </div>
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