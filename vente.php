<?php
//on vas chercher les eélement de la page home
include_once("config.php");

$sql = "SELECT * FROM vente_page";

try {

    //envoyer une requête a MySQL
    $vente_page = $BDD->query($sql);
} catch (PDOException $ex) {
    //si sa ne marche pas = gérer l'erreur
    print 'Erreur' . $ex->getMessage();
    exit;
}

// exploiter les données


include_once("header.php");

?>

    <?php
    while ($vente = $vente_page->fetch()) {
        print '<section class="my-5 ms-4">
            <div class="container row mt-5 ms-5 w-80">
                <div class="col-4">
                    <img src="' . $vente->image . '" class="img-fluid rounded" alt="Image de vente">
                </div>
                <div class="col-8 align-self-center border border-black ms-5 my-5 mt-5 p-3">
                   ' . $vente->description . '
                </div>
            </div>
        </section>';
    }
    ?>


<?php
include_once("footer.php");
