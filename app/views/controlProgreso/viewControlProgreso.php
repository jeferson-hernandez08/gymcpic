<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/controlProgreso/view"><img src="/img/back.svg"></a>
        </div>
        <div class="create">
            <a href="/controlProgreso/new"><button>+</button></a>
        </div>
    </div>
    <div class="info">
        <?php
            if (empty($controles)) {
                echo "<br>No se encuentran controles de progreso en la base de datos";
            } else {
                foreach ($controles as $key => $value) {
                    echo "<div class='record'>
                        <span>ID: $value->id - Fecha: $value->fechaRealizacion - Usuario: $value->fkIdUsuario</span>
                        <div class='buttons'>
                            <a href='/controlProgreso/view/$value->id'>Consultar</a>
                            <a href='/controlProgreso/edit/$value->id'>Editar</a>
                            <a href='/controlProgreso/delete/$value->id'>Eliminar</a>
                        </div>
                    </div>";
                }
            }
        ?>
    </div>
</div>
    