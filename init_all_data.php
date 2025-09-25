<?php
// Script pour initialiser toutes les données de test
echo "<h2>Initialisation des données de test pour Poseidonis</h2>";

echo "<h3>1. Création des données de vente...</h3>";
include_once("test_data.php");

echo "<h3>2. Création des données de menu...</h3>";
include_once("test_menu_data.php");

echo "<h3>3. Création des données d'actualités...</h3>";
include_once("test_actu_data.php");

echo "<h3>✅ Toutes les données ont été créées avec succès !</h3>";
echo "<p><a href='homes.php'>Voir la page d'accueil</a></p>";
echo "<p><a href='menu.php'>Voir le menu</a></p>";
echo "<p><a href='actu.php'>Voir les actualités</a></p>";
echo "<p><a href='vente.php'>Voir la page de vente</a></p>";
