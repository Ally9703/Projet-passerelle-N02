<!--  -->


<!-- <h1>Poster un nouveau article</h1>
<form method="POST" action="poster_un_article">
    <div class="mb-3">
        <label for="titre" class="form-label">Titre</label>
        <input type="text" class="form-control" id="titre" name="titre" required>
    </div>

    <div class="mb-3">
        <label for="contenu" class="form-label">Contenu</label>
        <input type="text" class="form-control" id="contenu" name="contenu" required>
    </div>

    <div class="mb-3">
        <label for="date_creation" class="form-label">Date de publication</label>
        <input type="date" class="form-control" id="date_creation" name="date_creation" required>
    </div>

    <button type="submit" class="btn btn-primary">Créer !</button>
</form> -->


<h1>Page de gestion des droits des utilisateurs</h1>
<table class="table">
    <thead>
        <tr>
            <th>Login</th>
            <th>Validé</th>
            <th>Rôle</th>
         </tr>
        <?php foreach ($utilisateurs as $utilisateur) : ?>
            <tr>
                <td><?= $utilisateur['login'] ?></td>
                <td><?= (int)$utilisateur['est_valide'] === 0 ? "non validé" : "validé" ?></td>
                <td>
                    <?php if($utilisateur['role'] === "administrateur") : ?>
                        <?= $utilisateur['role'] ?>
                    <?php else: ?>
                        <form method="POST" action="<?= URL ?>administration/validation_modificationRole">
                            <input type="hidden" name="login" value="<?= $utilisateur['login'] ?>" />
                            <select class="form-select" name="role" onchange="confirm('confirmez vous la modification ?') ? submit() : document.location.reload()">
                                <option value="utilisateur" <?= $utilisateur['role'] === "utilisateur" ? "selected" : ""?>>Utilisateur</option>
                                <option value="Sutilisateur" <?= $utilisateur['role'] === "Sutilisateur" ? "selected" : ""?>>Super Utilisateur</option>
                                <option value="administrateur" <?= $utilisateur['role'] === "administrateur" ? "selected" : ""?>>Administrateur</option>
                            </select>
                        </form>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </thead>
</table>