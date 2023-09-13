<?php
require_once("./controllers/MainController.controller.php");
require_once("./models/Administrateur/Administrateur.model.php");

class AdministrateurController extends MainController{
    private $administrateurManager;

    public function __construct(){
        $this->administrateurManager = new AdministrateurManager();
    } 

    public function droits(){
        $utilisateurs = $this->administrateurManager->getUtilisateurs();

        $data_page = [
            "page_description" => "Gestion des droits",
            "page_title" => "Gestion des droits",
            "utilisateurs" => $utilisateurs,
            "view" => "views/Administrateur/droits.view.php",
            "template" => "views/includes/template.php"
        ];
        $this->genererPage($data_page);
    }

    public function validation_modificationRole($login,$role){
        if($this->administrateurManager->bdModificationRoleUser($login,$role)){
            Toolbox::ajouterMessageAlerte("La modification a été prise en compte", Toolbox::COULEUR_VERTE);
        } else {
            Toolbox::ajouterMessageAlerte("La modification n'a pas été prise en compte", Toolbox::COULEUR_ROUGE);
        }
        header("Location: ".URL."administration/droits");
    }

    // // Poster les articles 
    public function article(){
        $utilisateurs = $this->administrateurManager->getUtilisateurs();

        $data_page = [
            "page_description" => "Gestion des articles",
            "page_title" => "Gestion des articles de blog",
            "utilisateurs" => $utilisateurs,
            "view" => "views/Administrateur/article.view.php",
            "template" => "views/includes/template.php"
        ];
        $this->genererPage($data_page);
    }

     // Faire des vérifcations si les informations données ne sont pas déjà dans la bdd
     public function validation_creerArticle($titre,$contenu,$date_create){
        if($this->utilisateurManager->ve($login)){
            
            if($this->utilisateurManager->bdCreerCompte($login,$passwordCrypte,$mail,$clef,"profils/profil.png","utilisateur")){
                $this->sendMailValidation($login,$mail,$clef);
                Toolbox::ajouterMessageAlerte("Le compte a été créé, Un mail de validation vous a été envoyé !", Toolbox::COULEUR_VERTE);
                header("Location: ".URL."login");
            } else {
                Toolbox::ajouterMessageAlerte("Erreur lors de la création du compte, recommencez !", Toolbox::COULEUR_ROUGE);
                header("Location: ".URL."creerCompte");
            }
        } else {
            Toolbox::ajouterMessageAlerte("Le login est déjà utilisé !", Toolbox::COULEUR_ROUGE);
            header("Location: ".URL."creerCompte");
        }
    }



    public function pageErreur($msg){
        parent::pageErreur($msg);
    }
}