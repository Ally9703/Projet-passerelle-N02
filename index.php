<?php

// initialisation de la session 
session_start();

// Definir le routage avec une conste URL
define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS'])? "https" : "http").
"://".$_SERVER['HTTP_HOST'].$_SERVER["PHP_SELF"]));

// Controller pour la gestion du contenue  du blog
require_once("./controllers/Toolbox.class.php");
require_once("./controllers/Securite.class.php");
require_once("./controllers/Visiteur/Visiteur.controller.php");
require_once("./controllers/Utilisateur/Utilisateur.controller.php");
require_once("./controllers/Administrateur/Administrateur.controller.php");
require_once("./controllers/Article/Article.controller.php");
// require_once("./controllers/Commentaires/Comment.controller.php");

$visiteurController = new VisiteurController();
$utilisateurController = new UtilisateurController();
$administrateurController = new AdministrateurController();
// $articleController = new ArticleController();
// $commentaireController = new CommentaireController();


// Gestions des URL demander 
try {
    if(empty($_GET['page'])){
        $page = "accueil";
    } else {
        $url = explode("/", filter_var($_GET['page'],FILTER_SANITIZE_URL));
        $page = $url[0];
    }

    // la page des visiteurs
    switch($page){
        case "accueil": $visiteurController->accueil();
        break;
        case "login": $visiteurController->login();
        break;
        case "visite": $visiteurController->visite();
        break;
        

        // verification de connexion de l'utilisateur
        case "validation_login" : 
            if(!empty($_POST['login']) && !empty($_POST['password'])){
                $login = Securite::secureHTML($_POST['login']);
                $password = Securite::secureHTML($_POST['password']);
                $utilisateurController->validation_login($login,$password);
            } else {
                Toolbox::ajouterMessageAlerte("Login ou mot de passe non renseigné", Toolbox::COULEUR_ROUGE);
                header('Location: '.URL."login");
            }
        break;

   

        // Création du compte du visiteur
        case "creerCompte" : $visiteurController->creerCompte();
        break;

        // valider le compte du visiteur
        case "validation_creerCompte" : 
            if(!empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['mail'])){
                $login = Securite::secureHTML($_POST['login']);
                $password = Securite::secureHTML($_POST['password']);
                $mail = Securite::secureHTML($_POST['mail']);
                $utilisateurController->validation_creerCompte($login,$password,$mail);
            } else {
                Toolbox::ajouterMessageAlerte("Les 3 informations sont obligatoires !", Toolbox::COULEUR_ROUGE);
                header("Location: ".URL."creerCompte");
            }
        break;

        // Lui renvoyer le mail de validation
        case "renvoyerMailValidation" : $utilisateurController->renvoyerMailValidation($url[1]);
        break;

        // valider le compte du visiteur
        case "validationMail" : $utilisateurController->validation_mailCompte($url[1],$url[2]);
        break;

        // connecter le visiteur
        case "compte" : 
            if(!Securite::estConnecte()){
                Toolbox::ajouterMessageAlerte("Veuillez vous connecter !", Toolbox::COULEUR_ROUGE);
                header("Location: ".URL."login");

            }elseif(!Securite::checkCookieConnexion()) {
                Toolbox::ajouterMessageAlerte("Veuillez vous reconnecter !", Toolbox::COULEUR_ROUGE);
                setcookie(Securite::COOKIE_NAME,"",time() - 3600);
                unset($_SESSION["profil"]);
                header("Location: ".URL."login");

            }else {

                //regénération du cookie
                Securite::genererCookieConnexion();

                // connecter l'utilisateur
                switch($url[1]){
                    case "profil" : $utilisateurController->profil();
                    break;
                    case "deconnexion" : $utilisateurController->deconnexion();
                    break;
                    case "validation_modificationMail" : $utilisateurController->validation_modificationMail(Securite::secureHTML($_POST['mail']));
                    break;
                    case "modificationPassword" : $utilisateurController->modificationPassword();
                    break;
                    case "validation_modificationPassword" :
                        if(!empty($_POST['ancienPassword']) && !empty($_POST['nouveauPassword']) && !empty($_POST['confirmNouveauPassword'])){
                            $ancienPassword = Securite::secureHTML($_POST['ancienPassword']);
                            $nouveauPassword = Securite::secureHTML($_POST['nouveauPassword']);
                            $confirmationNouveauPassword = Securite::secureHTML($_POST['confirmNouveauPassword']);
                            $utilisateurController->validation_modificationPassword($ancienPassword,$nouveauPassword,$confirmationNouveauPassword);
                        } else {
                            Toolbox::ajouterMessageAlerte("Vous n'avez pas renseigné toutes les informations", Toolbox::COULEUR_ROUGE);
                            header("Location: ".URL."compte/modificationPassword");
                        }
                    break;
                    case "suppressionCompte" : $utilisateurController->suppressionCompte();
                    break;
                    case "validation_modificationImage" :
                        if($_FILES['image']['size'] > 0) {
                            $utilisateurController->validation_modificationImage($_FILES['image']);
                        } else {
                            Toolbox::ajouterMessageAlerte("Vous n'avez pas modifié l'image", Toolbox::COULEUR_ROUGE);
                            header("Location: ".URL."compte/profil");
                        }
                    break;
                    default : throw new Exception("La page n'existe pas");
                }
            }
        break;

        // Adminstrateur
        case "administration" :
            if(!Securite::estConnecte()) {
                Toolbox::ajouterMessageAlerte("Veuillez vous connecter !",Toolbox::COULEUR_ROUGE);
                header("Location: ".URL."Login");
            } elseif(!Securite::estAdministrateur()){
                Toolbox::ajouterMessageAlerte("Vous n'avez le droit d'être ici",Toolbox::COULEUR_ROUGE);
                header("Location: ".URL."accueil");
            } else {
                switch($url[1]){
                    case "droits" : $administrateurController->droits();
                    break;
                    case "validation_modificationRole" : $administrateurController->validation_modificationRole($_POST['login'],$_POST['role']);
                    break;

                    // Poster les articles du blog
                    case "article": $administrateurController->article();
                    break;
                    default : throw new Exception("La page n'existe pas");
                }
            }
        break;

        default : throw new Exception("La page n'existe pas");
    }
} catch (Exception $e){
    $visiteurController->pageErreur($e->getMessage());
}