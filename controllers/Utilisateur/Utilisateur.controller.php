<?php

require_once ("./controllers/MainController.controller.php");
require_once ("./models/Visiteur/Visiteur.controller.php");

// Classe VisiteurController  pour la gestion des visiteurs 
class UtilisateurController extends MainController{

    // private $visiteurManager;

    // public function __construct(){
    //     $this->visiteurManager = new VisiteurManager();
    // }

    public function validation_login($login, $password){

        echo "test";

    }


    // Appel de la page d'erreur pour l'héritage
    public function pageErreur($msg){
        parent::pageErreur($msg);
    }
}
