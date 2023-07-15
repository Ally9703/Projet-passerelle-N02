<?php

namespace app\controllers;

use core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        // Code pour afficher la page d'accueil
        $this->loadView('home.html.twig');
    }

    public function register()
    {
        // Code pour traiter l'inscription des utilisateurs
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Récupérer les données du formulaire d'inscription
            
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            // Appeler le modèle User pour effectuer l'enregistrement
            
            $userModel = new \app\models\UserModel();
            
            if ($userModel->register($username, $password)) {
                echo "Inscription réussie !";
                return;
            } else {
                echo "Erreur lors de l'inscription.";
                return;
            }
        }
        
        // Afficher le formulaire d'inscription si la méthode est GET
        
        $this->loadView('register.html.twig');
    }

    public function login()
    {
         // Code pour traiter la connexion des utilisateurs

         if ($_SERVER['REQUEST_METHOD'] === 'POST') {

             // Récupérer les données du formulaire de connexion

             $username = $_POST['username'];
             $password = $_POST['password'];

             // Appeler le modèle User pour effectuer l'authentification

             $userModel = new \app\models\UserModel();

              if ($userModel->login($username, password)) {

                 echo "Connexion réussie !";
                 return;
               } else {

                  echo "Identifiants incorrects.";
                  return;
               }
          }

          // Afficher le formulaire de connexion si la méthode est GET

         $this->loadView('login.html.twig');
     }

    public function logout()
    {
        // Code pour déconnecter l'utilisateur courant
        
        session_start();
        
        // Détruire toutes les données de session
        $_SESSION = array();
        
        // Détruire le cookie de session, s'il existe
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        
        // Finalement, détruire la session
      	session_destroy();

      	echo "Déconnexion réussie !";
  	}
}
