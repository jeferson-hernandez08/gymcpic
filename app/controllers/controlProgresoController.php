<?php
namespace App\Controllers;
use App\Models\ControlProgresoModel;
use App\Models\UsuarioModel; // Importar la clase UsuarioModel

require_once 'baseController.php';
require_once MAIN_APP_ROUTE."../models/ControlProgresoModel.php";
require_once MAIN_APP_ROUTE."../models/UsuarioModel.php";

class ControlProgresoController extends BaseController {

    public function __construct(){         // Para que nos cargue y nos renderize es con esta funcion. 
        # Se define a plantilla para este controlador
        $this->layout = "admin_layout";
        // Llamamos al constructor del padre
        parent::__construct();
    }

    public function index(){
        echo "<br>CONTROLLER> ControlProgresoController";
        echo "<br>ACTION> index";
        $this->redirectTo("controlProgreso/view");
    }

    public function view() {
        // Llamamos al modelo de Control de Progreso
        $controlProgresoObj = new ControlProgresoModel();
        $controles = $controlProgresoObj->getAll();
        
        // Llamamos a la vista
        $data = [
            "title"     => "Control Progreso",
            "controles" => $controles
        ];
        $this->render('controlProgreso/viewControlProgreso.php', $data); // Usamos la variable data que es el array asociativo
    }

    public function newControlProgreso(){
        // Lógica para capturar usuarios
        $usuarioObj = new UsuarioModel();
        $usuarios = $usuarioObj->getAll();
        
        // Llamamos a la vista
        $data = [
            "title"    => "Control Progreso",
            "usuarios" => $usuarios
        ];
        $this->render('controlProgreso/newControlProgreso.php', $data);
    }

    public function createControlProgreso() {
        if (isset($_POST['txtFechaRealizacion']) && isset($_POST['txtPeso']) && isset($_POST['txtCintura']) && isset($_POST['txtCadera']) && isset($_POST['txtMusloDerecho']) && isset($_POST['txtMusloIzquierdo']) && isset($_POST['txtBrazoDerecho']) && isset($_POST['txtBrazoIzquierdo']) && isset($_POST['txtAntebrazoDerecho']) && isset($_POST['txtAntebrazoIzquierdo']) && isset($_POST['txtPantorrillaDerecha']) && isset($_POST['txtPantorrillaIzquierda']) && isset($_POST['txtExamenMedico']) && isset($_POST['txtObservaciones']) && isset($_POST['txtFechaExamen']) && isset($_POST['txtFkIdUsuario'])) {
            $fechaRealizacion = $_POST['txtFechaRealizacion'] ?? null;
            $peso = $_POST['txtPeso'] ?? null;
            $cintura = $_POST['txtCintura'] ?? null;
            $cadera = $_POST['txtCadera'] ?? null;
            $musloDerecho = $_POST['txtMusloDerecho'] ?? null;
            $musloIzquierdo = $_POST['txtMusloIzquierdo'] ?? null;
            $brazoDerecho = $_POST['txtBrazoDerecho'] ?? null;
            $brazoIzquierdo = $_POST['txtBrazoIzquierdo'] ?? null;
            $antebrazoDerecho = $_POST['txtAntebrazoDerecho'] ?? null;
            $antebrazoIzquierdo = $_POST['txtAntebrazoIzquierdo'] ?? null;
            $pantorrillaDerecha = $_POST['txtPantorrillaDerecha'] ?? null;
            $pantorrillaIzquierda = $_POST['txtPantorrillaIzquierda'] ?? null;
            $examenMedico = $_POST['txtExamenMedico'] ?? null;
            $observaciones = $_POST['txtObservaciones'] ?? null;
            $fechaExamen = $_POST['txtFechaExamen'] ?? null;
            $fkIdUsuario = $_POST['txtFkIdUsuario'] ?? null;

            // Creamos instancia del Modelo ControlProgreso
            $controlProgresoObj = new ControlProgresoModel();
            // Se llama al método que guarda en la base de datos
            $controlProgresoObj->saveControlProgreso($fechaRealizacion, $peso, $cintura, $cadera, $musloDerecho, $musloIzquierdo, $brazoDerecho, $brazoIzquierdo, $antebrazoDerecho, $antebrazoIzquierdo, $pantorrillaDerecha, $pantorrillaIzquierda, $examenMedico, $observaciones, $fechaExamen, $fkIdUsuario);
            $this->redirectTo("controlProgreso/view");
        } else {
            echo "No se capturaron todos los datos necesarios";
        }
    }

    public function viewControlProgreso($id) {
        $controlProgresoObj = new ControlProgresoModel();
        $controlProgresoInfo = $controlProgresoObj->getControlProgreso($id);
        $data = [
            "title"           => "Control Progreso",
            'controlProgreso' => $controlProgresoInfo
        ];
        $this->render('controlProgreso/viewOneControlProgreso.php', $data);
    }

    public function editControlProgreso($id) {
        $controlProgresoObj = new ControlProgresoModel();
        $controlProgresoInfo = $controlProgresoObj->getControlProgreso($id);
        $usuarioObj = new UsuarioModel();
        $usuariosInfo = $usuarioObj->getAll();
        $data = [
            "title"           => "Control Progreso",
            "controlProgreso" => $controlProgresoInfo,
            "usuarios"        => $usuariosInfo
        ];
        $this->render('controlProgreso/editControlProgreso.php', $data);
    }

    public function updateControlProgreso() {
        if (isset($_POST['txtId']) && isset($_POST['txtFechaRealizacion']) && isset($_POST['txtPeso']) && isset($_POST['txtCintura']) && isset($_POST['txtCadera']) && isset($_POST['txtMusloDerecho']) && isset($_POST['txtMusloIzquierdo']) && isset($_POST['txtBrazoDerecho']) && isset($_POST['txtBrazoIzquierdo']) && isset($_POST['txtAntebrazoDerecho']) && isset($_POST['txtAntebrazoIzquierdo']) && isset($_POST['txtPantorrillaDerecha']) && isset($_POST['txtPantorrillaIzquierda']) && isset($_POST['txtExamenMedico']) && isset($_POST['txtObservaciones']) && isset($_POST['txtFechaExamen']) && isset($_POST['txtFkIdUsuario'])) {
            $id = $_POST['txtId'] ?? null;
            $fechaRealizacion = $_POST['txtFechaRealizacion'] ?? null;
            $peso = $_POST['txtPeso'] ?? null;
            $cintura = $_POST['txtCintura'] ?? null;
            $cadera = $_POST['txtCadera'] ?? null;
            $musloDerecho = $_POST['txtMusloDerecho'] ?? null;
            $musloIzquierdo = $_POST['txtMusloIzquierdo'] ?? null;
            $brazoDerecho = $_POST['txtBrazoDerecho'] ?? null;
            $brazoIzquierdo = $_POST['txtBrazoIzquierdo'] ?? null;
            $antebrazoDerecho = $_POST['txtAntebrazoDerecho'] ?? null;
            $antebrazoIzquierdo = $_POST['txtAntebrazoIzquierdo'] ?? null;
            $pantorrillaDerecha = $_POST['txtPantorrillaDerecha'] ?? null;
            $pantorrillaIzquierda = $_POST['txtPantorrillaIzquierda'] ?? null;
            $examenMedico = $_POST['txtExamenMedico'] ?? null;
            $observaciones = $_POST['txtObservaciones'] ?? null;
            $fechaExamen = $_POST['txtFechaExamen'] ?? null;
            $fkIdUsuario = $_POST['txtFkIdUsuario'] ?? null;

            $controlProgresoObj = new ControlProgresoModel();
            $respuesta = $controlProgresoObj->editControlProgreso($id, $fechaRealizacion, $peso, $cintura, $cadera, $musloDerecho, $musloIzquierdo, $brazoDerecho, $brazoIzquierdo, $antebrazoDerecho, $antebrazoIzquierdo, $pantorrillaDerecha, $pantorrillaIzquierda, $examenMedico, $observaciones, $fechaExamen, $fkIdUsuario);
        }
        header("location: /controlProgreso/view");
    }

    public function deleteControlProgreso($id) {
        $controlProgresoObj = new ControlProgresoModel();
        $controlProgresoObj->deleteControlProgreso($id);
        $this->redirectTo("controlProgreso/view");
    }
}