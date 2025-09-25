<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poseidonis - Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-5">
        <h1 class="text-center text-primary">🍽️ Restaurant Poseidonis</h1>
        <div class="alert alert-success">
            <h3>✅ Votre site PHP fonctionne !</h3>
            <p>Le serveur PHP est opérationnel sur le port 8000.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="card">
                    <img src="img/foodtruck1.jpeg" class="card-img-top" alt="Restaurant" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Notre Restaurant</h5>
                        <p class="card-text">Découvrez une cuisine raffinée dans une ambiance chaleureuse.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <img src="img/plat1.jpeg" class="card-img-top" alt="Plats" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Nos Spécialités</h5>
                        <p class="card-text">Des plats préparés avec des ingrédients frais et locaux.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <h3>🔧 Prochaines étapes :</h3>
            <ol>
                <li>Démarrez <strong>MAMP</strong> (application sur votre Mac)</li>
                <li>Cliquez sur <strong>"Start Servers"</strong></li>
                <li>Attendez que les voyants verts s'allument</li>
                <li>Revenez sur cette page pour initialiser la base de données</li>
            </ol>

            <div class="mt-3">
                <a href="init_all_data.php" class="btn btn-primary">Initialiser la base de données</a>
                <a href="homes.php" class="btn btn-outline-primary">Voir le site complet</a>
            </div>
        </div>
    </div>
</body>

</html>