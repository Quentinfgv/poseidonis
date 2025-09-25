<?php
//on vas chercher les eélement de la page home
include_once("config.php");

$sql = "SELECT * FROM carte_plat";

try {
    //envoyer une requête a MySQL
    $carte_plat = $BDD->query($sql);
} catch (PDOException $ex) {
    //si sa ne marche pas = gérer l'erreur
    print 'Erreur' . $ex->getMessage();
    exit;
}

$sql = "SELECT * FROM carte_boisson";
try {
    //envoyer une requête a MySQL
    $carte_boisson = $BDD->query($sql);
} catch (PDOException $ex) {
    //si sa ne marche pas = gérer l'erreur
    print 'Erreur' . $ex->getMessage();
    exit;
}

include_once("header.php");

$sql = "SELECT * FROM carte_dessert";
try {
    //envoyer une requête a MySQL
    $carte_dessert = $BDD->query($sql);
} catch (PDOException $ex) {
    //si sa ne marche pas = gérer l'erreur
    print 'Erreur' . $ex->getMessage();
    exit;
}

// exploiter les données

?>

<section>
    <div class="container py-5">
        <h2 class="text-center my-4">Les plats</h2>
        <div class="row g-4 py-5">
            <?php
            while ($plat = $carte_plat->fetch()) {
                print '<div class="col-12 col-md-4 col-lg-3">
                            <div class="card w-100 h-100">
                            ' . $plat->image . '
                            <div class="card-body">
                            ' . $plat->titre . $plat->prix . $plat->description . '
                            </div>
                            </div>
                            </div>';
            }
            ?>
        </div>
    </div>
</section>

<section>
    <div class="container py-5">
        <h2 class="text-center">Les boissons</h2>
        <div class="row g-4 py-5">
            <?php
            while ($boisson = $carte_boisson->fetch()) {
                print '<div class="col-12 col-md-4 col-lg-3">
                            <div class="card w-100 h-100">
                            ' . $boisson->image . '
                            <div class="card-body">
                            ' . $boisson->titre . $boisson->prix . '
                            </div>
                            </div>
                            </div>';
            }
            ?>
        </div>
    </div>
</section>

<section>
    <div class="container py-5">
        <h2 class="text-center my-4">Les desserts</h2>
        <div class="row g-4 py-5">
            <?php
            while ($dessert = $carte_dessert->fetch()) {
                print '<div class="col-12 col-md-4 col-lg-3">
                            <div class="card w-100 h-100">
                            ' . $dessert->image . '
                            <div class="card-body">
                            ' . $dessert->titre . $dessert->prix . $dessert->description . '
                            </div>
                            </div>
                            </div>';
            }
            ?>
        </div>
    </div>
</section>

<?php
include_once("footer.php");
