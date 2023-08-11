
<!-- Exemple de vue pour afficher tous les articles -->
<?php foreach ($articles as $article): ?>
    <h2><?php echo $article['titre']; ?></h2>
    <p><?php echo $article['contenu']; ?></p>
<?php endforeach; ?>

<!-- Exemple de vue pour afficher un article spécifique avec ses commentaires -->
<h2><?php echo $article['titre']; ?></h2>
<p><?php echo $article['contenu']; ?></p>

<h3>Commentaires :</h3>
<?php foreach ($commentaires as $commentaire): ?>
    <h4><?php echo $commentaire['auteur']; ?></h4>
    <p><?php echo $commentaire['contenu']; ?></p>
<?php endforeach; ?>
