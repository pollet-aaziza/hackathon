<?php
function getDataBase() {
   try {
     $db = new PDO('mysql:host=localhost;dbname=signing;charset=utf8', 'root', '');
   }
   catch (Exception $e){
     die('Erreur : ' . $e->getMessage());
   }
   return $db;
 }

?>
