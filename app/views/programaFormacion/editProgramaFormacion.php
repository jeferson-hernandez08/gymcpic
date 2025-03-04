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
            <form action="/programaFormacion/update" method="post">
                <div class="form-group">
                    <label for="">Id del centro de formacion</label>
                    <input type="text" readonly value="<?php echo $centroFormacion->id ?>"  name="txtId" id="txtId" class="form-control">
                </div>



                
                <div class="form-group">
                    <label for="">Id del centro</label>
                    <select name="txtIdCentro" id="txtIdCentro">
                        <?php
                        if($centros && is_array($centros)) {
                            foreach ($centros as $item) {
                                if($programa->FkIdCentroFormacion == $item->id) {
                                    echo "<option selected value='$item->id'>$item->$nombre</option>";
                                } else {

                                }
                                echo "<option value='$item->id'>$item->$nombre</option>";
                            }


                        }




                        ?>
                    </select>
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