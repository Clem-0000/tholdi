<?php
include_once ("gestion.base.inc.php");
?>
    <html lang="fr">

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styleBefore.css" />


        <title>Création compte</title>


    </head>

    <body>
        <header>
            <a href="index.php" class="logo">THOLDI</a>
            <ul>
                <li><a href="propos.php">À propos</a></li>
                <li><a href="connexion.php">Connexion</a></li>
            </ul>
        </header>



        <section class="containForm">
            <div class="containerForm">
                <div class="titleForm">Créer un Compte</div>
                <div class="contentForm">
                    <form action='creerCompte.traitement.php' method='post'>

                        <div class="detailForm">

                            <div class="inputForm">
                                <span class="details">Raison Sociale</span>
                                <input type="text" name="raisonSociale" id="raisonSociale" maxlength='50' placeholder="raisonSociale" pattern="^[a-zA-Z0-9]{3,8}$" title="Saisir 1 caractères au minimum" required>
                            </div>


                            <div class="inputForm">
                                <span class="details">Adresse</span>
                                <input type="text" name="adresse" id="adresse" maxlength='80' placeholder="adresse" pattern="^[a-zA-Z0-9]{3,8}$" title="Saisir 1 caractères au minimum">
                            </div>


                            <div class="inputForm">
                                <span class="details">Code Postale</span>
                                <input type="number" name="cp" id="cp" maxlength='5' placeholder="code postale" title="Saisir 5 caractères au minimum" min="0">
                            </div>


                            <div class="inputForm">
                                <span class="details">Ville</span>
                                <input type="text" name="ville" id="ville" maxlength='40' placeholder="ville" pattern="^[a-zA-Z0-9]{3,8}$" title="Saisir 1 caractères au minimum">
                            </div>


                            <div class="inputForm">
                                <span class="details">Adresse Mail</span>
                                <input type="text" name="adrMel" id="adrMel" maxlength='25' placeholder="adresse mail" title="Saisir 1 caractères au minimum" required>
                            </div>

                            <div class="inputForm">
                                <span class="details">Numéro De Téléphone</span>
                                <input type="number" name="telephone" id="telephone" maxlength='15' placeholder="telephone" pattern="^[a-zA-Z0-9]{3,8}$" title="Saisir 1 caractères au minimum">
                            </div>

                            <div class="inputForm">
                                <span class="details">Contact</span>
                                <input type="text" name="contact" id="contact" maxlength='50' placeholder="contact" pattern="^[a-zA-Z0-9]{3,8}$" title="Saisir 1 caractères au minimum" required>
                            </div>

                            <div class="inputForm">
                                <span class="details">Nom d'Utilisateur</span>
                                <input type="text" class="form-control" name="user" id="user" maxlength='16' placeholder="login" pattern="^[a-zA-Z0-9]{3,8}$" title="Saisir 3 caractères au minimum" required>
                            </div>


                            <div class="inputForm">
                                <span class="details">Mot De Passe</span>
                                <input type="password" class="form-control" name="mdp" id="mdp" maxlength='16' placeholder="Mot de passe" title="Saisir 8 caractères au minimum" required>
                            </div>


                            <div class="selectForm">
                                <select name='codePays'>
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

                            <div class="button">
                                <input type="submit" value="Créer">
                            </div>

                        </div>
                    </form>

                </div>
            </div>
            </div>
        </section>
    </body>

    </html>