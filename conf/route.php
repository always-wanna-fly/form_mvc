<?php


 class Routing {
    public static function buildRout(){
        ini_set("display_errors", 1);
        error_reporting(E_ERROR | E_WARNING | E_PARSE);
        /*контролер і action за замовчуванням */
        $controllerName = "IndexController";
        $modelName = "IndexModel";
        $action = "index";
        require_once('Classes/Form/ValidForm.php');

        $route = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
//        print_r($route);
        $i = count($route)-1;
        while ($i>0){
            if ($route[$i] !=''){
                if (is_file(CONTROLLER_PATH. ucfirst($route[$i])."Controller.php") || !empty($_GET)){
                    $controllerName = ucfirst($route[$i]). "Controller";
                    $modelName = ucfirst($route[$i]). "Model";
                    break;
                }
                else{
                    $action = $route[$i];
                }
            }
            $i--;
        }
        /*Визначаємо контролер*/

        require_once CONTROLLER_PATH . $controllerName . ".php";
        require_once MODEL_PATH . $modelName . ".php";


        $controller = new $controllerName();
        $controller->$action(); //$controller->index();
    }
    public function errorPage(){

    }

 }