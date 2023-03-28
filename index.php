
<?php

    // ROUTEURS

    require('controller/controller.php');

    if(isset($_GET['page'])){
        
        if($_GET['page']=='accueil'){
            home();

        }else if($_GET['page']=='avis'){
            
        }
    }else{
        home();
    }
