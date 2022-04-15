<?php
session_start();
include_once 'gestion.base.inc.php';
$codeReservation = $_POST["codeReservation"];
$libelleMessage = $_POST["libelleMessage"];
$dateMessage = time();
$etatMsg = 0;
var_dump($codeReservation,$libelleMessage, $dateMessage,$etatMsg);

ajouterMessage($codeReservation, $libelleMessage,$dateMessage,$etatMsg);
//var_dump($codeReservation, $libelleMessage,$dateMessage,$etatMsg);
header("location:reservation.php");