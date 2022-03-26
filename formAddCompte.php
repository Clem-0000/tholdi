<?php
include_once ("gestion.base.inc.php");
?> <!-- permet d'accéder à la fonction de parcour de pays pour le select-->
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer Compte</title>
    <link href="formAddCompte.css" rel="stylesheet">
</head>

<body>
<form action="creerCompte.traitement.php" method="POST" class="connectContainer">
        <h3 class="connectTitle">Créer Un Compte</h3>
        <div class="inputValue">
            <input type="text" placeholder="Raison Sociale" name="raisonSociale" id="raisonSociale" class="connectInput">
            <input type="text" placeholder="adresse" name="adresse" id="adresse" class="connectInput">
            <input type="text" placeholder="Code Postal" name="cp"  id="cp" class="connectInput">
            <input type="text" placeholder="Ville" name="ville" id="ville" class="connectInput">
            <input type="text" placeholder="adresse Mail" name="adrMel" id="adrMel" class="connectInput">
            <input type="text" placeholder="Telephone"  name="telephone" id="telephone" class="connectInput">
            <input type="text" placeholder="Contact"  name="contact" id="contact" class="connectInput">
            <input type="text" placeholder="Nom Utilisateur"  name="user" id="user" class="connectInput">
            <input type="password" placeholder="Mot De Passe" name="mdp" id="mdp" class="connectInput">
            <div class="selectForm">
                <select name='codePays' class="connectInput">
                <?php
                $collectionCodePays = afficherPays();
                foreach ($collectionCodePays as $pays):
                    ?>

                    <option value="<?php echo $pays["codePays"]; ?>">
                        <?php echo $pays["nomPays"]; ?>
                    </option>

                <?php endforeach; ?>
            </select>
            </div>
        </div>  
        <input type="submit" value="Valider" class="connectButton">
</form>
</html>