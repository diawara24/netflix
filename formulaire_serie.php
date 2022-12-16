<?php
    require_once("./services/series.service.php");
    $maListe = new SeriesService();
    $currentSerie = new Series(null, '', '', '', '', '', '');
    if (isset($_GET['id'])) {
        $currentSerie = $maListe->getSerie($_GET['id']);
    }

    if (!empty($_POST)) {
        $targetFilePath = $currentSerie->getImage();
        
        $serie = new Series(null, $targetFilePath, $_POST['trailer'], $_POST['titre'], (int) $_POST['annee'], $_POST['genre'], $_POST['pitch']);
        
        if (isset($_FILES['image']) && !empty($_FILES["image"]["name"])) {
            $targetFilePath = $maListe->loadImage();
            $serie->setImage($targetFilePath);
        }
        debug($serie);
        if (isset($_GET['id'])) {
        $maListe->editSerie($serie, $_GET['id']);
       }else {
        $maListe->reqAddSerie($serie);
       }
    }
?>
<?php include("./ui/header.php"); ?>
<div class="container p-4">
    <div class="m-auto border border-white d-flex align-items-center justify-content-center flex-column">
        <?= !isset($_GET['id']) ? '<h1 class="text-white">Ajouter une Série</h1>':'<h1 class="text-white">Modifier une Série</h1>' ?>
    </div>
    <form class="mt-3" action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputTitre" class="form-label">Titre</label>
            <input type="text" class="form-control" id="exampleInputTitre" name="titre" value="<?= $currentSerie->getTitre() ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputAnnee" class="form-label">Annee</label>
            <input type="text" class="form-control" id="exampleInputAnnee" name="annee" value="<?= $currentSerie->getAnnee()  ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputGenre" class="form-label">Genre</label>
            <input type="text" class="form-control" id="exampleInputGenre" name="genre" value="<?= $currentSerie->getGenre()  ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPitch" class="form-label">Pitch</label>
            <input type="text" class="form-control" id="exampleInputPitch" name="pitch" value="<?= $currentSerie->getPitch()  ?>">
        </div>
        <div class="mb-3">
            <?php if (isset($_GET['id']) && $currentSerie->getImage() != '' ) { ?>
                <img src="<?= $currentSerie->getImage() ?>" alt="" srcset="">
            <?php } ?>
            <input type="file" class="form-control" id="exampleInputImage" name="image">
        </div>
        <div class="mb-3">
            <label for="exampleInputTrailer" class="form-label">Trailer</label>
            <input name="trailer" id="exampleInputTrailer" class="form-control" value="<?= htmlentities($currentSerie->getTrailer())  ?>">
        </div>
        <button type="submit" class="btn btn-primary">Sauvegarder</button>
    </form>
</div>
<?php include("./ui/footer.php"); ?>