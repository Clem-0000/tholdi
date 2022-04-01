<?php
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
                <div class="titleForm">Créer une Réservation</div>
                <div class="contentForm">
                    <form action="creerReservation.traitement.php" method="post">
                        <div class="detailForm">

                            <div class="inputForm">
                                <span class="details">Date du Début de Réservation</span>
                                <input type="date" name="dateDebutReservation">
                            </div>
                            <div class="inputForm">
                                <span class="details">Date de Fin de Réservation</span>
                                <input type="date" name="datefinReservation ">
                            </div>
                            <div class="inputForm">
                                <span class="details">Volume Estimée</span>
                                <input type="text " name="volumeEstime ">
                                <p>
                                    <?php
            $collectionVilles = obtenirVille();
            ?>
                                        <select name="codeVilleMiseDisposition ">
                <?php
                foreach ($collectionVilles as $ville) :
                    ?>
                    <option value="<?php echo $ville[ "codeVille"]; ?>">
                                <?php echo $ville["nomVille"]; ?>
                                </option>
                                <?php endforeach; ?>
                                </select>

                                        <select name="codeVilleRendre">
                <?php
                foreach ($collectionVilles as $ville) :
                    ?>
                    <option value="<?php echo $ville["codeVille"]; ?>">
                        <?php echo $ville["nomVille"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>
                                </p>
                                </br>
                                <div class="button">

                                    <input type="submit" value="valider">
                                </div>
                            </div>

                    </form>
                    </div>
                </div>

        </section>


    </body>



    </html>
    <?php
include("fin.inc.php");
?>