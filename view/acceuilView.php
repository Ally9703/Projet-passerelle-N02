<?php

    $title = "Accueil";
    ob_start();

?>

<section class="container">

    <h1>Bienvenue sur mon site MVC</h1>
    <p>Voici la liste des utilisateurs :</p>

    <?php
        
        while($users = $requete->fetch()) {
    
    ?>
        <p><b><?= $users['first_name'] ?> <?= $users['last_name'] ?></b> : <?= $users['email'] ?></p>
    <?php
        }
    ?>

</section>

<?php

    $content = ob_get_clean();
    require('template.php');
?>

  