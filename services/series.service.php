<?php
    require_once('./model/BDD.class.php');
    require_once('./model/series.class.php');

    class SeriesService extends BDD{
        private $series;

        public function addSerie($serie) {

            $this->series[] = $serie;
        }

        public function getSeries() {
            return $this->series;
        }
        

        public function getSerie(int $id){
            $myPDO  = $this->getBdd();
            $sql = "SELECT * FROM series WHERE id = ?";
            $query = $myPDO->prepare($sql);
            $query->execute(array($id));
            $resulat = $query->fetch();
            return new Series($resulat['id'], $resulat['image'], $resulat['trailer'], $resulat['titre'], $resulat['annee'], $resulat['genre'], $resulat['pitch']);
        }

        public function reqSeries($recherche){
            $myPDO  = $this->getBdd();
            $sql = "SELECT * FROM series WHERE titre LIKE ? OR genre LIKE ?";
            $query = $myPDO->prepare($sql);
            $query->execute(array('%'.$recherche.'%', '%'.$recherche.'%'));
            $resulat = $query->fetchAll();
            foreach ($resulat as $serie) {
                $s = new Series($serie['id'], $serie['image'], $serie['trailer'], $serie['titre'], $serie['annee'], $serie['genre'], $serie['pitch']);
                $this->addSerie($s);
            }
        }

        public function reqAddSerie(Series $serie){
            $myPDO  = $this->getBdd();
            $sql = 'INSERT INTO series(image, trailer, titre, annee, genre, pitch) VALUES (?, ?, ?, ?, ?, ?)';
            $query = $myPDO->prepare($sql);
            $query->execute(array($serie->getImage(), $serie->getTrailer(), $serie->getTitre(), $serie->getAnnee(), $serie->getGenre(), $serie->getPitch()));
            header('Location: series.php');
        }
        public function deleteSerie(int $id) {
            $myPDO  = $this->getBdd();
            $sql = 'DELETE FROM series WHERE id = ?';
            $query = $myPDO->prepare($sql);
            $query->execute(array($id));
            header('Location: series.php');
        }

        public function editSerie(Series $serie, int $id) {
            $myPDO  = $this->getBdd();
            $sql = 'UPDATE series SET image = ?, trailer = ?, titre = ?, annee = ?, genre = ?, pitch = ? WHERE id = ?';
            $query = $myPDO->prepare($sql);
            $query->execute(array($serie->getImage(), $serie->getTrailer(), $serie->getTitre(), $serie->getAnnee(), $serie->getGenre(), $serie->getPitch(), $id));
            header('Location: series.php');
        }

        public function loadImage() {
            $targetDir = "images/";
            $fileName = basename($_FILES["image"]["name"]);
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            // image format
            $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
            if (in_array($fileType, $allowTypes)) {
                // Upload file to server
                if (move_uploaded_file($_FILES["image"]["tmp_name"], "./".$targetFilePath)) {
                    return $targetFilePath;
                }else {
                    return false;
                }
            }
        }
        
    }

    function debug($data) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }