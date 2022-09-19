<?php
   session_start();
   require_once "./connect.php";
  

   $full_name = $_POST["full_name"];
   $login = $_POST["login"];
   $email = $_POST["email"];
   $password = $_POST["password"];
   $password_confirm = $_POST["password_confirm"];


   if($password === $password_confirm) {
      $path = 'uploads/' . time() .$_FILES['avatar']['name'];
      if(!move_uploaded_file($_FILES['avatar']['tmp_name'], './' . $path)) {
 
         header('Location: ../register.php');
      }
      session_start();
      
      mysqli_query($connect, "INSERT INTO `userdata` 
      (`login`, `password`, `email`, `full_name`, `avatar`) 
      VALUES ( '$login', '$password', '$email', '$full_name', '$path')");
      $_SESSION['message'] = 'Qeydiyyat uğurla bitmişdir';
      header('Location: ../index.php');
   } else {
      $_SESSION['message'] = 'Şifrələr uyğun deyil';
      header('Location: ../register.php');
   } 
?>




