<?php
  
  $connect = mysqli_connect("localhost", "root", "", "userdata");
  if(!$connect) {
     die("Error connect to DATA BASE");
  }  

  $name = $_POST["Name"];
  $Price = $_POST["Price"];
  $Description = $_POST["Description"];
  $Number = $_POST["PhoneNumber"];
  $Location = $_POST["menu.value"];
  $Photo = 'uploads/' . time() .$_FILES['Photo']['Name'];

if(isset($_SESSION['user']) == null) {
  header('Location:./Signingin.php'); 
}
else
{ 
  session_start();
  mysqli_query($connect, "INSERT INTO `sellinglist` 
  (`Name`, `Price`, `Description`, `PhoneNumber`, `Photo`) 
  VALUES ( '$Name', '$Price', '$Description', '$Number', '$Photo')");
  $_SESSION['message'] = 'Elan Yerləşdirildi';
  header('Location: ./index.php'); 
}

?>
