<?php
   try{
      $pdo=new PDO("mysql:host=172.31.2.110;dbname=tholdi",'webserver', '@Xazerty1');
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }
?>