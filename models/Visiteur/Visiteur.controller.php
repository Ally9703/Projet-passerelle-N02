<?php

require_once ("./models/MainManager.model.php");

class VisiteurManager extends MainManager{

    // Recuperation des élements dans la bdd
    public function getUtilisateurs(){
        $req = $this->getBdd()->prepare("SELECT * FROM utilisateur");
        $req->execute();
        $datas = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $datas;
    }
}