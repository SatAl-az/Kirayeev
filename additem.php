<?php
  session_start();
  $connect = mysqli_connect("localhost", "root", "", "userdata");
  if(!$connect) {
     die("Error connect to DATA BASE");
  }  

  $Name = $_POST["Name"];
  $Price = $_POST["Price"];
  $Description = $_POST["Description"];
  $Number = $_POST["PhoneNumber"];

  $Photo = 'uploads/' . time() .$_FILES['Photo']['tmp_name'];

  
if(isset($_SESSION['user']) == null) {
  header('Location:./Signingin.php'); 
}
else
{ 

  mysqli_query($connect, "INSERT INTO `sellinglist` 
  (`Name`, `Price`, `Description`, `PhoneNumberOfSeller`, `Photo`) 
  VALUES ( '$Name', '$Price', '$Description', '$Number', '$Photo')");
  $_SESSION['message'] = 'Elan Yerləşdirildi';
  header('Location: ./index.php'); 
}

?>
