<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/centroFormacion/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <?php
        if($centroFormacion && is_object($centroFormacion)) {
            // echo "<pre>";
            // print_r($rol);
            // echo "<pre>";
            echo "<div class='record'>
                    <span>ID: $centroFormacion->id - </span>
                    <span>ID: $centroFormacion->nombre</span>
                    </div>";
        }


    ?>
</div>
    