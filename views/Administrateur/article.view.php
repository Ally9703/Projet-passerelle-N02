<!--  -->

<h1>Poster un nouveau article</h1>
<form method="POST" action="<?= URL ?>visite">
    <div class="mb-3">
        <label for="titre" class="form-label">Titre</label>
        <input type="text" class="form-control" id="titre" name="titre" required>
    </div>

    <div class="mb-3">
        <label for="contenu" class="form-label">Contenu</label>
        <input type="text" class="form-control" id="contenu" name="contenu" required>
    </div>

    <!-- <div class="mb-3">
        <label for="date_creation" class="form-label">Date de publication</label>
        <input type="date" class="form-control" id="date_creation" name="date_creation" required>
    </div> -->

    <button type="submit" class="btn btn-primary">Créer !</button>
</form>


