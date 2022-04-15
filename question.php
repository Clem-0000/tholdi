<?php
session_start();
include_once 'gestion.base.inc.php';
$reservationAModifier = $_POST['codeReservation']; // code de la réservation
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="reservation.css" />
    <title>Question</title>
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
    <h1 class="titlePage"> Ma question</h1>

    <form method="post" action="question.traitement.php">

    <textarea id="libelleMessage" name="libelleMessage" rows="4" cols="50"></textarea>

        <button type="submit" name="codeReservation" value="<?php echo $reservationAModifier ?>"> Valider</button> 

    </form>

</body>

</html>