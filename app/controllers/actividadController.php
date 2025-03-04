<?php
namespace App\Controllers;
use App\Models\ActividadModel;

require_once 'baseController.php';
require_once MAIN_APP_ROUTE . "../models/ActividadModel.php";

class ActividadController extends BaseController {
    
    public function index() {
        echo "<br>CONTROLLER> ActividadController";
        echo "<br>ACTION> index";
        $this->redirectTo("actividad/view");    
    }

    public function view() {
        // Llamamos al modelo de actividad
        $actividadObj = new ActividadModel();
        $actividades = $actividadObj->getAll();
        
        // Llamamos a la vista
        $data = ["actividades" => $actividades];     
        $this->render('actividad/viewActividad.php', $data);    // data de actividades
    }

    public function newActividad(){
        $this->render('actividad/newActividad.php');
    }

    public function createActividad() {
        if (isset($_POST['txtNombre']) && isset($_POST['txtDescripcion'])) {
            $nombre      = $_POST['txtNombre'] ?? null;
            $descripcion = $_POST['txtDescripcion'] ?? null;
            // Creamos instancia del Modelo Actividad
            $actividadObj = new ActividadModel;
            // Se llama la método que guarda en la base de datos, pasando tanto el nombre como la descripción
            $actividadObj->saveActividad($nombre, $descripcion);
            $this->redirectTo("actividad/view");
        } else {
            echo "No se capturo el nombre";
        }
    }

    public function viewActividad($id) {
        $actividadObj = new ActividadModel();
        $actividadInfo = $actividadObj->getActividad($id);
        //print_r($rolInfo);
        $data = [
            "actividad" => $actividadInfo,
        ];
        $this->render('actividad/viewOneActividad.php', $data);     // Llamamos a la vista, renderizamos la vista y enviamos los datos. 
    }

    public function editActividad($id) {          // Duda si recibe descripcion
        $actividadObj = new ActividadModel();
        $actividadInfo = $actividadObj->getActividad($id);
        $data = [
            "actividad" => $actividadInfo
        ];
        $this->render('actividad/editActividad.php', $data); 
    }

    public function updateActividad() {
        if(isset($_POST['txtId']) && isset($_POST['txtNombre']) && isset($_POST['txtDescripcion'])) {
            $id = $_POST['txtId'] ?? null;
            $nombre = $_POST['txtNombre'] ?? null;
            $descripcion = $_POST['txtDescripcion'] ?? null;
            $actividadObj = new ActividadModel();
            $resp = $actividadObj->editActividad($id, $nombre, $descripcion);
        }
        header('Location:/actividad/view');
    }

    public function deleteActividad($id) {
        $actividadObj = new ActividadModel();
        $actividadObj->deleteActividad($id);
        $this->redirectTo("actividad/view");
    }
}
