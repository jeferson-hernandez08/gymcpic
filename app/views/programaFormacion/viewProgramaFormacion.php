
<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/programaFormacion/view"><img src="/img/back.svg"></a>
        </div>
        <div class="create">
            <a href="/programaFormacion/new"><button>+</button></a>
        </div>
    </div>
    <div class="info">
        <?php
            if (empty($programas)) {
                echo "<br>No se encuentran programas de formación en la base de datos";
            } else {
                foreach ($programas as $key => $value) {
                    echo "<div class='record'>
                        <span>ID: $value->id - $value->codigo - $value->nombre - $value->FkIdCentroFormacion</span>
                        <div class='buttons'>
                            <a href='/programaFormacion/view/$value->id'>Consultar</a>
                            <a href='/programaFormacion/edit/$value->id'>Editar</a>
                            <a href='/programaFormacion/delete/$value->id'>Eliminar</a>
                        </div>
                    </div>";
                }
            }
        ?>
    </div>
</div>
  
