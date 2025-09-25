# Poseidonis - Site Web Restaurant

Site web pour le restaurant Poseidonis développé dans le cadre d'une formation Bachelor développeur web à l'ESD Paris.

## Fonctionnalités

- Page d'accueil
- Menu de la carte
- Actualités
- Page de vente avec affichage dynamique des produits

## Technologies utilisées

- PHP 8+
- MySQL
- Bootstrap 5
- Font Awesome
- PDO pour la base de données

## Installation

1. Cloner le repository
2. Configurer la base de données MySQL
3. Modifier le fichier `config.php` avec vos paramètres de base de données
4. Importer le fichier SQL `base_esd_qfolgalvez.sql`
5. Placer les fichiers dans un serveur web (Apache/Nginx)

## Structure de la base de données

Le site utilise une table `vente_page` avec les colonnes :
- `image` : chemin vers l'image du produit
- `description` : description du produit

## Auteur

Quentin Folgalvez - Formation Bachelor développeur web ESD Paris
