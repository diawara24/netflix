<?php
    include("./services/films.service.php");
    $maListe = new FilmsService();
    if(isset($_GET['mc'])) {
        $maListe->getFilms($_GET['mc']);
    }else {
        $maListe->getFilms('');
    }
    
    $films  = $maListe->getListFilms() ?? [];
    $nbFilms = count($films);
?>
<?php include("./ui/header.php"); ?>
<h1 class="text-white">Mes <?= $nbFilms ?> Films</h1>
<table class="table  align-middle text-center text-white">
    <thead>
        <tr class="fs-5 bg-secondary bg-gradient">
            <th scope="col">
                Film
                <a href="/netflix/formulaire_serie.php" type="button" class="btn btn-outline-info btn-sm">+</a>
            </th>
            <th scope="col">Titre</th>
            <th scope="col">Genre</th>
            <th scope="col">Réalisateur</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if(isset($films)) {
                foreach ($films as $film) { ?>
            <tr>
                <td  style="cursor: pointer;">
                    <?= $film->getTrailer()?>
                </td>
                <td><?= $film->getTitre() ?></td>
                <td><?= $film->getGenre() ?></td>
                <td><?= $film->getRealisateur() ?></td>
                <td>
                    <div class="container">
                    <a href="/netflix/formulaire_film.php?id=<?= $film->getId()?>" type="button" class="btn btn-secondary">Modifier</a>
                    <a role="button" onclick="deletefilm(<?= $film->getId()?>)"  type="button" class="btn btn-danger">Supprimer</a>
                    </div>
                </td>
            </tr>
        <?php }} ?>
    </tbody>
</table>
<?php include("./ui/footer.php"); ?>
