<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/controlProgreso/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <?php
            if ($controlProgreso && is_object($controlProgreso)) {
                // echo "<pre>";
                // print_r($controlProgreso);
                // echo "<pre>";
                echo "<div class='record-one'>
                        <span>ID: $controlProgreso->id</span>
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
                        <span>Usuario: $controlProgreso->fkIdUsuario</span>
                        </div>";
            }
        ?>
    </div>
</div>
