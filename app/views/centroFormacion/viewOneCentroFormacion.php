<div class="data-container">
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
    