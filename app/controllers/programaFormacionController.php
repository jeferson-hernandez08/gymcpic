<?php
namespace App\Controllers;
use App\Models\ProgramaFormacionModel;
use App\Models\CentroFormacionModel; // Importar la clase CentroFormacionModel

require_once 'baseController.php';
require_once MAIN_APP_ROUTE."../models/ProgramaFormacionModel.php";
require_once MAIN_APP_ROUTE."../models/CentroFormacionModel.php";

class ProgramaFormacionController extends BaseController {
    
    public function __construct(){         // Para que nos cargue y nos renderize es con esta funcion. 
        # Se define a plantilla para este controlador
        $this->layout = "admin_layout";
        // Llamamos al constructor del padre
        parent::__construct();
    }

    public function index(){
        echo "<br>CONTROLLER> ProgramaFormacionController";
        echo "<br>ACTION> index";
        $this->redirectTo("programaFormacion/view");
    }

    // public function viewApi() {
    //     // Llamamos al modelo de Programa de Formación
    //     $programaObj = new ProgramaFormacionModel();
    //     $programas = $programaObj->getAll();
        
    //     // Llamamos a la vista
    //     $data = [
    //         "message"   => "success",      // Hacer lo mismo con todos. | Luego vamos a title de admin_layout
    //         "data" => $programaFormacion,
    //         "resp"=> true,
    //     ];
    //     header('Content-Type: aplication/json');   // Extención: json-formatter.
    //     echo json_encode($data);
    // }

    public function view() {
        // Validación de sesión de usuario
        // if (!isset($_SESSION['rol'])) {
        //     header ('Location: /login/init');
        // } else {
        //     if (!in_array($_SESSION['rol'], [1,2])) {   // admin, trainer
        //         header ('Location: /login/init');

        //     }
        // }

        // Llamamos al modelo de Programa de Formación
        $programaObj = new ProgramaFormacionModel();
        $programas = $programaObj->getAll();
        
        // Llamamos a la vista
        $data = [
            "title"     => "Programas Formación",      // Hacer lo mismo con todos. | Luego vamos a title de admin_layout
            "programas" => $programas
        ];
        $this->render('programaFormacion/viewProgramaFormacion.php', $data);     // Usamos la variable data que es el array asociativo
    }

    public function newProgramaFormacion() {
        // Validación de sesión de usuario
        // if (!isset($_SESSION['rol'])) {
        //     header ('Location: /login/init');
        // } else {
        //     if (!in_array($_SESSION['rol'], [1])) {   // admin
        //         header ('Location: /login/init');

        //     }
        // }

        // Logica para capturar centros de formacion
        $centroObj = new CentroFormacionModel();
        $centros = $centroObj->getAll();
        
        // Llamamos a la vista
        $data = [
            "title"     => "Programas Formación",
            "centros" => $centros
        ];
        $this->render('programaFormacion/newProgramaFormacion.php', $data);
    }

    public function createProgramaFormacion() {
        if (isset($_POST['txtCodigo']) && isset($_POST['txtNombre']) && isset($_POST['txtFkIdCentroFormacion']) ) {
            $codigo = $_POST['txtCodigo'] ?? null;
            $nombre = $_POST['txtNombre'] ?? null;
            $fkIdProgramaFormacion = $_POST['txtFkIdCentroFormacion'] ?? null;
            // Creamos instancia del Modelo Actividad
            $programaObj = new ProgramaFormacionModel();
            // Se llama la método que guarda en la base de datos, pasando tanto el nombre como la descripción
            $programaObj->saveProgramaFormacion($codigo, $nombre, $fkIdProgramaFormacion );
            $this->redirectTo("programaFormacion/view");
        } else {
            echo "No se capturo el nombre";
        }
    }

    public function viewProgramaFormacion($id) {
        $programaObj = new ProgramaFormacionModel();
        $programaInfo = $programaObj->getProgramaFormacion($id);
        $data = [
            "title"     => "Programas Formación",
            'programa' => $programaInfo
        ];
        $this->render('programaFormacion/viewOneProgramaFormacion.php', $data);
    }

    public function editProgramaFormacion($id) {
        $programaObj = new ProgramaFormacionModel();
        $programaInfo = $programaObj->getProgramaFormacion($id);
        $centrosObj = new CentroFormacionModel();
        $centrosInfo = $centrosObj->getAll();
        $data = [
            "title"     => "Programas Formación",
            "programa" => $programaInfo,
            "centros" => $centrosInfo
        ];
        $this->render('programaFormacion/editProgramaFormacion.php' ,$data);
    }

    public function updateProgramaFormacion() {
        if (isset($_POST['txtId']) && isset($_POST['txtCodigo']) && isset($_POST['txtNombre']) && isset($_POST['txtFkIdCentroFormacion'])) {
            $id     = $_POST['txtId'] ?? null;
            $codigo = $_POST['txtCodigo'] ?? null;
            $nombre = $_POST['txtNombre'] ?? null;
            $fkIdCentro = $_POST['txtFkIdCentroFormacion'] ?? null;
            $programaObj = new ProgramaFormacionModel();
            $respuesta = $programaObj->editProgramaFormacion($id, $codigo, $nombre, $fkIdCentro);
        }
        header("location: /programaFormacion/view");
    }

    public function deleteProgramaFormacion($id) {
        $programaObj = new ProgramaFormacionModel();
        $programaObj->deleteProgramaFormacion($id);
        $this->redirectTo("programaFormacion/view");
    }

    



}
