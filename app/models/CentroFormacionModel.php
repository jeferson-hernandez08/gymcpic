<?php

namespace App\Models;
use PDO;
use PDOException;
require_once MAIN_APP_ROUTE."../models/BaseModel.php";

class CentroFormacionModel extends BaseModel {
    public function __construct(
        ?int $id = null,
        ?string $nombre = null
    ) 
    {
        $this->table = "centroformacion";
        // Se llama al constructor del padre
        parent::__construct();
    }

    public function saveCentroFormacion($nom) {
        try {
            $sql = "INSERT INTO $this->table (nombre) VALUES (:nombre)";
            // 1. Se prepara la consulta
            $statement = $this->dbConnection->prepare($sql);
            $nombre = $this->nombre ?? '';
            // 2.BindParam para sanitizar los datos de entrada
            $statement -> bindParam('nombre', $nom, PDO::PARAM_STR);
            // 3. Ejecutar la consulta
            $result = $statement -> execute();
            return $result;
        } catch (PDOException $ex) {
            echo "Error al guardar rol> ".$ex->getMessage();
        }
    }

    public function getCentroFormacion($id) {
        try {
            $sql = "SELECT * FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            $result = $statement->fetChAll(PDO::FETCH_OBJ);
            //print_r($result);
            return $result[0];
        } catch (PDOException $ex) {
            echo "Error al obtener el centro de formacion> ".$ex->getMessage();
        }
    }

    public function editCentroFormacion($id, $nombre) {
        try {
            $sql = "UPDATE $this->table SET nombre=:nombre WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $result = $statement->execute();
            return $result;
        } catch (PDOException $ex) {
            echo "No se pudo editar el centro de formacion".$ex->getMessage();
        }
    }

    public function deleteCentroFormacion($id){
        try {
            $sql = "DELETE FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $result = $statement->execute();
            return $result;
        } catch (PDOException $ex) {
            echo "No se pudo eliminar el centro de formacion".$ex->getMessage();
        }
    }

}
