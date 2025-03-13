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
            $user = trim($_POST['txtUser']) ?? null;
            $password = trim($_POST['txtPassword']) ?? null;
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

    public function logoutLogin() {
        session_destroy();
        header('Location:/login/init');


    }


    public function testBcrypt() {
        //FORMULARIO PARA CREACION DE USUARIO
        $passwordForm = "123456";        // Contraseña que llega del form de creación
        // passhed sería la contraseña que se envie a la bd
        $passHashed = password_hash($passwordForm, PASSWORD_DEFAULT);
        echo "<br><br>Hash del PASSWORD_DEFAULT: $passHashed";
        //Usando bcrypt con costo personalizado
        // $options = ['cost' => 15];
        // $hashedPassword = password_hash($passwordForm, PASSWORD_BCRYPT, $options);
        // echo "<br> Hash password PASSWORD_BCRYPT: $hashedPassword";

        #############################################################
        // FORMULARIO PARA INICIO DE SESION
        $passwordForm = '123456'; // Contraseña que llega del form de LOGIN
        if (password_verify($passwordForm, $passHashed)) {
            echo "Usuario logueado correctamente";
        } else {
            echo "Usuario o contraseña incorrectas";
        }

    }
    
        
    
}