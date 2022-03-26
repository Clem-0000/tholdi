<?php
session_start();
include("session.php");
include_once 'gestion.base.inc.php';
?>
 <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="styleBefore.css" />
        <title>Reservation</title>
    </head>


    <body>

        <section class="containForm">
            <div class="containerForm">
                <div class="titleForm">Suite de Réservation</div>
                <div class="contentForm">

        <form action="saisirLigneDeReservation.traitement.php" method="post">
        <div class="detailForm">     

            <select name="typeContainer">
                <?php
                $collectionTypeContainer = obtenirTypeContainer();
                foreach ($collectionTypeContainer as $typeContainer):
                    ?>

                    <option value="<?php echo $typeContainer["numTypeContainer"]; ?>">
                        <?php echo $typeContainer["libelleTypeContainer"]; ?>
                    </option>

                <?php endforeach; ?>
            </select>

            <div class="inputForm">
                                <span class="details">Quantité à Réserver</span>
            <input type="number" name="qteReserver" placeholder="quantité" required >
                </div>
                <div class="button">
            <input type="submit" value="Ajouter une ligne de réservation" >
            <div>
        </form>

        <form action="finaliserReservation.traitement.php" method="post">
        <div class="detailForm">     

        <div class="button">
            <input type="submit" value="Finaliser la réservation">
                </div>
                </div>
        </form>
                </div>
                </div>
    </div>
</section>
<?php 

var_dump($_SESSION) ;



