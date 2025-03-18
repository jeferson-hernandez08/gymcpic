<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/tipoUsuarioGym/view"><img src="/img/back.svg"></a>
        </div>
        <div class="create">
            <a href="/tipoUsuarioGym/new"><button>+</button></a>
        </div>
    </div>
    <div class="info">
        <?php
            if (empty($tiposUsuario)) {
                echo "<br>No se encuentran tipos de usuario en la base de datos";
            } else {
                foreach ($tiposUsuario as $key => $value) {
                    echo "<div class='record'>
                        <span>ID: $value->id - $value->nombre</span>
                        <div class='buttons'>
                            <a href='/tipoUsuarioGym/view/$value->id'> <button>Consultar</button> </a>
                            <a href='/tipoUsuarioGym/edit/$value->id'> <button>Editar</button> </a>
                            <a href='/tipoUsuarioGym/delete/$value->id'> <button>Eliminar</button> </a>
                        </div>
                    </div>";
                }
            }
        ?>
    </div>
</div>
    