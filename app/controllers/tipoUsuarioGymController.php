<?php
namespace App\Controllers;
use App\Models\TipoUsuarioGymModel;

require_once 'baseController.php';
require_once MAIN_APP_ROUTE . "../models/TipoUsuarioGymModel.php";

class TipoUsuarioGymController extends BaseController {
    /**
     * Método principal que redirige a la vista de tipos de usuario.
     */
    public function index() {
        echo "<br>CONTROLLER> TipoUsuarioGymController";
        echo "<br>ACTION> index";
        $this->redirectTo("tipoUsuarioGym/view");
    }

    /**
     * Método para mostrar todos los tipos de usuario.
     */
    public function view() {
        // Llamamos al modelo de Tipo de Usuario
        $tipoUsuarioObj = new TipoUsuarioGymModel();
        $tiposUsuario = $tipoUsuarioObj->getAll();

        // Llamamos a la vista
        $data = ["tiposUsuario" => $tiposUsuario];
        $this->render('tipoUsuarioGym/viewTipoUsuarioGym.php', $data); // Usamos la variable data que es el array asociativo
    }

    /**
     * Método para mostrar el formulario de creación de un nuevo tipo de usuario.
     */
    public function newTipoUsuarioGym() {
        // Llamamos a la vista
        $this->render('tipoUsuarioGym/newTipoUsuarioGym.php');
    }

    /**
     * Método para crear un nuevo tipo de usuario.
     */
    public function createTipoUsuarioGym() {
        if (isset($_POST['txtNombre'])) {
            $nombre = $_POST['txtNombre'] ?? null;

            // Creamos instancia del Modelo TipoUsuarioGym
            $tipoUsuarioObj = new TipoUsuarioGymModel();
            // Se llama al método que guarda en la base de datos
            $tipoUsuarioObj->saveTipoUsuarioGym($nombre);
            $this->redirectTo("tipoUsuarioGym/view");
        } else {
            echo "No se capturó el nombre del tipo de usuario";
        }
    }

    /**
     * Método para mostrar los detalles de un tipo de usuario específico.
     *
     * param int $id ID del tipo de usuario.
     */
    public function viewTipoUsuarioGym($id) {
        $tipoUsuarioObj = new TipoUsuarioGymModel();
        $tipoUsuarioInfo = $tipoUsuarioObj->getTipoUsuarioGym($id);
        $data = [
            'tipoUsuario' => $tipoUsuarioInfo
        ];
        $this->render('tipoUsuarioGym/viewOneTipoUsuarioGym.php', $data);
    }

    /**
     * Método para mostrar el formulario de edición de un tipo de usuario.
     *
     * param int $id ID del tipo de usuario a editar.
     */
    public function editTipoUsuarioGym($id) {
        $tipoUsuarioObj = new TipoUsuarioGymModel();
        $tipoUsuarioInfo = $tipoUsuarioObj->getTipoUsuarioGym($id);
        $data = [
            "tipoUsuario" => $tipoUsuarioInfo
        ];
        $this->render('tipoUsuarioGym/editTipoUsuarioGym.php', $data);
    }

    /**
     * Método para actualizar un tipo de usuario existente.
     */
    public function updateTipoUsuarioGym() {
        if (isset($_POST['txtId']) && isset($_POST['txtNombre'])) {
            $id = $_POST['txtId'] ?? null;
            $nombre = $_POST['txtNombre'] ?? null;

            $tipoUsuarioObj = new TipoUsuarioGymModel();
            $respuesta = $tipoUsuarioObj->editTipoUsuarioGym($id, $nombre);
        }
        header("location: /tipoUsuarioGym/view");
    }

    /**
     * Método para eliminar un tipo de usuario.
     *
     * param int $id ID del tipo de usuario a eliminar.
     */
    public function deleteTipoUsuarioGym($id) {
        $tipoUsuarioObj = new TipoUsuarioGymModel();
        $tipoUsuarioObj->deleteTipoUsuarioGym($id);
        $this->redirectTo("tipoUsuarioGym/view");
    }
}