<?php

require_once ("./models/MainManager.model.php");

class UtilisateurManager extends MainManager{

    private function getPasswordUser($login){

        $req = "SELECT password FROM utilisateur WHERE Login = :login";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":login", $login, PDO::PARAM_STR);
        $stmt->execute();
        $resultat = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $resultat['password'];

    }
    public function isCombinaisonValide($login, $password){

        $passwordBD = $this->getPasswordUser($login);
        // echo $passwordBD;
        return password_verify($password, $passwordBD);
    }

    public function estCompteActive($login){

        $req = "SELECT est_valide FROM utilisateur WHERE Login = :login";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":login", $login, PDO::PARAM_STR);
        $stmt->execute();
        $resultat = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return ((int)$resultat['est_valide'] === 1 ) ? true:false;
    
    }

    public function getUserInformation($login){
        $req = "SELECT * FROM utilisateur WHERE login = :login";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":login",$login,PDO::PARAM_STR);
        $stmt->execute();
        $resultat = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $resultat;
    }
}