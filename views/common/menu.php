<!-- Menu -->

<nav class="navbar bg-dark navbar-dark navbar-expand-md sticky-top">
  <div class="container">
    <div class="navbar-brand">Portail</div>
    <!-- NE PAS TOUCHER (boutton en responsive : oui je suis gentil) -->
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarText">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <!-- LES LIENS (Je vous laisse l'ID navbarText, mais pensez aux classes) -->
    <div id="navbarText" class="collapse navbar-collapse">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?= URL; ?>accueil">Accueil</a>
        </li>

        <?php if(!Securite::estConnecte()) : ?>
        
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?= URL; ?>login">Se connecter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?= URL; ?>creerCompte">Créer compte</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?= URL; ?>article">Les articles</a>
          </li>
        <?php else : ?>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?= URL; ?>compte/profil">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?= URL; ?>compte/deconnexion">Se déconnecter</a>
          </li>
        <?php endif; ?>
        <?php if(Securite::estConnecte() && Securite::estAdministrateur()) : ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Administration
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="<?= URL; ?>administration/droits">Gérer les droits</a></li>
              <li><a class="dropdown-item" href="<?= URL; ?>administration/publier Article">Ajouter un arcle</a></li>
            </ul>
          </li>
        <?php endif; ?>
      </ul>
       
    </div>
  </div>
</nav>
<br>




<!--  -->