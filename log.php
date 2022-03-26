<?php
   try{
      $pdo=new PDO("mysql:host=localhost;dbname=tholdi",'root', 'root');
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }
?>