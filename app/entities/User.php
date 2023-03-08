<?php
namespace Ess\App\entities;

class User {

    private ?int $idUser;
    private string $email;
    private string $role;
    private string $password;
    private string $lastname;

    public function __construct(string $email = '', string $role = '', string $password = '' , string $lastname = '') {
        $this->idUser = null;
        $this->email = $email;
        $this->role = $role;
       // $this->password = password_hash($psw, PASSWORD_DEFAULT);
        $this->password = $password;
        $this->lastname = $lastname;
        
    }

    public function getId(){
        return $this->idUser;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getRole(){
        return $this->role;
    }
    public function getPassword(){
        return $this->password;
        
    }
   

    public function getLastname(){
        return $this->lastname;
    }

    

}