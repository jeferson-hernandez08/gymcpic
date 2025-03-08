<?php

namespace App\Models;
use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . "../models/BaseModel.php";

class TipoUsuarioGymModel extends BaseModel {
    public function __construct(
        ?int $id = null,
        ?string $nombre = null
    ) {
        $this->table = "tipousuariogym";     // Nombre de la tabla en la base de datos
        // Se llama al constructor del padre
        parent::__construct();
    }

    /**
     * Guarda un nuevo tipo de usuario en la base de datos.
     *
     * param string $nombre Nombre del tipo de usuario.
     * return bool Retorna true si la operación fue exitosa, false en caso contrario.
     */
    public function saveTipoUsuarioGym($nombre) {
        try {
            $sql = "INSERT INTO $this->table (nombre) VALUES (:nombre)";
            // 1. Se prepara la consulta
            $statement = $this->dbConnection->prepare($sql);

            // 2. BindParam para sanitizar los datos de entrada
            $statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);

            // 3. Ejecutar la consulta
            $result = $statement->execute();
            return $result;
        } catch (PDOException $ex) {
            echo "Error al guardar el tipo de usuario: " . $ex->getMessage();
        }
    }

    /**
     * Obtiene un tipo de usuario por su ID.
     *
     * param int $id ID del tipo de usuario.
     * return object Retorna un objeto con la información del tipo de usuario.
     */
    public function getTipoUsuarioGym($id) {
        try {
            $sql = "SELECT * FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_OBJ);
            return $result[0]; // Retorna el primer resultado
        } catch (PDOException $ex) {
            echo "Error al obtener el tipo de usuario: " . $ex->getMessage();
        }
    }

    /**
     * Edita un tipo de usuario existente en la base de datos.
     *
     * param int $id ID del tipo de usuario a editar.
     * param string $nombre Nuevo nombre del tipo de usuario.
     * return bool Retorna true si la operación fue exitosa, false en caso contrario.
     */
    public function editTipoUsuarioGym($id, $nombre) {
        try {
            $sql = "UPDATE $this->table SET nombre=:nombre WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $result = $statement->execute();
            return $result;
        } catch (PDOException $ex) {
            echo "No se pudo editar el tipo de usuario: " . $ex->getMessage();
        }
    }

    /**
     * Elimina un tipo de usuario de la base de datos.
     *
     * param int $id ID del tipo de usuario a eliminar.
     * return bool Retorna true si la operación fue exitosa, false en caso contrario.
     */
    public function deleteTipoUsuarioGym($id) {
        try {
            $sql = "DELETE FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $result = $statement->execute();
            return $result;
        } catch (PDOException $ex) {
            echo "No se pudo eliminar el tipo de usuario: " . $ex->getMessage();
        }
    }
}