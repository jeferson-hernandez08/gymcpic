<div class="data-container">
    <?php
        if($rol && is_object($rol)) {
            // echo "<pre>";
            // print_r($rol);
            // echo "<pre>";
            echo "<div class='record'>
                    <span>ID: $rol->id - </span>
                    <span>ID: $rol->nombre</span>
                    </div>";
        }


    ?>
</div>
    