<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/registroIngreso/view"><img src="/img/back.svg"></a>
        </div>
        <div class="create">
            <a href="/registroIngreso/new"><button>+</button></a>
        </div>
    </div>
    <div class="info">
        <?php
            if (empty($registros)) {
                echo "<br>No se encuentran registros de ingreso en la base de datos";
            } else {
                foreach ($registros as $registro => $value) {
                    echo "<div class='record'>
                        <span>ID: $value->id - Fecha In: $value->fechaIn - Fecha Out: $value->fechaOut - Usuario: $value->fkIdUserGym - Actividad: $value->fkIdActividad - Trainer: $value->fkIdTrainer</span>
                        <div class='buttons'>
                            <a href='/registroIngreso/view/$value->id'>Consultar</a>
                            <a href='/registroIngreso/edit/$value->id'>Editar</a>
                            <a href='/registroIngreso/delete/$value->id'>Eliminar</a>
                        </div>
                    </div>";
                }
            }
        ?>
    </div>
</div>
    