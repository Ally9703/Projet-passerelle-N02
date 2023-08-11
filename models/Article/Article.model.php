<?php

class Article {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllArticles() {
        $query = "SELECT * FROM articles ORDER BY date_creation DESC";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getArticleById($id) {
        $query = "SELECT * FROM articles WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Autres méthodes du modèle pour la création, l'édition et la suppression d'articles
}
