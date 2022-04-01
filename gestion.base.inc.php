<?php
function gestionnaireDeConnexion()
{
    try {
        $pdo = new PDO(
            'mysql:host=localhost;dbname=tholdi',
            'root',
            '',
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $pdo;
}

function afficherPays()
{
    $pdo = gestionnaireDeConnexion();
    $req = "select * from PAYS ";
    $pdoStatement = $pdo->query($req);
    $lesPays = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    return $lesPays;
}

function creerCompteUtilisateur($raisonSociale, $adresse, $cp, $ville, $adrMel, $telephone, $contact, $user, $mdp, $codePays)
{
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

function obtenirVille()
{
    $pdo = gestionnaireDeConnexion();
    $req = "select * from VILLE";
    $pdoStatement = $pdo->query($req);
    $lesVilles = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    return $lesVilles;
}

/**
 * permet d'obtenir le nom de la ville sélectionnée par le code de la ville
 */
function obtenirNomVille($codeVilleSelectionee)
{
    $pdo = gestionnaireDeConnexion();
    if ($pdo != NULL) {
        $req = "select nomVille from VILLE where codeVille = $codeVilleSelectionee";
        $pdoStatement = $pdo->query($req);
        $laVilleSelectionee = $pdoStatement->fetch();
        $laVilleSelectionee = $laVilleSelectionee[0];
    }

    return $laVilleSelectionee;
}


function obtenirTypeContainer()
{
    $pdo = gestionnaireDeConnexion();
    $req = "select * from TYPECONTAINER";
    $pdoStatement = $pdo->query($req);
    $lesContainers = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    return $lesContainers;
}

function ajouterUneReservation($dateDebutReservation, $datefinReservation, $volumeEstime, $codeVilleMiseDisposition, $codeVilleRendre, $codeUtilisateur)
{
    $pdo = gestionnaireDeConnexion();
    $dateReservation = time();
    $dateDebutReservation = strtotime($dateDebutReservation);
    $datefinReservation = strtotime($datefinReservation);
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

function ajouterLigneDeReservation($codeReservation, $numTypeContainer, $qteReserver)
{
    $pdo = gestionnaireDeConnexion();
    $req = "insert into RESERVER(codeReservation,numTypeContainer,qteReserver)"
        . " values ($codeReservation,$numTypeContainer,$qteReserver)";
    $pdo->exec($req);
}


function afficherReservation($code)
{
    $lesReservations = array();
    $pdo = gestionnaireDeConnexion();
    if ($pdo != NULL) {

        $sql = "SELECT * from RESERVATION  where codeUtilisateur=:code order by codeReservation";
        $prep = $pdo->prepare($sql);  //La méthode « prépare » transmet la requête au SGBR pour quelle soit analysée
        $prep->bindParam(':code', $code, PDO::PARAM_STR); //La méthode « bindParam » permet d’associer un paramètre nommé à une variable
        $prep->execute();  //La méthode « execute » exécute la requête préparée à partir des données associées aux paramètres nomm
        $lesReservations = $prep->fetchAll(PDO::FETCH_ASSOC);
    }
    return $lesReservations;
}

function afficherContainerReserver($codeReservation)
{
    $lesContainersReserves = array();
    $pdo = gestionnaireDeConnexion();
    if ($pdo != NULL) {
        $sql = "SELECT * from RESERVER  where codeReservation= $codeReservation order by codeReservation";
        $prep = $pdo->prepare($sql);  //La méthode « prépare » transmet la requête au SGBR pour quelle soit analysée
        $prep->execute();  //La méthode « execute » exécute la requête préparée à partir des données associées aux paramètres nomm
        $lesContainersReserves = $prep->fetchAll(PDO::FETCH_ASSOC);
    }
    return $lesContainersReserves;
}

/**
 * permet de vérifier si les informations saisies par l'utilisateur pour sa connexion sont juste
 * renvoie un booléen 
 */
function verification($user, $mdp)
{
    $compteExistant = false;
    $pdo = gestionnaireDeConnexion();
    $sql = "SELECT count(*) as nb FROM UTILISATEUR"
        . " WHERE user=:user AND mdp=:mdp";
    $prep = $pdo->prepare($sql);  //La méthode « prépare » transmet la requête au SGBR pour quelle soit analysée

    $prep->bindParam(':user', $user, PDO::PARAM_STR); //La méthode « bindParam » permet d’associer un paramètre nommé à une variable
    $prep->bindParam(':mdp', $mdp, PDO::PARAM_STR);

    $prep->execute();  //La méthode « execute » exécute la requête préparée à partir des données associées aux paramètres nommés
    $resultat = $prep->fetch(); //La méthode « fetch » permet de lire le premier enregistrement du résultat

    if ($resultat["nb"] == 1) {
        $compteExistant = true;
    }
    $prep->closeCursor();

    return $compteExistant;
}

/**
 * permet, si la connexion a été validée, d'obtenir le code de l'utilisateur afin de l'attribuer à la session notamment dans le but de l'utilisation de la fonction ajoutRéservation ou affichageRéservation
 */
function getCodeUtilisateur($user, $mdp)
{
    $numCodeUtilisateur = 0;
    $pdo = gestionnaireDeConnexion();
    $sql = "SELECT code FROM UTILISATEUR"
        . " WHERE user=:user AND mdp=:mdp";
    $prep = $pdo->prepare($sql);  //La méthode « prépare » transmet la requête au SGBR pour quelle soit analysée

    $prep->bindParam(':user', $user, PDO::PARAM_STR); //La méthode « bindParam » permet d’associer un paramètre nommé à une variable
    $prep->bindParam(':mdp', $mdp, PDO::PARAM_STR);

    $prep->execute();  //La méthode « execute » exécute la requête préparée à partir des données associées aux paramètres nommés
    $array = $prep->fetch(PDO::FETCH_ASSOC); //La méthode « fetch » permet de lire le premier enregistrement du résultat
    foreach ($array as $ligne) {
        $numCodeUtilisateur = $ligne;
    } // permet de transformer le tableau récupérer en un entier

    return $numCodeUtilisateur; // return le code utilisateur lors de l'appel de la function
}


function modifierReservation($codeReservation, $dateDebutReservation, $datefinReservation, $volumeEstime, $codeVilleMiseDisposition, $codeVilleRendre)
{
    $pdo = gestionnaireDeConnexion();
    $dateDebutReservation = strtotime($dateDebutReservation);
    $datefinReservation = strtotime($datefinReservation);
    $req = "UPDATE RESERVATION
    SET dateDebutReservation = $dateDebutReservation,
    datefinReservation = $datefinReservation,
    volumeEstime = $volumeEstime,
    codeVilleMiseDisposition = $codeVilleMiseDisposition,
    codeVilleRendre = $codeVilleRendre
    WHERE codeReservation = $codeReservation";
    $pdo->exec($req);
}


/**
 * permet de retourner les valeurs à mettre par défault dans les inputs de modification
 */
function afficherValeurAModifier($codeReservation)
{
    $laReservation = array();
    $pdo = gestionnaireDeConnexion();
    if ($pdo != NULL) {

        $sql = "SELECT * from RESERVATION  where codeReservation=:codeReservation";
        $prep = $pdo->prepare($sql);  //La méthode « prépare » transmet la requête au SGBR pour quelle soit analysée
        $prep->bindParam(':codeReservation', $codeReservation, PDO::PARAM_STR); //La méthode « bindParam » permet d’associer un paramètre nommé à une variable
        $prep->execute();  //La méthode « execute » exécute la requête préparée à partir des données associées aux paramètres nomm
        $laReservation = $prep->fetch(PDO::FETCH_ASSOC);
    }
    return $laReservation;
}


/**
 * permet de supprimer une réservation
 * @param [int] $codeReservation code de la réservation à supprimer
 * @return void
 */
function supprimerReservation($codeReservation)
{
    $pdo = gestionnaireDeConnexion();
    if ($pdo != NULL) {
        $sql = "DELETE FROM RESERVER WHERE codeReservation = $codeReservation";
        $prep = $pdo->prepare($sql);
        $prep->execute();

        $req = "DELETE FROM RESERVATION WHERE codeReservation = $codeReservation";
        $prep = $pdo->prepare($req);
        $prep->execute();
    }
}

