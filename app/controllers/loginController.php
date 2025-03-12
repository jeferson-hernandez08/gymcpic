<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\UsuarioModel;

require_once 'baseController.php';
require_once MAIN_APP_ROUTE."../models/UsuarioModel.php";

class LoginController extends BaseController {
    public function __construct() 
    {
        $this->layout = "login_layout";
    }

    public function initLogin() 
    {
        if(isset($_POST['txtUser']) && isset($_POST['txtPassword']))  {
            $user = trim($_POST['txtUser']) || null;
            $password = trim($_POST['txtPassword']) || null;
            if($user != "" && $password != "") {
                // Se valida la existencia del usuario y contraseña de la BD.
                $loginObj = new UsuarioModel();
                $res = $loginObj->validarLogin($user, $password);
                if($res) {
                    $this->redirectTo('programaFormacion/view');
                } else {
                    $errors = "Usuario y/o contraseña incorrectos";
                }
            } else {
                $errors = 'El usuario y/o contraseña no puedes ser vacíos';
            }
            $data = [
                'errors' => $errors,
            ];
            $this->render('login/login.php', $data);

        } else {
            // Se renderiza el formulario del login
            $this->render('login/login.php');
        }
    }
}