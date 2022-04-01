<?php
session_start();
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
    <a href="creerReservation.php">click la pour créer une résa</a>
    <?php echo  $_SESSION['codeUtilisateur'] ?>


    <h1>réservation</h1>
    <?php
    $collectionReservations = afficherReservation($_SESSION['codeUtilisateur']);
    foreach ($collectionReservations as $reservation) :
    ?>
        <section class="containerResa">
            <div class="resaBox">
                <p>dateDebutReservation : <?php echo date('d/m/Y', $reservation["dateDebutReservation"]) ?>
                <p>
                <p> datefinReservation : <?php echo date('d/m/Y', $reservation["datefinReservation"]) ?> </p>
                <p> volumeEstime : <?php echo $reservation["volumeEstime"] ?> </p>
                <p> codeVilleMiseDisposition : <?php echo $reservation["codeVilleMiseDisposition"] ?> </p>
                <p> codeVilleRendre : <?php echo $reservation["codeVilleRendre"] ?> </p>
                <p> code Reservation : <?php echo $reservation["codeReservation"] ?> </p>
                <form action="modifierReservation.php" method="POST">
                    <button type="submit" name="reservationAModifier" value="<?php echo $reservation['codeReservation'] ?>"> Modifier</button>
                </form>
                <form action="supressionReservation.php" method="POST">
                    <button type="submit" name="codeReservation" value="<?php echo $reservation['codeReservation'] ?>"> Supprimer</button>
                </form>
            </div>
        </section>
    <?php endforeach; ?>
</body>

</html>