<?php
include_once ("gestion.base.inc.php");

if(islogged() == true)
{
include("session.php");
}
?>
<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="styleBefore.css"/>
        <title>Tholdi</title>
    </head>

    <body>
        <section class="banniere">

            <div class="box_content">
                <header>
                    <a href="index.php" class="logo">THOLDI</a>
                    <ul>
                        <li><a href="propos.php">À propos</a></li>
                        <li><a href="connexion.php">Connexion</a></li>
                    </ul>
                </header>
                <div class="contentBox">
                    <h2>THOLDI</h2>
                    <p>La société THOLDI est spécialisée dans la gestion des containeurs destinés au transport de marchandises. Elle intervient en qualité de prestataire de services pour le compte d’entreprises de transports.
                    </p>
                    <a href="propos.php" class="btn-propos">Voir Plus</a>
                </div>
            </div>

            <div class="box_img">
                <div class="imgBox">
                    <img src="image/imgIndex/imgPort1.jpg">
                </div>
                <div class="imgBox">
                    <img src="image/imgIndex/imgPort2.jpg">
                </div>
            </div>

        </section>
    </body>
