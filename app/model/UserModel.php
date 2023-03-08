<?php
namespace Ess\App\model;

use Ess\App\dao\Dao;
use Exception;
use Ess\App\entities\User;
class UserModel {
    public function verifUser() : void
    {
       $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
       //var_dump($password);
        $login = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
       // var_dump($login);
      
        if ($login) {

            $dao = new Dao();
            $user = $dao->getUserByLogin($login); // leve une Exception si user non trouvé
 var_dump($user);
            if (password_verify($password, $user->getPassword())) {    // simulation de la valeur de mot de passe

               $_SESSION['email'] = $user->getEmail();
               echo ( $_SESSION['email']);
               $_SESSION['role'] = $user->getRole();
               $_SESSION['lastname'] = $user->getLastname();
            } else {
                throw new Exception('Mot de passe incorrect !');
            } echo (password_verify($password, $user->getPassword()));
        } else {
            throw new Exception('le login doit être un mail valide');
        }
    }
    public function createUser() {
        $dao = new Dao();
        // récupération des données du $_POST
        $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS);
        var_dump($lastname);
        $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
        $psw = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
        
        $user = new User($lastname, $firstname, $email, $psw );
        
        // hashage du password
      $psw = password_hash($psw, PASSWORD_DEFAULT);
        // appel de la dao
        $dao->setUser($lastname, $firstname, $email, $psw);
    }
}