<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/rol/view"><img src="/img/back.svg"></a>
        </div>
    </div>
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
    