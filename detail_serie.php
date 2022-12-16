<?php
include("./services/series.service.php");
$maListe = new SeriesService();

if (isset($_GET['id'])) {
    $serie = $maListe->getSerie($_GET['id']);
}
?>
<?php include("./ui/header.php"); ?>
<div class="p-5">
    <div class="card w-50 bg-secondary">
        <div class="card-body">
            <h5 class="card-title"><?= $serie->getTitre() ?></h5>
            <hr>
            <p class="card-text"><?= $serie->getPitch() ?></p>
            <?= $serie->getTrailer() ?>
        </div>
        <!-- <img src="..." class="card-img-bottom" alt="..."> -->
        
    </div>
</div>
<?php include("./ui/footer.php"); ?>