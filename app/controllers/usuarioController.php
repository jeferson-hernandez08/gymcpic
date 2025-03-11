<?php
namespace App\Controllers;
use App\Models\UsuarioModel;
use App\Models\RolModel; // Importar la clase RolModel
use App\Models\GrupoModel; // Importar la clase GrupoModel
use App\Models\CentroFormacionModel; // Importar la clase CentroFormacionModel
use App\Models\TipoUsuarioGymModel; // Importar la clase TipoUsuarioGymModel

require_once 'baseController.php';
require_once MAIN_APP_ROUTE."../models/UsuarioModel.php";
require_once MAIN_APP_ROUTE."../models/RolModel.php";
require_once MAIN_APP_ROUTE."../models/GrupoModel.php";
require_once MAIN_APP_ROUTE."../models/CentroFormacionModel.php";
require_once MAIN_APP_ROUTE."../models/TipoUsuarioGymModel.php";

class UsuarioController extends BaseController {
    public function index(){
        echo "<br>CONTROLLER> UsuarioController";
        echo "<br>ACTION> index";
        $this->redirectTo("usuario/view");
    }

    public function view() {
        // Llamamos al modelo de Usuario
        $usuarioObj = new UsuarioModel();
        $usuarios = $usuarioObj->getAll();
        
        // Llamamos a la vista
        $data = ["usuarios" => $usuarios];
        $this->render('usuario/viewUsuario.php', $data);     // Usamos la variable data que es el array asociativo
    }

    public function newUsuario(){
        // Lógica para capturar roles, grupos, centros de formación, y tipos de usuario gym
        $rolObj = new RolModel();
        $roles = $rolObj->getAll();

        $grupoObj = new GrupoModel();
        $grupos = $grupoObj->getAll();

        $centroObj = new CentroFormacionModel();
        $centros = $centroObj->getAll();

        $tipoUserGymObj = new TipoUsuarioGymModel();
        $tiposUsuariosGym = $tipoUserGymObj->getAll();
        
        // Llamamos a la vista
        $data = [
            "roles" => $roles,
            "grupos" => $grupos,
            "centros" => $centros,
            "tiposUsuariosGym" => $tiposUsuariosGym
        ];
        $this->render('usuario/newUsuario.php', $data);
    }

    public function createUsuario() {
        if (isset($_POST['txtNombre']) && isset($_POST['txtTipoDocumento']) && isset($_POST['txtDocumento']) && isset($_POST['txtFechaNacimiento']) && isset($_POST['txtEmail']) && isset($_POST['txtGenero']) && isset($_POST['txtEstado']) && isset($_POST['txtTelefono']) && isset($_POST['txtEps']) && isset($_POST['txtTipoSangre']) && isset($_POST['txtPeso']) && isset($_POST['txtEstatura']) && isset($_POST['txtTelefonoEmergencia']) && isset($_POST['txtPassword']) && isset($_POST['txtObservaciones']) && isset($_POST['txtFkIdRol']) && isset($_POST['txtFkIdGrupo']) && isset($_POST['txtFkIdCentroFormacion']) && isset($_POST['txtFkIdTipoUserGym'])) {
            $nombre = $_POST['txtNombre'] ?? null;
            $tipoDocumento = $_POST['txtTipoDocumento'] ?? null;
            $documento = $_POST['txtDocumento'] ?? null;
            $fechaNacimiento = $_POST['txtFechaNacimiento'] ?? null;
            $email = $_POST['txtEmail'] ?? null;
            $genero = $_POST['txtGenero'] ?? null;
            $estado = $_POST['txtEstado'] ?? null;
            $telefono = $_POST['txtTelefono'] ?? null;
            $eps = $_POST['txtEps'] ?? null;
            $tipoSangre = $_POST['txtTipoSangre'] ?? null;
            $peso = $_POST['txtPeso'] ?? null;
            $estatura = $_POST['txtEstatura'] ?? null;
            $telefonoEmergencia = $_POST['txtTelefonoEmergencia'] ?? null;
            $password = $_POST['txtPassword'] ?? null;
            $observaciones = $_POST['txtObservaciones'] ?? null;
            $fkIdRol = $_POST['txtFkIdRol'] ?? null;
            $fkIdGrupo = $_POST['txtFkIdGrupo'] ?? null;
            $fkIdCentroFormacion = $_POST['txtFkIdCentroFormacion'] ?? null;
            $fkIdTipoUserGym = $_POST['txtFkIdTipoUserGym'] ?? null;

            // Creamos instancia del Modelo Usuario
            $usuarioObj = new UsuarioModel();
            // Se llama al método que guarda en la base de datos
            $usuarioObj->saveUsuario($nombre, $tipoDocumento, $documento, $fechaNacimiento, $email, $genero, $estado, $telefono, $eps, $tipoSangre, $peso, $estatura, $telefonoEmergencia, $password, $observaciones, $fkIdRol, $fkIdGrupo, $fkIdCentroFormacion, $fkIdTipoUserGym);
            $this->redirectTo("usuario/view");
        } else {
            echo "No se capturaron todos los datos necesarios";
        }
    }

    public function viewUsuario($id) {
        $usuarioObj = new UsuarioModel();
        $usuarioInfo = $usuarioObj->getUsuario($id);
        $data = [
            'usuario' => $usuarioInfo
        ];
        $this->render('usuario/viewOneUsuario.php', $data);
    }

    public function editUsuario($id) {
        $usuarioObj = new UsuarioModel();
        $usuarioInfo = $usuarioObj->getUsuario($id);

        $rolObj = new RolModel();
        $roles = $rolObj->getAll();

        $grupoObj = new GrupoModel();
        $grupos = $grupoObj->getAll();

        $centroObj = new CentroFormacionModel();
        $centros = $centroObj->getAll();

        $tipoUsuarioGymObj = new TipoUsuarioGymModel();
        $tiposUsuariosGym = $tipoUsuarioGymObj->getAll();

        $data = [
            "usuario" => $usuarioInfo,
            "roles" => $roles,
            "grupos" => $grupos,
            "centros" => $centros,
            "tiposUsuariosGym" => $tiposUsuariosGym
        ];
        $this->render('usuario/editUsuario.php', $data);
    }

    public function updateUsuario() {
        if (isset($_POST['txtId']) && isset($_POST['txtNombre']) && isset($_POST['txtTipoDocumento']) && isset($_POST['txtDocumento']) && isset($_POST['txtFechaNacimiento']) && isset($_POST['txtEmail']) && isset($_POST['txtGenero']) && isset($_POST['txtEstado']) && isset($_POST['txtTelefono']) && isset($_POST['txtEps']) && isset($_POST['txtTipoSangre']) && isset($_POST['txtPeso']) && isset($_POST['txtEstatura']) && isset($_POST['txtTelefonoEmergencia']) && isset($_POST['txtPassword']) && isset($_POST['txtObservaciones']) && isset($_POST['txtFkIdRol']) && isset($_POST['txtFkIdGrupo']) && isset($_POST['txtFkIdCentroFormacion']) && isset($_POST['txtFkIdTipoUserGym'])) {
            $id = $_POST['txtId'] ?? null;
            $nombre = $_POST['txtNombre'] ?? null;
            $tipoDocumento = $_POST['txtTipoDocumento'] ?? null;
            $documento = $_POST['txtDocumento'] ?? null;
            $fechaNacimiento = $_POST['txtFechaNacimiento'] ?? null;
            $email = $_POST['txtEmail'] ?? null;
            $genero = $_POST['txtGenero'] ?? null;
            $estado = $_POST['txtEstado'] ?? null;
            $telefono = $_POST['txtTelefono'] ?? null;
            $eps = $_POST['txtEps'] ?? null;
            $tipoSangre = $_POST['txtTipoSangre'] ?? null;
            $peso = $_POST['txtPeso'] ?? null;
            $estatura = $_POST['txtEstatura'] ?? null;
            $telefonoEmergencia = $_POST['txtTelefonoEmergencia'] ?? null;
            $password = $_POST['txtPassword'] ?? null;
            $observaciones = $_POST['txtObservaciones'] ?? null;
            $fkIdRol = $_POST['txtFkIdRol'] ?? null;
            $fkIdGrupo = $_POST['txtFkIdGrupo'] ?? null;
            $fkIdCentroFormacion = $_POST['txtFkIdCentroFormacion'] ?? null;
            $fkIdTipoUserGym = $_POST['txtFkIdTipoUserGym'] ?? null;

            $usuarioObj = new UsuarioModel();
            $respuesta = $usuarioObj->editUsuario($id, $nombre, $tipoDocumento, $documento, $fechaNacimiento, $email, $genero, $estado, $telefono, $eps, $tipoSangre, $peso, $estatura, $telefonoEmergencia, $password, $observaciones, $fkIdRol, $fkIdGrupo, $fkIdCentroFormacion, $fkIdTipoUserGym);
        }
        header("location: /usuario/view");
    }

    public function deleteUsuario($id) {
        $usuarioObj = new UsuarioModel();
        $usuarioObj->deleteUsuario($id);
        $this->redirectTo("usuario/view");
    }
}