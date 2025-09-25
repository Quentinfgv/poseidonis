<?php
// Script pour vérifier si MAMP fonctionne
echo "<h2>🔍 Vérification de MAMP</h2>";

// Test de connexion à la base de données
try {
    include_once("config.php");
    echo "<div class='alert alert-success'>✅ Connexion à la base de données réussie !</div>";
    echo "<p>Base de données: " . MYSQL_BASE . "</p>";
    echo "<p>Hôte: " . MYSQL_HOST . "</p>";

    // Test d'une requête simple
    $result = $BDD->query("SHOW TABLES");
    $tables = $result->fetchAll(PDO::FETCH_NUM);

    echo "<h3>📋 Tables trouvées :</h3>";
    echo "<ul>";
    foreach ($tables as $table) {
        echo "<li>" . $table[0] . "</li>";
    }
    echo "</ul>";

    echo "<h3>🔗 Liens vers les pages :</h3>";
    echo "<p><a href='homes.php' class='btn btn-primary'>Page d'accueil</a></p>";
    echo "<p><a href='menu.php' class='btn btn-primary'>Menu</a></p>";
    echo "<p><a href='actu.php' class='btn btn-primary'>Actualités</a></p>";
    echo "<p><a href='vente.php' class='btn btn-primary'>Vente</a></p>";
} catch (PDOException $e) {
    echo "<div class='alert alert-danger'>❌ Erreur de connexion à la base de données</div>";
    echo "<p><strong>Erreur:</strong> " . $e->getMessage() . "</p>";

    echo "<h3>🔧 Solution :</h3>";
    echo "<ol>";
    echo "<li><strong>Démarrez MAMP</strong> (application sur votre Mac)</li>";
    echo "<li>Cliquez sur <strong>\"Start Servers\"</strong></li>";
    echo "<li>Attendez que les voyants verts s'allument (Apache et MySQL)</li>";
    echo "<li>Revenez sur cette page</li>";
    echo "</ol>";

    echo "<h3>🌐 Test sans base de données :</h3>";
    echo "<p><a href='test_simple.php' class='btn btn-outline-primary'>Voir la page de test</a></p>";
}
