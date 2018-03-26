<?php

       // Connect to the database for the entry of the CSV stuff into the database.
      $dbhost = 'localhost';
      $dbuser = 'dz4_davidzhou9';     // CHANGE IT TO YOUR DATABASE USER NAME
      $dbpass = 'Dmzhou20807!';            // CHANGE IT TO YOUR DATABASE PASSWORD

      $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error connecting to mysql');

      $dbname = 'dz4_test';     // CHANGE IT TO YOUR DATABASE NAME
      mysql_select_db($dbname);
      
?>
