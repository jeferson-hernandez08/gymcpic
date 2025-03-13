<div class="data-container">
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
    