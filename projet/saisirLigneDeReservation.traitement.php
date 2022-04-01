<?php
session_start();

$qteReserver = $_POST["qteReserver"] ;
$numTypeContainer = $_POST["typeContainer"] ;

$_SESSION["ligneDeReservation"][$numTypeContainer] = $qteReserver;

header("location:saisirLigneDeReservation.php");

