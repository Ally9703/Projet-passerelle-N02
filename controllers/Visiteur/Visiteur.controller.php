<?php

require_once ("./controllers/MainController.controller.php");

// Classe VisiteurController  pour la gestion des visiteurs 
class VisiteurController extends MainController{

    // Fonction Acceuil pour gérer tout ce qui est page d'acceuil
    public function accueil(){

        $data_page = [
            "page_description" => "Description de la page d'accueil",
            "page_title" => "Titre de la page d'accueil",
            "view" => "views/Visiteur/accueil.view.php",
            "template" => "views/common/template.php"
        ];
        $this->genererPage($data_page);
    }


    // Appel de la page d'erreur pour l'héritage
    public function pageErreur($msg){
        parent::pageErreur($msg);
    }
}
