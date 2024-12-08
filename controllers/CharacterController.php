<?php
// controllers/CharacterController.php
require_once 'models/CharacterModel.php';

class CharacterController {

    private $characterModel;

    public function __construct() {
        $this->characterModel = new CharacterModel();
    }

    // Affiche les détails d'un personnage
    public function show($id) {
        $character = $this->characterModel->getCharacterById($id);
        require_once 'views/characters/show.php';
    }
}
?>