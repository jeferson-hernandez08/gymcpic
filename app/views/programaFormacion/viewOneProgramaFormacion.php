<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/programaFormacion/view"><img src="/img/back.svg"></a>
        </div>
    </div>
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
    