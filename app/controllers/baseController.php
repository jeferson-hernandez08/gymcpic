<?php
namespace App\Controllers;

class BaseController {
    protected string $layaot = "main_layout";
    public function render(string $view, array $arrayData = null) {
        // Ejemplo 1 de capture
        // echo "<pre>";
        // print_r($arrayData);
        // echo "</pre>";
        if(isset($arrayData) && is_array($arrayData)) {
            foreach ($arrayData as $key => $value) {
                // Ejemplo 2 
                // echo "<br>Key ".$key;  // roles
                // echo "<hr>";
                // print_r($value);
                // Se extraen todos los datos que llegan en arrayData
                // Se crean variables de acuerdo las keys
                $$key = $value;
            }
        }
        $content_once = MAIN_APP_ROUTE. "../views/$view";
        $layout = MAIN_APP_ROUTE. "../views/layouts/{$this->layout.php}";
        include_once $layout;   // rols/viewRol.php
        //echo "<br>Renderiza la página con datos";
    }
    public function formatNumber(){
        echo "<br>Formatea un número";
    }
    public function redirectTo($view){
        echo "<br>Reenvía la pagina";
        header("location: /$view");
    }
}