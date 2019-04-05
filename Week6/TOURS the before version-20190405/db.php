<?php
$host = 'localhost' ;
  $dbUser = 'root' ;
  $dbPass = '' ;
  $dbName = 'tours' ;
  
 
$db = new MySQL( $host, $dbUser, $dbPass, $dbName ) ;
$db->selectDatabase();
?>
