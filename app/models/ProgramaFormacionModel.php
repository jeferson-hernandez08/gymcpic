<?php

namespace App\Models;
use PDO;
use PDOException;

require_once MAIN_APP_ROUTE."../models/BaseModel.php";

class ProgramaFormacionModel extends BaseModel {
    public function __construct(
        ?int $id = null,
        ?string $nombre = null,
        ?string $fkIdCentroFormacion = null
    ) {
        $this->table = "programaformacion";
        // Se llama al constructor del padre
        parent::__construct();
    }

    public function saveProgramaFormacion($cod, $nom, $fkIdCentro) {
        try {
            $sql = "INSERT INTO $this->table (codigo, nombre, FkIdCentroFormacion) VALUES (:codigo, :nombre, :FkIdCentroFormacion)";
            // 1. Se prepara la consulta
            $statement = $this->dbConnection->prepare($sql);
            $codigo = $this->codigo ?? '';
            $nombre = $this->nombre ?? '';
            $fkIdCentroFormacion = $this->fkIdCentroFormacion ?? '';

            // 2.BindParam para sanitizar los datos de entrada
            $statement -> bindParam('codigo', $cod, PDO::PARAM_STR);
            $statement -> bindParam('nombre', $nom, PDO::PARAM_STR);
            $statement -> bindParam('FkIdCentroFormacion', $fkIdCentro, PDO::PARAM_INT);

            // 3. Ejecutar la consulta
            $result = $statement -> execute();
            return $result;
        } catch (PDOException $ex) {
            echo "Error al guardar el programa de formacion> ".$ex->getMessage();
        }
    }

    public function getProgramaFormacion($id) {
        try {
            $sql = "SELECT programaformacion.*,centroformacion.nombre AS nombreCentro 
            FROM programaformacion 
            INNER JOIN centroformacion 
            ON programaformacion.FkIdCentroFormacion = centroformacion.id 
            WHERE programaformacion.id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_OBJ);
            return $result[0]; 
        } catch (PDOException $ex) {
            echo "Error al obtener el Programa de formacion" . $ex->getMessage();
        }
    }

    public function editProgramaFormacion($id, $codigo, $nombre, $fkIdCentro) {
        try {
            $sql = "UPDATE $this->table SET codigo=:codigo, nombre=:nombre, FkIdCentroFormacion=:fkIdCentro WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->bindParam(":codigo", $codigo, PDO::PARAM_STR);
            $statement->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $statement->bindParam(":fkIdCentro", $fkIdCentro, PDO::PARAM_INT);
            $result = $statement->execute();
            return $result;
        } catch (PDOException $ex) {
            echo "No se pudo editar el Programa de formacion".$ex->getMessage();
        }
    }

    public function deleteProgramaformacion($id){
        try {
            $sql = "DELETE FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $result = $statement->execute();
            return $result;
        } catch (PDOException $ex) {
            echo "No se pudo eliminar el Programa de formacion".$ex->getMessage();
        }
    }
}
