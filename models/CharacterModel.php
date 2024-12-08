<?php
// models/CharacterModel.php
require_once 'Database.php';

class CharacterModel {
    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }

    // Méthode pour obtenir tous les personnages associés à un film
    public function getCharactersByFilm($film_id) {
        $query = "SELECT * FROM personnages WHERE film_id = :film_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':film_id', $film_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Méthode pour obtenir un personnage par son ID
    public function getCharacterById($id) {
        $query = "SELECT * FROM personnages WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>