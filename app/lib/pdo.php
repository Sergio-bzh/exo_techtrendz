<?php 

try {

  $pdo = new PDO("mysql:dbname=".MYSQL_DATABASE."; host=".SERVER_NAME."; charset=utfmb4", MYSQL_USER, MYSQL_PASSWORD);
  
} catch (Exception $e) {

  die(`Erreur : ` $e->getMessage());

};

