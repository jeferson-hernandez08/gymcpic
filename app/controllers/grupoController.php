<?php
namespace App\Controllers;             
use App\Models\GrupoModel;
use App\Models\ProgramaFormacionModel; // Importar la clase ProgramaFormacionModel (Para el recibir los datos de programaFormacion)

require_once 'baseController.php';
require_once MAIN_APP_ROUTE."../models/GrupoModel.php";
require_once MAIN_APP_ROUTE."../models/ProgramaFormacionModel.php";

class GrupoController extends BaseController {
    public function index(){
        echo "<br>CONTROLLER> GrupoController";
        echo "<br>ACTION> index";
        $this->redirectTo("grupo/view");
    }

    public function view() {
        // Llamamos al modelo de Grupo
        $grupoObj = new GrupoModel();
        $grupos = $grupoObj->getAll();
        
        // Llamamos a la vista
        $data = ["grupos" => $grupos];
        $this->render('grupo/viewGrupo.php', $data);     // Usamos la variable data que es el array asociativo
    }

    public function newGrupo(){
        // Lógica para capturar programas de formación
        $programaFormacionObj = new ProgramaFormacionModel();
        $programas = $programaFormacionObj->getAll();
        
        // Llamamos a la vista
        $data = ["programas" => $programas];
        $this->render('grupo/newGrupo.php', $data);
    }

    public function createGrupo() {
        if (isset($_POST['txtFicha']) && isset($_POST['txtCantAprendices']) && isset($_POST['txtEstado']) && 
            isset($_POST['txtFechaIniLectiva']) && isset($_POST['txtFechaFinLectiva']) && isset($_POST['txtFkIdProgForm'])) {
            $ficha = $_POST['txtFicha'] ?? null;
            $cantAprendices = $_POST['txtCantAprendices'] ?? null;
            $estado = $_POST['txtEstado'] ?? null;
            $fechaIniLectiva = $_POST['txtFechaIniLectiva'] ?? null;
            $fechaFinLectiva = $_POST['txtFechaFinLectiva'] ?? null;
            $fkIdProgForm = $_POST['txtFkIdProgForm'] ?? null;
            // Creamos instancia del Modelo Grupo
            $grupoObj = new GrupoModel();
            // Se llama al método que guarda en la base de datos
            $grupoObj->saveGrupo($ficha, $cantAprendices, $estado, $fechaIniLectiva, $fechaFinLectiva, $fkIdProgForm);
            $this->redirectTo("grupo/view");
        } else {
            echo "No se capturaron todos los datos";
        }
    }

    public function viewGrupo($id)
    {
        $grupoObj = new GrupoModel();
        $grupoInfo = $grupoObj->getGrupo($id);
        $data = [
            'grupo' => $grupoInfo
        ];
        $this->render('grupo/viewOneGrupo.php', $data);
    }

    public function editGrupo($id) {
        $grupoObj = new GrupoModel();
        $grupoInfo = $grupoObj->getGrupo($id);
        $programaFormacionObj = new ProgramaFormacionModel();
        $programasInfo = $programaFormacionObj->getAll();
        $data = [
            "grupo" => $grupoInfo,
            "programas" => $programasInfo
        ];
        $this->render('grupo/editGrupo.php' ,$data);
    }

    public function updateGrupo() {
        if (isset($_POST['txtId']) && isset($_POST['txtFicha']) && isset($_POST['txtCantAprendices']) && 
            isset($_POST['txtEstado']) && isset($_POST['txtFechaIniLectiva']) && isset($_POST['txtFechaFinLectiva']) && 
            isset($_POST['txtFkIdProgForm'])) {
            $id = $_POST['txtId'] ?? null;
            $ficha = $_POST['txtFicha'] ?? null;
            $cantAprendices = $_POST['txtCantAprendices'] ?? null;
            $estado = $_POST['txtEstado'] ?? null;
            $fechaIniLectiva = $_POST['txtFechaIniLectiva'] ?? null;
            $fechaFinLectiva = $_POST['txtFechaFinLectiva'] ?? null;
            $fkIdProgForm = $_POST['txtFkIdProgForm'] ?? null;
            $grupoObj = new GrupoModel();
            $respuesta = $grupoObj->editGrupo($id, $ficha, $cantAprendices, $estado, $fechaIniLectiva, $fechaFinLectiva, $fkIdProgForm);
        }
        header("location: /grupo/view");
    }

    public function deleteGrupo($id) {
        $grupoObj = new GrupoModel();
        $grupoObj->deleteGrupo($id);
        $this->redirectTo("grupo/view");
    }
}