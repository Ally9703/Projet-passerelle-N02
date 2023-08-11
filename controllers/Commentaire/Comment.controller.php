<?php
require_once("./controllers/MainController.controller.php");
require_once("./models/Commentaire/Comment.model.php");


class Controller {
    private $articleModel;
    private $commentaireModel;

    public function __construct($db) {
        $this->articleModel = new Article($db);
        $this->commentaireModel = new Commentaire($db);
    }

    public function showAllArticles() {
        $articles = $this->articleModel->getAllArticles();
        // Logique pour afficher tous les articles dans la vue
    }

    public function showArticle($id) {
        $article = $this->articleModel->getArticleById($id);
        $commentaires = $this->commentaireModel->getCommentsByArticleId($id);
        // Logique pour afficher un article spécifique avec ses commentaires dans la vue
    }

    // Autres méthodes du contrôleur pour gérer les actions de création, d'édition et de suppression d'articles et de commentaires
}