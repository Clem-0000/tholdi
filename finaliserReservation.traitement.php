<?php
session_start();
include_once 'gestion.base.inc.php';

$codeReservation = $_SESSION["codeReservation"];
foreach ($_SESSION["ligneDeReservation"] as $key => $value) {
    ajouterLigneDeReservation($codeReservation, $key, $value);
}
header("location:reservation.php");