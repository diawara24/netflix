<?php
    include("./services/series.service.php");
    $maListe = new SeriesService();
    if(isset($_GET['mc'])) {
        $maListe->reqSeries($_GET['mc']);
    }else {
        $maListe->reqSeries('');
    }
    

    $series  = $maListe->getSeries() ?? [];
    $nbSeries = count($series);


    if (isset($_GET['id'])) {
        $maListe->deleteSerie($_GET['id']);
    }
?>
<?php include("./ui/header.php"); ?>
<h1 class="text-white">Mes <?= $nbSeries ?> Séries</h1>
<table class="table  align-middle text-center text-white">
    <thead>
        <tr class="fs-5 bg-secondary bg-gradient">
            <th scope="col">
                Série
                <a href="/netflix/formulaire_serie.php" type="button" class="btn btn-outline-info btn-sm">+</a>

            </th>
            <th scope="col">Titre</th>
            <th scope="col">Genre</th>
            <th scope="col">Annee</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($series as $serie) { ?>
            <tr>
                <td onclick="window.location.href = 'detail_serie.php?id=<?= $serie->getId()?>'"  style="cursor: pointer;">
                    <img src="<?= $serie->getImage() ?>" alt="" style="height: 100px; width: 200px;">
                </td>
                <td><?= $serie->getTitre() ?></td>
                <td><?= $serie->getGenre() ?></td>
                <td><?= $serie->getAnnee() ?></td>
                <td>
                    <div class="container">
                    <a href="/netflix/formulaire_serie.php?id=<?= $serie->getId()?>" type="button" class="btn btn-secondary">Modifier</a>
                    <a role="button" onclick="deleteSerie(<?= $serie->getId()?>)"  type="button" class="btn btn-danger">Supprimer</a>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php include("./ui/footer.php"); ?>
