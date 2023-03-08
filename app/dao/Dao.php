<?php
namespace Ess\App\dao;
use PDO;
use PDOException;
use Exception;
use Ess\App\entities\User;
use Ess\App\model\UserModel;
class Dao {
    private ?PDO $dbconnect;
    public function __construct()
    {
         try{
            $this->dbconnect = new PDO('mysql:host=localhost;dbname=patisserie;charset=UTF8', 'root', '');
        } catch(PDOException $pdoExcept){
             
            throw new Exception('Application non disponible actuellement'); 
        }
        
    }
    public function getUserByLogin(string $login) : User {

        //$sql = 'SELECT * FROM users WHERE email=:login;';
        $sql = 'SELECT * FROM users WHERE email=\'' . $login . '\';';


        $userStat = $this->dbconnect->prepare($sql);
       // $userStat->bindParam('login', $login);
        $userStat->execute();
        if ($userStat->rowCount() == 1) {
            $userStat->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Ess\App\entities\User');//le namespace avec le nom de la classe 
            $user = $userStat->fetch();
            $userStat = NULL;// fermeture du PDO_Statement
            $this->dbconnect = NULL;
            return $user;
        } else {
            $userStat = NULL; 
            $this->dbconnect = NULL; // fermeture de la connexion
            throw new Exception('User non trouvé en base');
        }

    }


    public function setUser($lastname, $firstname, $email, $password)
    {

        $sql = 'INSERT INTO users VALUES (NULL, :lastname, :firstname, \'client\', :email, :password)';
        $user_stat = $this->dbconnect->prepare($sql);
        $user_stat->bindParam(':lastname', $lastname);
        $user_stat->bindParam(':firstname', $firstname);
        $user_stat->bindParam(':email', $email);
        $user_stat->bindParam(':password', $password);
        $user_stat->execute();
    }

}