<?php
// models/FilmModel.php
require_once 'Database.php';

class FilmModel {
    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }

    // Méthode pour obtenir tous les films
    public function getFilmsByType($type_horreur) {
        $query = "SELECT * FROM films WHERE type_horreur = :type_horreur";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':type_horreur', $type_horreur);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Méthode pour obtenir un film par son ID
    public function getFilmById($id) {
        $query = "SELECT * FROM films WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>