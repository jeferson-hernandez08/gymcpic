<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/grupo/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <?php
            if ($grupo && is_object($grupo)) {
                // echo "<pre>";
                // print_r($grupo); // Para depuración
                // echo "<pre>";
                echo "<div class='record-one'>
                        <span>ID: $grupo->id - </span>
                        <span>Ficha: $grupo->ficha - </span>
                        <span>Cantidad de Aprendices: $grupo->cantAprendices - </span>
                        <span>Estado: $grupo->estado - </span>
                        <span>Fecha Inicio Lectiva: $grupo->fechaIniLectiva - </span>
                        <span>Fecha Fin Lectiva: $grupo->fechaFinLectiva - </span>
                        <span>Programa de Formación: $grupo->nombrePrograma</span>
                        </div>";
            } else {
                echo "<p>No se encontró información del grupo.</p>";
            }
        ?>
    </div>
</div>
    