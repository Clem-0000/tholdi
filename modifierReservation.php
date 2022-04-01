<?php
include_once 'gestion.base.inc.php';

$reservationAModifier = $_POST['reservationAModifier'];
$collectionValeur = afficherValeurAModifier($reservationAModifier);
//$_SESSION['codeReservationPourModification'] = $reservationAModifier;
var_dump($reservationAModifier);

?>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css" />
    <meta name="description" content="">
    <meta name="author" content="">


    <title>modifier réservation</title>


</head>

<body>
    <div>
        <header>
            <h2>modifer réservation<h2>
        </header>
        <form method="post" action="modifierReservation.traitement.php">


            <input type="date" class="form-control" name="dateDebutReservation" id="dateDebutReservation" value="<?php echo date('Y-m-d', $collectionValeur["dateDebutReservation"]) ?>" required>

            <input type="date" class="form-control" name="datefinReservation" id="datefinReservation" value="<?php echo date('Y-m-d', $collectionValeur["datefinReservation"]) ?>" required>

            <input type="text" class="form-control" name="volumeEstime" id="volumeEstime" value="<?php echo $collectionValeur["volumeEstime"] ?>" placeholder="volumeEstime" required>

            <?php
            $collectionVilles = obtenirVille();
            ?>
            <select name="codeVilleMiseDisposition" id="codeVilleMiseDisposition">
                <?php
                foreach ($collectionVilles as $ville) :
                    if($ville["codeVille"] ==  $collectionValeur["codeVilleMiseDisposition"]){$selectValue =true;} else{$selectValue = false;}
                    var_dump($selectValue);
                ?>
                    <option <?php if($selectValue){echo 'selected="$selectValue"'; echo 'disabled="disabled"';} ?> value="<?php echo $ville["codeVille"]; ?>">
                        <?php echo $ville["nomVille"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <select name="codeVilleRendre" id="codeVilleRendre">
                <?php
                foreach ($collectionVilles as $ville) :
                    if($ville["codeVille"] ==  $collectionValeur["codeVilleRendre"]){$selectValue =true;} else{$selectValue = false;}
                ?>
                    <option <?php if($selectValue){echo 'selected="$selectValue"'; echo 'disabled="disabled"';} ?> value="<?php echo $ville["codeVille"]; ?>">
                        <?php echo $ville["nomVille"]; ?>
                    </option>
                <?php endforeach; ?>
            </select> 

            <button type="submit" name="codeReservation" value="<?php echo $reservationAModifier ?>"> Modifier</button>
        </form>
    </div>


</body>

</html>