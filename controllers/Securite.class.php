<?php

// Sécuriser nos champs avec les informations envoyer par l'utilisateur 
class Securite{
    public static function secureHTML($chaine){
        return htmlentities($chaine);
    }

    // Vérifier que l'utilisateur et bien connecté
    public static function estConnecte(){
        return(!empty($_SESSION["profil"]));
    }
}