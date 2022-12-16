<?php
    require_once('./model/BDD.class.php');
    require_once('./model/films.class.php');

    class FilmsService extends BDD{
        private $films;

        public function addFilm($film) {
            $this->films[] = $film;
        }

        public function getListFilms() {
            return $this->films;
        }
        
        public function getFilms($recherche){
            $myPDO  = $this->getBdd();
            $sql = "SELECT * FROM films WHERE titre LIKE ? OR genre LIKE ?";
            $query = $myPDO->prepare($sql);
            $query->execute(array('%'.$recherche.'%', '%'.$recherche.'%'));
            $resulat = $query->fetchAll();
            foreach ($resulat as $film) {
                $f = new Films($film['id'], $film['image'], $film['trailer'], $film['titre'], $film['realisateur'], $film['annee'], $film['genre'], $film['pitch']);
                $this->addFilm($f);
            }
        }
        
    }

    function debug($data) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }