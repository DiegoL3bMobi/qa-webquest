<?php
   
   define('DBhost', 'localhost');
   define('DBuser', 'Sph3yinks');
   define('DBPass', 'lb#27^\Am0');
   define('DBname', 'quest_app_db');
 
   try {
  
     $DB_con = new PDO("mysql:host=".DBhost.";dbname=".DBname,DBuser,DBPass);
  
   } catch(PDOException $e){
  
        die($e->getMessage());
   }
 
?>