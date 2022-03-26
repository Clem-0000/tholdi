<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Connexion</title>
    <link href="formConnexion.css" rel="stylesheet" />
  </head>
  <body>
    <form
      action="connexion.traitement.php"
      method="POST"
      class="connectContainer"
    >
      <h3 class="connectTitle">Authentification</h3>
      <input
        type="text"
        placeholder="Identifiant"
        class="connectInput"
        name="user"
        id="user"
        required
      />
      <input
        type="password"
        placeholder="Mot De Passe"
        class="connectInput"
        name="mdp"
        id="mdp"
        required
      />
      <input type="submit" value="Valider" class="connectButton" />
      <a href="#" class="changePassword">Mot De Passe Oublié?</a>
      <a href="formAddCompte.php" class="changePassword">Créer Un Compte</a>
    </form>
  </body>
</html>
