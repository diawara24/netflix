<?php

    class Films {

        private $id;
        private $image;
        private $trailer;
        private $titre;
        private $realisateur;
        private $annee;
        private $genre;
        private $pitch;

        public function __construct($id, $image, $trailer, $titre, $realisateur, $annee, $genre, $pitch) {
            $this->id = $id;
            $this->image = $image;
            $this->trailer = $trailer;
            $this->titre = $titre;
            $this->annee = $annee;
            $this->genre = $genre;
            $this->pitch = $pitch;
            $this->realisateur = $realisateur;
        }

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getImage() {
            return $this->image;
        }

        public function setImage($image) {
            $this->image = $image;
        }

        public function getTrailer() {
            return $this->trailer;
        }

        public function setTrailer($trailer) {
            $this->trailer = $trailer;
        }

        public function getTitre() {
            return $this->titre;
        }

        public function setTitre($titre) {
            $this->titre = $titre;
        }

        public function getRealisateur() {
            return $this->realisateur;
        }

        public function setRealisateur($realisateur) {
            $this->realisateur = $realisateur;
        }

        public function getAnnee() {
            return $this->annee;
        }

        public function setAnnee($annee) {
            $this->annee = $annee;
        }

        public function getGenre() {
            return $this->genre;
        }

        public function setGenre($genre) {
            $this->genre = $genre;
        }

        public function getPitch() {
            return $this->pitch;
        }

        public function setPitch($pitch) {
            $this->pitch = $pitch;
        }

    }