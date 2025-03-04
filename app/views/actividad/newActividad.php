<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades</title>
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
           <form action="/actividad/create" method="post">    
                <div class="form-group">
                    <label for="txtNombre">Nombre del la actividad</label>
                    <input type="text" name="txtNombre" id="txtNombre" class="form-control">
                <div class="form-group">
                    <label for="txtDescripcion">Descripción de la actividad</label>
                    <input type="text" name="txtDescripcion" id="txtDescripcion" class="form-control">
                </div>
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