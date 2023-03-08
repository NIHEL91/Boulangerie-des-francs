<?php 
namespace Ess\App\controller;
class AppController extends Controller {
    public function accueil() {
      $this->createView('accueil',['css' => 'index']);
    }
    
      
       public function error(){
          global $except;
          $this->createView('error', ['erreur' => $except->getMessage()]);}
         
  
  
}