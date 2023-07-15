<?php

    $title = "Accueil";
    ob_start();

?>

<section class="container">

    <h1>Bienvenue sur Ally-Techno</h1>
    <p>Voici la liste des utilisateurs :</p>


</section>

<?php

    $content = ob_get_clean();
    require('template.php');
?>

  