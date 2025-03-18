<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/programaFormacion/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <form action="/programaFormacion/create" method="post">
        <!-- Campo Nombre -->
        <div class="form-group">
            <label for="txtCodigo">Código del Programa de Formacion</label>
            <input type="text" name="txtCodigo" id="txtCodigo" class="form-control" required>
        </div>
        
        <!-- Campo Nombre del Programa de Formacion -->
        <div class="form-group">
            <label for="txtNombre">Nombre del Programa de Formacion</label>
            <input type="text" name="txtNombre" id="txtNombre" class="form-control" required>
        </div>

        <!-- Campo Id del Centro de Formacion -->
        <div class="form-group">
            <label for="txtFkIdCentroFormacion">Id del Centro de Formacion</label>
            <select name="txtFkIdCentroFormacion" id="txtFkIdCentroFormacion">
                <?php
                    if (isset($centros) && is_array($centros)) {
                        foreach ($centros as $key => $value) {
                            echo "<option value=".$value->id.">".$value->nombre."</option>";
                        }
                    } else {
                        echo "ERROR";
                    }
                ?>
            </select>
        </div>

        <!-- Botón de Guardar -->
        <div class="form-group">
            <button type="submit">Guardar</button>
        </div>
    </form>
</div>