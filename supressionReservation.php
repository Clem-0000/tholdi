<?php
include_once 'gestion.base.inc.php';

$codeReservation = $_POST['codeReservation'];
supprimerReservation($codeReservation);
header("location:reservation.php");