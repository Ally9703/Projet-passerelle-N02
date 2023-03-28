 <?php
    
    require('model/modeleAccueil.php');

    function home(){
      $requete = getUsers();
      require('view/acceuilView.php');
    }
