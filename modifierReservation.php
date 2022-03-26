<?php
include("debut.inc.php");
include_once 'gestion.base.inc.php';
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
   

    <section class="create-container">
        <?php afficherValeurAModifier($codeReservation)?>
        <div>
            <header><h2>modifer réservation<h2></header>
                <form method="post" action="" >
                

        <input type="date"  class="form-control" name="id" id="id"  maxlength='10'  placeholder="dateDebutReservation "  title="dateDebutReservation"  required>

               </br> 

        <input type="date"  class="form-control" name="id" id="id"  maxlength='100' placeholder="datefinReservation "  title="datefinReservation"  required>
                         
 </br> 

        <input type="date"  class="form-control" name="id" id="id"  maxlength='15' placeholder="dateReservation "   title="dateReservation"  required>
                         
 </br> 

        <input type="text"  class="form-control" name="id" id="id"  maxlength='50'  placeholder="volumeEstime " pattern="^[a-zA-Z0-9]{3,8}$" title="Saisir 1 caractères au minimum"  required>
                  

             
                        
               

        <input type="text"  class="form-control" name="id" id="id"  maxlength='10' placeholder="codeVilleMiseDisposition "  pattern="^[a-zA-Z0-9]{3,8}$" title="Saisir 3 caractères au minimum"  required>
        
                       

        <input type="password"  class="form-control" name="id" id="id"  maxlength='10'  placeholder="etat" pattern="^[a-zA-Z0-9]{3,8}$" title="Saisir 1 caractères au minimum"  required>

</br>

       <button type="submit">modifier</button>



                </form>
           </section>         
       </div>  

       
</body>
</html>
<?php
include("fin.inc.php");
?>