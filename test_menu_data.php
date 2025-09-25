<?php
// Script pour créer des données de test pour le menu
include_once("config.php");

try {
    // Créer la table menu si elle n'existe pas
    $createTable = "CREATE TABLE IF NOT EXISTS menu_page (
        id INT AUTO_INCREMENT PRIMARY KEY,
        category VARCHAR(100) NOT NULL,
        name VARCHAR(255) NOT NULL,
        description TEXT,
        price DECIMAL(10,2),
        image VARCHAR(255)
    )";
    $BDD->exec($createTable);

    // Vider la table et insérer des données de test
    $BDD->exec("DELETE FROM menu_page");

    $insertData = "INSERT INTO menu_page (category, name, description, price, image) VALUES 
        ('Entrées', 'Salade César', 'Salade fraîche avec croûtons et parmesan', 12.50, 'img/plat1.jpeg'),
        ('Entrées', 'Tartare de Saumon', 'Tartare de saumon frais aux herbes', 15.00, 'img/plat2.jpeg'),
        ('Plats', 'Bœuf Bourguignon', 'Bœuf mijoté au vin rouge avec légumes', 22.00, 'img/plat3.jpeg'),
        ('Plats', 'Poulet Rôti', 'Poulet fermier rôti aux herbes de Provence', 18.50, 'img/plat4.jpeg'),
        ('Desserts', 'Tarte Tatin', 'Tarte aux pommes caramélisées', 8.50, 'img/desert1.jpeg'),
        ('Desserts', 'Crème Brûlée', 'Crème brûlée à la vanille', 7.00, 'img/desert2.jpeg'),
        ('Boissons', 'Vin Rouge', 'Sélection de vins de la région', 6.00, 'img/boisson1.jpg'),
        ('Boissons', 'Cocktail Maison', 'Cocktail signature du chef', 9.50, 'img/boisson2.jpg')";

    $BDD->exec($insertData);

    echo "Données de menu créées avec succès !";
} catch (PDOException $ex) {
    echo "Erreur: " . $ex->getMessage();
}
