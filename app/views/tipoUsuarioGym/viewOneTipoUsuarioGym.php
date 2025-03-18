<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/tipoUsuarioGym/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <?php
            if ($tipoUsuario && is_object($tipoUsuario)) {
                echo "<div class='record-one'>
                        <span>ID: $tipoUsuario->id</span>
                        <span>Nombre: $tipoUsuario->nombre</span>
                        </div>";
            } else {
                echo "<p>No se encontró el tipo de usuario.</p>";
            }
        ?>
    </div>
</div>
    