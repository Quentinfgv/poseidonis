<?php
// Script pour importer la base de données originale
include_once("config.php");

try {
    // Lire le fichier SQL
    $sqlFile = file_get_contents('base_esd_qfolgalvez.sql');

    // Diviser en requêtes individuelles
    $queries = explode(';', $sqlFile);

    $successCount = 0;
    $errorCount = 0;

    foreach ($queries as $query) {
        $query = trim($query);
        if (!empty($query) && !preg_match('/^--/', $query) && !preg_match('/^\/\*/', $query)) {
            try {
                $BDD->exec($query);
                $successCount++;
            } catch (PDOException $e) {
                // Ignorer les erreurs de tables existantes
                if (strpos($e->getMessage(), 'already exists') === false) {
                    $errorCount++;
                    echo "Erreur: " . $e->getMessage() . "<br>";
                }
            }
        }
    }

    echo "<h2>✅ Importation terminée !</h2>";
    echo "<p>Requêtes exécutées avec succès: $successCount</p>";
    echo "<p>Erreurs: $errorCount</p>";

    echo "<h3>🔗 Liens vers les pages :</h3>";
    echo "<p><a href='homes.php' class='btn btn-primary'>Page d'accueil</a></p>";
    echo "<p><a href='menu.php' class='btn btn-primary'>Menu</a></p>";
    echo "<p><a href='actu.php' class='btn btn-primary'>Actualités</a></p>";
    echo "<p><a href='vente.php' class='btn btn-primary'>Vente</a></p>";
} catch (Exception $e) {
    echo "Erreur générale: " . $e->getMessage();
}
