<?php

// initialisation de la session 
session_start();

// Definir le routage avec une cosnte URL
define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS'])? "https" : "http")."://".$_SERVER['HTTP_HOST'].$_SERVER["PHP_SELF"]));

// Controller pour la gestion du contenue  du blog
require_once ("./controllers/Toolbox.class.php");
require_once ("./controllers/Securite.class.php");
require_once("./controllers/Visiteur/Visiteur.controller.php");
require_once("./controllers/Utilisateur/Utilisateur.controller.php");
$visiteurController = new VisiteurController();
$utilisateurController = new UtilisateurController();


// Gestions des URL demander 
try {
    if(empty($_GET['page'])){
        $page = "accueil";
    } else {
        $url = explode("/", filter_var($_GET['page'],FILTER_SANITIZE_URL));
        $page = $url[0];
    }

    switch($page){
        case "accueil" : $visiteurController->accueil();
        break;
        case "login"   : $visiteurController->login();
        break;

        // verification de connexion de l'utilisateur
        case "validation_login"   : 
            if (!empty($_POST['login']) && !empty($_POST['password'])) {

                $login = Securite::secureHTML($_POST["login"]);
                $password = Securite::secureHTML($_POST["password"]);
                $utilisateurController->validation_login($login, $password);
            }else{

                Toolbox::ajouterMessageAlerte("Email ou mot de passe non renseigné",Toolbox::COULEUR_ROUGE);
                header('Location: '. URL."login");
            }
            // echo $_POST["login"]. " _ " . $_POST["password"];
        break;
        case "compte" : 
            switch($url[1]){
                case "profil": $visiteurController->accueil();
                break;
            }
        break;
        default : throw new Exception("La page n'existe pas");
    }
} catch (Exception $e){
    $visiteurController->pageErreur($e->getMessage());
}