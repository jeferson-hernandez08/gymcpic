<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/actividad/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <?php
            if($actividad && is_object($actividad)) {
                // echo "<pre>";
                // print_r($rol);
                // echo "<pre>";
                echo "<div class='record'>
                        <span>ID: $actividad->id - </span>
                        <span>Nombre: $actividad->nombre</span>
                        <span>Descripcion: $actividad->descripcion</span>
                        </div>";
            }


        ?>
    </div>
</div>
