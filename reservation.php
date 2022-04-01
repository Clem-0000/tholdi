<?php
include("session.php");
include_once 'gestion.base.inc.php';
   session_start();
   if($_SESSION["autoriser"]!="oui"){
      header("location:connexion.php");
      exit();
   }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="styleBefore.css" />
        <title>Reservation</title>
    </head>


    <body>
        
        <?php
                $collectionReservations = afficherReservation();
                foreach ($collectionReservations as $reservation):
                    ?>   
                    <section class="containerResa">
                    <div class="resaBox">          
                    <p>dateDebutReservation : <?php echo date('d/m/Y',$reservation["dateDebutReservation"]) ?><p>
                    <p> datefinReservation : <?php echo date('d/m/Y',$reservation["datefinReservation"]) ?> </p>
                    <p> volumeEstime : <?php echo $reservation["volumeEstime"] ?> </p>
                    <p> codeVilleMiseDisposition : <?php echo $reservation["codeVilleMiseDisposition"] ?> </p>
                    <p> codeVilleRendre : <?php echo $reservation["codeVilleRendre"] ?> </p>
                    </div>
                </section>
            <?php endforeach; ?>   
               
                

</body>



</html>