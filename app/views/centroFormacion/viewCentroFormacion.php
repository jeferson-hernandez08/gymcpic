<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/centroFormacion/view"><img src="/img/back.svg"></a>
        </div>
        <div class="create">
            <a href="/centroFormacion/new"><button>+</button></a>
        </div>
    </div>
    <div class="info">
        <?php
        if (empty($centros)) {
            echo "<br>No se encuentran centros de formación en la base de datos";
        } else {
            foreach ($centros as $key => $value) {
                echo "<div class='record'>
                <span>ID: $value->id - $value->nombre</span>
                <div class='buttons'>
                    <a href='/centroFormacion/view/$value->id'>Consultar</a>
                    <a href='/centroFormacion/edit/$value->id'>Editar</a>
                    <a href='/centroFormacion/delete/$value->id'>Eliminar</a>
                </div>
                </div>";
            }
        }
        ?>
    </div>
</div>
