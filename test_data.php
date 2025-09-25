<?php
// Script pour créer des données de test
include_once("config.php");

try {
    // Créer la table vente_page si elle n'existe pas
    $createTable = "CREATE TABLE IF NOT EXISTS vente_page (
        id INT AUTO_INCREMENT PRIMARY KEY,
        image VARCHAR(255) NOT NULL,
        description TEXT NOT NULL
    )";
    $BDD->exec($createTable);

    // Vider la table et insérer des données de test
    $BDD->exec("DELETE FROM vente_page");

    $insertData = "INSERT INTO vente_page (image, description) VALUES 
        ('img/vente1.jpeg', 'Découvrez nos spécialités culinaires préparées avec des ingrédients frais et locaux. Nos chefs vous proposent une cuisine raffinée qui met en valeur les saveurs authentiques.'),
        ('img/vente2.jpeg', 'Plats gastronomiques à emporter ou à déguster sur place. Chaque recette est un voyage gustatif qui ravira vos papilles.'),
        ('img/vente3.jpeg', 'Menu du jour avec des suggestions créatives et des classiques revisités. Une expérience culinaire unique vous attend.')";

    $BDD->exec($insertData);

    echo "Données de test créées avec succès !";
} catch (PDOException $ex) {
    echo "Erreur: " . $ex->getMessage();
}
