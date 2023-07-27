<?php

require_once ("./controllers/MainController.controller.php");
require_once ("./models/Utilisateur/Utilisateur.model.php");

// Classe VisiteurController  pour la gestion des visiteurs 
class UtilisateurController extends MainController{

// Model
    private $utilisateurManager;

    public function __construct(){
        $this->utilisateurManager = new UtilisateurManager();
    }

    public function validation_login($login, $password){

        // Vérifier si le compte est activé
        if($this->utilisateurManager->isCombinaisonValide($login, $password)){
            if ($this->utilisateurManager->estCompteActive($login)) {
                Toolbox::ajouterMessageAlerte("Bon retour sur le site" .$login. "!", Toolbox::COULEUR_VERTE);
                $_SESSION['profil'] = [
                    "login" => $login
                ];

                // redirection vers le compte du profil
                header("Location :" .URL."compte/profil");
            }else{
                Toolbox::ajouterMessageAlerte("Le compte ".$login." n'a pas été activé par mail ",Toolbox::COULEUR_ROUGE);

                // Renvoyer le mail de validation
                header("Location : ".URL."login");
            }
        }else{
            Toolbox::ajouterMessageAlerte("Email ou le mot de passe non valide",Toolbox::COULEUR_ROUGE);
            header("Location : ".URL."login");
        }

    }


    // Appel de la page d'erreur pour l'héritage
    public function pageErreur($msg){
        parent::pageErreur($msg);
    }
}
