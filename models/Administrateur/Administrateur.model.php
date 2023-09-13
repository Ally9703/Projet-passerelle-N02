<?php 
require_once("./models/MainManager.model.php");

class AdministrateurManager extends MainManager{
    public function getUtilisateurs(){
        $req = $this->getBdd()->prepare("SELECT * FROM utilisateur");
        $req->execute();
        $datas = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $datas;
    }

    // Gestions de droits utilisateurs
    public function bdModificationRoleUser($login,$role){
        $req = "UPDATE utilisateur set role = :role WHERE login = :login";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":login",$login,PDO::PARAM_STR);
        $stmt->bindValue(":role",$role,PDO::PARAM_STR);
        $stmt->execute();
        $estModifier = ($stmt->rowCount() > 0);
        $stmt->closeCursor();
        return $estModifier;
    }

    // Gestion Articles
    public function bdCreerArticle($titre, $contenu, $date_create){

        $req = "SELECT * FROM articles";
        $req = "INSERT INTO articles (titre, contenu, date_create)
        VALUES (:titre, :contenu, :date_create)";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":titre",$titre,PDO::PARAM_STR);
        $stmt->bindValue(":contenu",$contenu,PDO::PARAM_STR);
        $stmt->bindValue(":date_creation",$date_creation,PDO::PARAM_STR);
        // $stmt->bindValue(":clef",$clef,PDO::PARAM_INT);
        // $stmt->bindValue(":image",$image,PDO::PARAM_STR);
        // $stmt->bindValue(":role",$role,PDO::PARAM_STR);
        $stmt->execute();
        $estAfficher = ($stmt->rowCount() > 0);
        $stmt->closeCursor();
        return $estAfficher;

    }



    
}