 <?php
session_start();
$user = $_POST["user"];
$mdp = $_POST["mdp"];
$valider = $_POST["valider"];
$erreur = "";
if (isset($valider)) {
    include_once("log.php");
    $sel = $pdo->prepare("select * from UTILISATEUR where user=? and mdp=? limit 1");
    
    $sel->execute(array($user, $mdp));
    $tab = $sel->fetchAll();
    var_dump($tab);
   if (count($tab) > 0) { 
//       login et mdp existe
        $_SESSION["user"] = ucfirst(strtolower($tab[0]["user"]));
        $_SESSION["autoriser"] = "oui";
        $_SESSION["code"]= $tab[0]["code"];
        header("location:reservation.php");
    } else {
        $erreur = "Mauvais identifiant où mot de passe!";
    }
}
?>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styleLog.css" />
    <link rel="stylesheet" href="styleBefore.css" />
    <title>connexion</title>

</head>

<header>
        <a href="index.php" class="logo">THOLDI</a>
        <ul>
            <li><a href="propos.php">À propos</a></li>
            <li><a href="connexion.php">Connexion</a></li>
        </ul>
    </header>

<body onLoad="document.fo.login.focus()">


    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>

        <div class="box">

            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>

            <div class="container">
                <div class="form">
                    <h2>Authentification</h2>
                    <form name="fo" method="post" action="">
                        <div class="inputBox">
                            <input type="text " id="user" name="user" placeholder="identifiant" required autofocus>
                        </div>

                        <div class="inputBox">
                            <input type="password" id="mdp" name="mdp" placeholder="Mot de passe" required>
                        </div>

                        <div class="erreur">
                            <?php echo $erreur ?>
                        </div>

                        <div class="inputBox">
                            <input type="submit" name="valider" value="login">
                        </div>
                        <p class="forget"> mot de passe oublié?<a href="#">clique ici</a></p>
                        <p class="forget"> Pas enregistré?<a href="creerCompte.php">créer un compte</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
