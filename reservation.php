<?php
session_start();
include_once 'gestion.base.inc.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="reservation.css" />
    <title>Reservation</title>
</head>

<body>
    <nav>
        <div class="logo">
            <h4>THOLDI</h4>
        </div>
        <ul class="nav-Links">
            <li><a href="creerReservation.php">Ajouter Réservations</a></li>
            <li><a href="reservation.php">Mes Réservations</a></li>
            <li><a href="deconnexion.php">Se déconnecter</a></li>
        </ul>
        <div class="burger">
            <!--correspond au menu burger qui apparait quand une certaine taille d'écran est atteinte (mobile)-->
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    <script src="navbar.js"></script>
    <h1 class="titlePage"> Mes Réservations</h1>
    <div class="containerReservation">
        <?php
        $collectionReservations = afficherReservation($_SESSION['codeUtilisateur']);
        foreach ($collectionReservations as $reservation) :
        ?>
            <div class="resaBox">
                <h4 class="titleContainerReserve">Information Sur La Réservation</h4>
                <hr class="firstHR">

                <p>Date Du Début De La Réservation : <?php echo date('d/m/Y', $reservation["dateDebutReservation"]) ?></p>
                <p> Date De Fin De La Reservation : <?php echo date('d/m/Y', $reservation["datefinReservation"]) ?> </p>
                <p> Volume Estime : <?php echo $reservation["volumeEstime"] ?> </p>
                <p> Ville De Départ : <?php echo obtenirNomVille($reservation["codeVilleMiseDisposition"]) ?> </p>
                <p> Ville D'Arriver : <?php echo obtenirNomVille($reservation["codeVilleRendre"]) ?> </p>
                <p> Code De La Reservation : <?php echo $reservation["codeReservation"] ?> </p>

                <div class="buttonAction">
                    <form action="modifierReservation.php" method="POST">
                        <button type="submit" name="reservationAModifier" value="<?php echo $reservation['codeReservation'] ?>"> Modifier</button>
                    </form>
                    <form action="supressionReservation.php" method="POST">
                        <button type="submit" name="codeReservation" value="<?php echo $reservation['codeReservation'] ?>"> Supprimer</button>
                    </form>
                </div>
                <h4 class="titleContainerReserve">container Réservés</h4>
                <?php
                $collectionContainerReserves = afficherContainerReserver($reservation['codeReservation']);
                foreach ($collectionContainerReserves as $container) :
                ?>
                    <hr class="firstHR">

                    <p>Type De Container Reservé : <?php echo obtenirNomContainer($container["numTypeContainer"]) ?></p>
                    <p>Nombre De Container Reservé : <?php echo $container["qteReserver"] ?></p>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>