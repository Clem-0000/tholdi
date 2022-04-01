<?php
function gestionnaireDeConnexion() {
    try {
        $pdo = new PDO(
                'mysql:host=172.31.2.110;dbname=tholdi','webserver', '@Xazerty1', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    } 
    catch(PDOException $e){
      echo $e->getMessage();
    }
    return $pdo;
}

function afficherPays() {
    $pdo = gestionnaireDeConnexion();
    $req = "select * from PAYS ";
    $pdoStatement = $pdo->query($req);
    $lesPays = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    return $lesPays;
}

function creerCompteUtilisateur($raisonSociale, $adresse, $cp, $ville, $adrMel, $telephone, $contact, $user, $mdp, $codePays) {
    $pdo = gestionnaireDeConnexion();
    if ($pdo != null) {
        $raisonSociale = $pdo->quote($raisonSociale);
        $adresse = $pdo->quote($adresse);
        $cp = $pdo->quote($cp);
        $ville = $pdo->quote($ville);
        $adrMel = $pdo->quote($adrMel);
        $telephone = $pdo->quote($telephone);
        $contact = $pdo->quote($contact);
        $user = $pdo->quote($user);
        $mdp = $pdo->quote($mdp);
        $codePays = $pdo->quote($codePays);
        $req = "insert into UTILISATEUR"
                . "(raisonSociale, adresse, cp, ville, adrMel, telephone, contact, user, mdp, codePays)"
                . "values ($raisonSociale, $adresse, $cp, $ville, $adrMel, $telephone, $contact, $user, $mdp, $codePays)";
        $pdo->exec($req);
    }
}

function obtenirVille() {
    $pdo = gestionnaireDeConnexion();
    $req = "select * from VILLE";
    $pdoStatement = $pdo->query($req);
    $lesVilles = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    return $lesVilles;
}


function obtenirTypeContainer() {
    $pdo = gestionnaireDeConnexion();
    $req = "select * from TYPECONTAINER ";
    $pdoStatement = $pdo->query($req);
    $lesContainers = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    return $lesContainers;
}

function ajouterUneReservation($dateDebutReservation, $datefinReservation, $volumeEstime, $codeVilleMiseDisposition, $codeVilleRendre, $codeUtilisateur) {
    $pdo = gestionnaireDeConnexion();
    $dateReservation = time();
    $dateDebutReservation = strtotime($dateDebutReservation);
    $dateFinReservation = strtotime($dateFinReservation);
    $req = "insert into RESERVATION"
            . " (dateDebutReservation,datefinReservation,dateReservation,"
            . " volumeEstime,codeVilleMiseDisposition,"
            . " codeVilleRendre,codeUtilisateur,etat)"
            . " values ($dateDebutReservation,$datefinReservation,$dateReservation
                        ,$volumeEstime,$codeVilleMiseDisposition,$codeVilleRendre,"
            . "$codeUtilisateur,'enCours')";
    $pdo->exec($req);
    $lastInsertId = $pdo->lastInsertId();
    return $lastInsertId;
}

function ajouterLigneDeReservation($codeReservation, $numTypeContainer, $qteReserver) {
    $pdo = gestionnaireDeConnexion();
    $req = "insert into RESERVER(codeReservation,numTypeContainer,qteReserver)"
            . " values ($codeReservation,$numTypeContainer,$qteReserver)";
    $pdo->exec($req);
} 


function afficherReservation() {
    $lesReservations = array();
    $pdo = gestionnaireDeConnexion();
    if ($pdo != NULL) {

    $req = "select * from RESERVATION  where RESERVATION.codeUtilisateur = ".$_SESSION[code]." order by codeReservation";
    $pdoStatement = $pdo->query($req);
    $lesReservations = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    }
    return $lesReservations;
}


function islogged()
{
    if (session_status() === PHP_SESSION_ACTIVE) {
        return true;
    }
}
