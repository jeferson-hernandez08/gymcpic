<?php
namespace App\Controllers;

use App\Models\CentroFormacionModel;

require_once 'baseController.php';
require_once MAIN_APP_ROUTE."../models/CentroFormacionModel.php";

class CentroFormacionController extends BaseController {

    public function __construct(){         // Para que nos cargue y nos renderize es con esta funcion. 
        # Se define a plantilla para este controlador
        $this->layout = "admin_layout";
        // Llamamos al constructor del padre
        parent::__construct();
    }

    public function index(){
        echo "<br>CONTROLLER> CentroController";
        echo "<br>ACTION> index";
        $this->redirectTo("centroFormacion/view");
    }

    public function view() {
        // Llamamos al modelo de Centro
        $centroObj = new CentroFormacionModel();
        $centros = $centroObj->getAll();
        
        // Llamamos a la vista
        $data = [
            "title"     => "Centros Formación",
            "centros" => $centros
        ];
        $this->render('centroFormacion/viewCentroFormacion.php', $data);
    }

    public function newCentroFormacion(){
        // Llamamos a la vista
        $data = [
            "title"     => "Centros Formación"
        ];

        $this->render('centroFormacion/newCentroFormacion.php', $data);
    }

    public function createCentroFormacion() {
        if (isset($_POST['txtNombre'])) {
            $nombre      = $_POST['txtNombre'] ?? null;
            // Creamos instancia del Modelo Actividad
            $centroObj = new CentroFormacionModel;
            // Se llama la método que guarda en la base de datos, pasando el nombre
            $centroObj->saveCentroFormacion($nombre);
            $this->redirectTo("centroFormacion/view");
        } else {
            echo "No se capturo el nombre";
        }
    }

    public function viewCentroFormacion($id) {
        $centroObj = new CentroFormacionModel();
        $centroFormacionInfo = $centroObj->getCentroFormacion($id);
        //print_r($rolInfo);
        $data = [
            "title"     => "Centros Formación",
            "centroFormacion" => $centroFormacionInfo,
        ];
        $this->render('centroFormacion/viewOneCentroFormacion.php', $data);     // Llamamos a la vista, renderizamos la vista y enviamos los datos. 
    }

    public function editCentroFormacion($id) {
        $centroObj = new CentroFormacionModel();
        $centroFormacionInfo = $centroObj->getCentroFormacion($id);
        $data = [
            "title"     => "Centros Formación",
            "centroFormacion" => $centroFormacionInfo
        ];
        $this->render('centroFormacion/editCentroFormacion.php', $data); 
    }

    public function updateCentroFormacion() {
        if(isset($_POST['txtNombre'])) {
            $id = $_POST['txtId'] ?? null;
            $nombre = $_POST['txtNombre'] ?? null;
            $centroObj = new CentroFormacionModel();
            $resp = $centroObj->editCentroFormacion($id, $nombre);
        }
        header('Location:/centroFormacion/view');
    }

    public function deleteCentroFormacion($id) {
        $centroObj = new CentroFormacionModel();
        $centroObj->deleteCentroFormacion($id);
        $this->redirectTo("centroFormacion/view");
    }
}
