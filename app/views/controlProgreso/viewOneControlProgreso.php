<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Control de Progreso</title>
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
                if ($controlProgreso && is_object($controlProgreso)) {
                    // echo "<pre>";
                    // print_r($controlProgreso);
                    // echo "<pre>";
                    echo "<div class='record'>
                            <span>ID: $controlProgreso->id - </span>
                            <span>Fecha de Realización: $controlProgreso->fechaRealizacion</span>
                            <span>Peso: $controlProgreso->peso</span>
                            <span>Cintura: $controlProgreso->cintura</span>
                            <span>Cadera: $controlProgreso->cadera</span>
                            <span>Muslo Derecho: $controlProgreso->musloDerecho</span>
                            <span>Muslo Izquierdo: $controlProgreso->musloIzquierdo</span>
                            <span>Brazo Derecho: $controlProgreso->brazoDerecho</span>
                            <span>Brazo Izquierdo: $controlProgreso->brazoIzquierdo</span>
                            <span>Antebrazo Derecho: $controlProgreso->antebrazoDerecho</span>
                            <span>Antebrazo Izquierdo: $controlProgreso->antebrazoIzquierdo</span>
                            <span>Pantorrilla Derecha: $controlProgreso->pantorrillaDerecha</span>
                            <span>Pantorrilla Izquierda: $controlProgreso->pantorrillaIzquierda</span>
                            <span>Examen Médico: $controlProgreso->examenMedico</span>
                            <span>Observaciones: $controlProgreso->observaciones</span>
                            <span>Fecha del Examen: $controlProgreso->fechaExamen</span>
                            <span>Usuario: $controlProgreso->nombreUsuario</span>
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