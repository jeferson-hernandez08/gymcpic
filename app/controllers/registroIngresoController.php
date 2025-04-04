<?php

namespace App\Controllers;  
                
use App\Models\RegistroIngresoModel;
use App\Models\UsuarioModel; // Importar la clase UsuarioModel
use App\Models\ActividadModel; // Importar la clase ActividadModel

require_once 'baseController.php';
require_once MAIN_APP_ROUTE."../models/RegistroIngresoModel.php";
require_once MAIN_APP_ROUTE."../models/UsuarioModel.php";
require_once MAIN_APP_ROUTE."../models/ActividadModel.php";

class RegistroIngresoController extends BaseController {

    public function __construct(){         // Para que nos cargue y nos renderize es con esta funcion. 
        # Se define a plantilla para este controlador
        $this->layout = "admin_layout";
        // Llamamos al constructor del padre
        parent::__construct();
    }

    public function index(){
        echo "<br>CONTROLLER> RegistroIngresoController";
        echo "<br>ACTION> index";
        $this->redirectTo("registroIngreso/view");
    }

    public function view() {
        // Llamamos al modelo de Registro de Ingreso
        $registroObj = new RegistroIngresoModel();
        $registros = $registroObj->getAll();
        
        // Llamamos a la vista
        $data = [
            "title"     => "Registro Ingreso",
            "registros" => $registros
        ];
        $this->render('registroIngreso/viewRegistroIngreso.php', $data);     // Usamos la variable data que es el array asociativo
    }

    public function newRegistroIngreso(){
        // Lógica para capturar usuarios, actividades y trainers
        $usuarioObj = new UsuarioModel();
        $actividadObj = new ActividadModel();
        
        $usuarios = $usuarioObj->getAll();
        $actividades = $actividadObj->getAll();
        
        // Llamamos a la vista
        $data = [
            "title"     => "Nuevo Registro Ingreso",
            "usuarios" => $usuarios,
            "actividades" => $actividades,
            //"trainers" => $trainers
        ];
        $this->render('registroIngreso/newRegistroIngreso.php', $data);
    }

    public function createRegistroIngreso() {
        if (isset($_POST['txtFechaIn']) && isset($_POST['txtFechaOut']) && isset($_POST['txtFkIdUserGym']) && isset($_POST['txtFkIdActividad']) && isset($_POST['txtFkIdTrainer'])) {
            $fechaIn = $_POST['txtFechaIn'] ?? null;
            $fechaOut = $_POST['txtFechaOut'] ?? null;
            $fkIdUserGym = $_POST['txtFkIdUserGym'] ?? null;
            $fkIdActividad = $_POST['txtFkIdActividad'] ?? null;
            $fkIdTrainer = $_POST['txtFkIdTrainer'] ?? null;
            
            // Creamos instancia del Modelo RegistroIngreso
            $registroObj = new RegistroIngresoModel();
            // Se llama al método que guarda en la base de datos
            $registroObj->saveRegistroIngreso($fechaIn, $fechaOut, $fkIdUserGym, $fkIdActividad, $fkIdTrainer);
            $this->redirectTo("registroIngreso/view");
        } else {
            echo "No se capturaron todos los datos necesarios";
        }
    }

    public function viewRegistroIngreso($id)
    {
        $registroObj = new RegistroIngresoModel();
        $registroInfo = $registroObj->getRegistroIngreso($id);
        $data = [
            "title"     => "Registro Ingreso",
            'registro' => $registroInfo
        ];
        $this->render('registroIngreso/viewOneRegistroIngreso.php', $data);
    }

    public function editRegistroIngreso($id) {
        $registroObj = new RegistroIngresoModel();
        $registroInfo = $registroObj->getRegistroIngreso($id);
        
        $usuarioObj = new UsuarioModel();
        $actividadObj = new ActividadModel();
        //$trainerObj = new TrainerModel();
        
        $usuariosInfo = $usuarioObj->getAll();
        $actividadesInfo = $actividadObj->getAll();
        //$trainersInfo = $trainerObj->getAll();
        
        $data = [
            "title"     => "Editar Registro Ingreso",
            "registro" => $registroInfo,
            "usuarios" => $usuariosInfo,
            "actividades" => $actividadesInfo,
            //"trainers" => $trainersInfo
        ];
        $this->render('registroIngreso/editRegistroIngreso.php' ,$data);
    }

    public function updateRegistroIngreso() {
        if (isset($_POST['txtId']) && isset($_POST['txtFechaIn']) && isset($_POST['txtFechaOut']) && isset($_POST['txtFkIdUserGym']) && isset($_POST['txtFkIdActividad']) && isset($_POST['txtFkIdTrainer'])) {
            $id = $_POST['txtId'] ?? null;
            $fechaIn = $_POST['txtFechaIn'] ?? null;
            $fechaOut = $_POST['txtFechaOut'] ?? null;
            $fkIdUserGym = $_POST['txtFkIdUserGym'] ?? null;
            $fkIdActividad = $_POST['txtFkIdActividad'] ?? null;
            $fkIdTrainer = $_POST['txtFkIdTrainer'] ?? null;
            
            $registroObj = new RegistroIngresoModel();
            $respuesta = $registroObj->editRegistroIngreso($id, $fechaIn, $fechaOut, $fkIdUserGym, $fkIdActividad, $fkIdTrainer);
        }
        header("location: /registroIngreso/view");
    }

    public function deleteRegistroIngreso($id) {
        $registroObj = new RegistroIngresoModel();
        $registroObj->deleteRegistroIngreso($id);
        $this->redirectTo("registroIngreso/view");
    }
}