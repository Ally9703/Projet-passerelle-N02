<?php

class Commentaire {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getCommentsByArticleId($articleId) {
        $query = "SELECT * FROM commentaires WHERE article_id = :article_id ORDER BY date_creation DESC";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':article_id', $articleId);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Autres méthodes du modèle pour la création, l'édition et la suppression de commentaires
}