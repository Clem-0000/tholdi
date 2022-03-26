<?php
session_start();
include_once 'gestion.base.inc.php';

$dateDebutReservation = $_POST["dateDebutReservation"];
$datefinReservation = $_POST["datefinReservation"];
$volumeEstime = $_POST["volumeEstime"];
$codeVilleMiseDisposition = $_POST["codeVilleMiseDisposition"];
$codeVilleRendre = $_POST["codeVilleRendre"];
$codeUtilisateur = $_SESSION["codeUtilisateur"];

$codeReservation = ajouterUneReservation($dateDebutReservation, $datefinReservation, 
        $volumeEstime, $codeVilleMiseDisposition, 
        $codeVilleRendre, $codeUtilisateur);

$_SESSION["codeReservation"] = $codeReservation;

header("location:saisirLigneDeReservation.php");

