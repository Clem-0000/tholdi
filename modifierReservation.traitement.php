<?php
session_start();
include_once 'gestion.base.inc.php';

$codeReservation = $_POST["codeReservation"];
$dateDebutReservation = $_POST["dateDebutReservation"];
$datefinReservation = $_POST["datefinReservation"];
$volumeEstime = $_POST["volumeEstime"];
$codeVilleMiseDisposition = $_POST["codeVilleMiseDisposition"];
$codeVilleRendre = $_POST["codeVilleRendre"];

modifierReservation($codeReservation, $dateDebutReservation, $datefinReservation, $volumeEstime, $codeVilleMiseDisposition, $codeVilleRendre);


header("location:reservation.php");
