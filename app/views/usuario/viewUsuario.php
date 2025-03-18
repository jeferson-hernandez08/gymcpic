<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/usuario/view"><img src="/img/back.svg"></a>
        </div>
        <div class="create">
            <a href="/usuario/new"><button>+</button></a>
        </div>
    </div>
    <div class="info">
        <?php
            if (empty($usuarios)) {
                echo "<br>No se encuentran usuarios en la base de datos";
            } else {
                foreach ($usuarios as $key => $value) {
                    echo "<div class='record'>
                        <span>ID: $value->id - $value->nombre</span>    
                        <div class='buttons'>
                            <a href='/usuario/view/$value->id'>Consultar</a>
                            <a href='/usuario/edit/$value->id'>Editar</a>
                            <a href='/usuario/delete/$value->id'>Eliminar</a>
                        </div>
                    </div>";
                }
            }
        ?>
    </div>
</div>