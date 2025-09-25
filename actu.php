<?php
include_once("config.php");

$sql = "SELECT * FROM page_actu";


try {

    //envoyer une requête a MySQL
    $page_actu = $BDD->query($sql);
} catch (PDOException $ex) {
    //si sa ne marche pas = gérer l'erreur
    print 'Erreur' . $ex->getMessage();
    exit;
}

include_once("header.php");

?>

<?php
while ($actu = $page_actu->fetch()) {
    print '<section class="my-5 ms-4">
            <div class="container row mt-5 ms-5 ">' .  $actu->image . '
            <div class="col-8 align-self-center  border border-black ms-5 my-5 mt-5">
               ' . $actu->titre . $actu->description . '
             </div> </div> </section>';
}
?>


<?php
include_once("footer.php");
