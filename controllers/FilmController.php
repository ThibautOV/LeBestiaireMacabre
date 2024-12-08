<?php
// controllers/FilmController.php
require_once 'models/FilmModel.php';
require_once 'models/CharacterModel.php';

class FilmController {

    private $filmModel;
    private $characterModel;

    public function __construct() {
        $this->filmModel = new FilmModel();
        $this->characterModel = new CharacterModel();
    }

    // Affiche les films en fonction du type d'horreur
    public function index($type_horreur) {
        $films = $this->filmModel->getFilmsByType($type_horreur);
        require_once 'views/films/index.php';
    }

    // Affiche les détails d'un film et ses personnages
    public function show($id) {
        $film = $this->filmModel->getFilmById($id);
        $characters = $this->characterModel->getCharactersByFilm($id);
        require_once 'views/films/show.php';
    }
}
?>