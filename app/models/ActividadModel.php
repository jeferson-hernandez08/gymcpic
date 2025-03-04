<?php

namespace App\Models;
use PDO;
use PDOException;

require_once MAIN_APP_ROUTE."../models/BaseModel.php";

class ActividadModel extends BaseModel {
   public function __construct(
   ?int $id = null,
   ?string $nombre = null,
   ?string $descripcion = null,
   ) 
   {
       $this->table = "actividad";
       // Se llama al constructor del padre
       parent::__construct();
   }

   public function saveActividad($nom, $descrip) {
        try {
            $sql = "INSERT INTO $this->table (nombre, descripcion) VALUES (:nombre, :descripcion)";
            // 1. Se prepara la consulta
            $statement = $this->dbConnection->prepare($sql);
            $nombre = $this->nombre ?? '';
            $descripcion = $this->descripcion ?? '';
            // 2.BindParam para sanitizar los datos de entrada
            $statement -> bindParam('nombre', $nom, PDO::PARAM_STR);
            $statement -> bindParam('descripcion', $descrip, PDO::PARAM_STR);
            // 3. Ejecutar la consulta
            $result = $statement -> execute();
            return $result;
        } catch (PDOException $ex) {
            echo "Error al guardar rol> ".$ex->getMessage();
        }
    }

    public function getActividad($id) {
        try {
            $sql = "SELECT * FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            $result = $statement->fetChAll(PDO::FETCH_OBJ);
            //print_r($result);
            return $result[0];
        } catch (PDOException $ex) {
            echo "Error al obtener la actividad> ".$ex->getMessage();
        }
    }

    public function editActividad($id, $nombre, $descripcion) {
        try {
            $sql = "UPDATE $this->table SET nombre=:nombre, descripcion=:descripcion WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $statement->bindParam(":descripcion", $descripcion, PDO::PARAM_STR);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $result = $statement->execute();
            return $result;
        } catch (PDOException $ex) {
            echo "No se pudo editar la actividad".$ex->getMessage();
        }
    }

    public function deleteActividad($id){
        try {
            $sql = "DELETE FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $result = $statement->execute();
            return $result;
        } catch (PDOException $ex) {
            echo "No se pudo eliminar la actividad".$ex->getMessage();
        }
    }
}
