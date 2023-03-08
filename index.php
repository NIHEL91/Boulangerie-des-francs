<?php
require 'vendor/autoload.php';
use Ess\App\controller\UserController;
use Ess\App\controller\AppController;

session_start();



if (!isset($_SESSION['role'])){
    $_SESSION['role'] = 'visiteur';
}

$entite = filter_input(INPUT_GET, 'entite', FILTER_SANITIZE_SPECIAL_CHARS);
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);

try {
    // test sur quelle entite on veut travailler
    switch ($entite) {
       case 'users':   
         // appel du sous contrôleur de l'entite user
        $controller = new UserController();
        $controller->execute($action);

          
        break;
        default:
            $controller = new AppController();
            $controller->execute('accueil');
            break;
    }
} catch(Exception $except) {
    $controller = new AppController();
    //$controller->execute('error');

}