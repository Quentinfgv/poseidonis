<?php
// Script pour créer des données de test pour les actualités
include_once("config.php");

try {
    // Créer la table actualites si elle n'existe pas
    $createTable = "CREATE TABLE IF NOT EXISTS actualites (
        id INT AUTO_INCREMENT PRIMARY KEY,
        titre VARCHAR(255) NOT NULL,
        contenu TEXT NOT NULL,
        date_publication DATE,
        image VARCHAR(255)
    )";
    $BDD->exec($createTable);

    // Vider la table et insérer des données de test
    $BDD->exec("DELETE FROM actualites");

    $insertData = "INSERT INTO actualites (titre, contenu, date_publication, image) VALUES 
        ('Nouveau Menu Automne', 'Découvrez notre nouveau menu d\'automne avec des produits de saison et des recettes chaleureuses pour vous réchauffer.', '2024-09-25', 'img/foodtruck1.jpeg'),
        ('Food Truck en Ville', 'Notre food truck sera présent tous les samedis sur la place du marché. Venez nous retrouver !', '2024-09-20', 'img/foodtruck2.jpeg'),
        ('Soirée Spéciale', 'Rejoignez-nous pour une soirée gastronomique exceptionnelle le 30 septembre. Réservation recommandée.', '2024-09-15', 'img/foodtruck3.jpeg')";

    $BDD->exec($insertData);

    echo "Données d'actualités créées avec succès !";
} catch (PDOException $ex) {
    echo "Erreur: " . $ex->getMessage();
}
