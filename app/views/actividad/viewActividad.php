<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/actividad/view"><img src="/img/back.svg"></a>
        </div>
        <div class="create">
            <a href="/actividad/new"><button>+</button></a>
        </div>
    </div>
    <div class="info">
        <?php
        if (empty($actividades)) {
            echo "<br>No se encuentran actividades en la base de datos";
        } else {
            foreach ($actividades as $key => $value) {
                echo "<div class='record'>
                    <span>ID: $value->id - $value->nombre - $value->descripcion</span>
                    <div class='buttons'>
                        <a href='/actividad/view/$value->id'>Consultar</a>
                        <a href='/actividad/edit/$value->id'>Editar</a>
                        <a href='/actividad/delete/$value->id'>Eliminar</a>
                    </div>
                </div>";
            }
        }
        ?>
    </div>
</div>
   
