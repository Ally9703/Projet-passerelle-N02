<?php

// Importation des autres fichiers
require_once("./controllers/MainController.controller.php");
require_once("./models/Visiteur/Visiteur.model.php");
require_once("./controllers/Securite.class.php");


// Classe VisiteurController  pour la gestion des visiteurs
class VisiteurController extends MainController{
    private $visiteurManager;

    public function __construct(){
        $this->visiteurManager = new VisiteurManager();
    }
  
    // Fonction Acceuil pour gérer tout ce qui est page d'acceuil
    public function accueil(){ 
        /* 
            Tableau des views transmis à la fonction genererPage,
            pour être afficher par la view correspondante
        */ 
        $data_page = [

            "page_description" => "Description de la page d'accueil",
            "page_title"       => "Titre de la page d'accueil",
            "page_css"          => ['pulic/CSS/main'],
            "page_javascript" => ['script.js'],
            "view"             => "views/Visiteur/accueil.view.php",
            "template"         => "views/includes/template.php"
        ];
        $this->genererPage($data_page);
    }

    public function login(){
        $data_page = [
            "page_description" => "Page de connexion",
            "page_title" => "Page de connexion",
            "view" => "views/Visiteur/login.view.php",
            "template" => "views/includes/template.php"
        ];
        $this->genererPage($data_page);
    }

    public function creerCompte(){
        $data_page = [
            "page_description" => "Page de création de compte",
            "page_title" => "Page de création de compte",
            "view" => "views/Visiteur/creerCompte.view.php",
            "template" => "views/includes/template.php"
        ];
        $this->genererPage($data_page);
    }

    public function visite(){
        $data_page = [
            "page_description" => "Page Article",
            "page_title" => "Page de création de compte",
            "view" => "views/Visiteur/visite.view.php",
            "template" => "views/includes/template.php"
        ];
        $this->genererPage($data_page);
    }



    public function pageErreur($msg){
        parent::pageErreur($msg);
    }
}