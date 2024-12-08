<?php
// models/Database.php
class Database {
    private static $connection = null;

    // Méthode pour obtenir la connexion à la base de données
    public static function getConnection() {
        // Si la connexion n'a pas encore été établie
        if (self::$connection === null) {
            try {
                // Connexion à la base de données avec les informations fournies
                self::$connection = new PDO(
                    'mysql:host=mysql-ovelacque.alwaysdata.net;dbname=ovelacque_bestiaire', 
                    'ovelacque', 
                    'C6b9236a.'
                );
                
                // Définir le mode d'erreur à Exception
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch (PDOException $e) {
                // Si une erreur se produit lors de la connexion
                echo "Connection failed: " . $e->getMessage();
            }
        }
        // Retourne la connexion établie
        return self::$connection;
    }
}
?>