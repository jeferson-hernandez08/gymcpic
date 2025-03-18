<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/registroIngreso/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <?php
        if ($registro && is_object($registro)) {
            // echo "<pre>";
            // print_r($rol);
            // echo "<pre>";
            echo "<div class='record'>
                    <span>ID: $registro->id</span>
                    <span>Fecha de Ingreso: $registro->fechaIn</span>
                    <span>Fecha de Salida: $registro->fechaOut</span>
                    <span>Usuario: $registro->fkIdUserGym</span>
                    <span>Actividad: $registro->fkIdActividad</span>
                    <span>Trainer: $registro->fkIdTrainer</span>
                    </div>";
        } else {
            echo "<p>No se encontró el registro de ingreso.</p>";
        }
    ?>
</div>