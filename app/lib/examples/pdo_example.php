<?php 

try {

  $pdo = new PDO("mysql:dbname=my_database; host=server_FQDN_or_server_IP; charset=utfmb4", "user", "password");

  // Same statement more readeable for a human :
  // $pdo = new PDO(
  //   // // "mysql:dbname=my_database; 
  //   // // host:server_FQDN_or_server_IP; 
  //   // // charset=utfmb4", 
  //   // // "user", 
  //   // // "password");
  
} catch (Exception $e) {

  die(`Erreur : ` $e->getMessage());

}