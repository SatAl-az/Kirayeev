<?php
   $connect = mysqli_connect("localhost", "root", "", "userdata");
   if(!$connect) {
      die("Error connect to DATA BASE");
   }
   $dbh = new PDO('mysql:host=localhost; dbname=userdata', "root", "");
?>