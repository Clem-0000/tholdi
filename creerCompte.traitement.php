<?php
include_once 'gestion.base.inc.php';

if (isset($_REQUEST)){
    $raisonSociale = $_REQUEST['raisonSociale'];
    $adresse = $_REQUEST['adresse'];
    $cp = $_REQUEST['cp'];
    $ville = $_REQUEST['ville'];
    $adrMel = $_REQUEST['adrMel'];
    $telephone = $_REQUEST['telephone'];
    $contact = $_REQUEST['contact'];
    $user = $_REQUEST['user'];
    $mdp = $_REQUEST['mdp'];
    $codePays = $_REQUEST['codePays'];
    
    creerCompteUtilisateur($raisonSociale, $adresse, $cp, $ville, $adrMel, $telephone, $contact, $user, $mdp, $codePays);
}           

header("location:connexion.php");
?>