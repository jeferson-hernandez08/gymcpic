<div class="data-container">
    <form action="/programaFormacion/update" method="post">
        <!-- Campo ID (oculto) -->
        <div class="form-group">
            <label for="txtId">Id del programa de formacion</label>
            <input type="text" readonly value="<?php echo $programa->id ?>"  name="txtId" id="txtId" class="form-control">
        </div>

        <!-- Campo Codigo del Programa de formacion -->
        <div class="form-group">
            <label for="txtCodigo">Codigo del Programa de formacion</label>
            <input type="text" value="<?php echo $programa->codigo ?>" name="txtCodigo" id="txtCodigo" class="form-control">
        </div>

        <!-- Campo Nombre del programa de formacion -->
        <div class="form-group">
            <label for="txtNombre">Nombre del programa de formacion</label>
            <input type="text" value="<?php echo $programa->nombre ?>" name="txtNombre" id="txtNombre" class="form-control">
        </div>

        <!-- Campo ID del Centro -->
        <div class="form-group">
            <label for="txtFkIdCentroFormacion">ID del Centro</label>
            <select name="txtFkIdCentroFormacion" id="txtFkIdCentroFormacion">
            <option value=''>Selecciona un centro de formación</option>
                <?php
                    if (isset($centros) && is_array($centros)) {
                        foreach ($centros as $key => $value) {
                            if ($programa->FkIdCentroFormacion == $value->id) {
                                echo "<option value=".$value->id." selected>".$value->nombre."</option>";
                            }
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
            <button type="submit">Editar</button>
        </div>
        
    </form>
</div>