<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Auth and Regisration</title>
   <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
   <form  action="./vendor/signup.php" method="post" enctype="multipart/form-data">
      <label>Adınız</label>
      <input type="text" placeholder="Adınız" name="full_name">
      <label>Username or Login</label>
      <input type="text" placeholder="Username or Login" name="login">
      <label>Elektron Poçt Ünvanı</label>
      <input type="email" placeholder="Email" name="email">
      <label>Profil Şəkli</label>
      <input type="file" name="avatar">
      <label>Şifrə</label>
      <input type="password" placeholder="Şifrə" name="password">
      <label>Şifrəni Təkrarla</label>
      <input type="password" placeholder="" name="password_confirm">
      <button type="submit">Qeydiyyatdan Keç</button>
      <p>
         Hesabınız Var? - <a  href="./Signingin.php">Daxil Olun</a>
      </p>
      <p><br>
      <a  href="./index.php">Hesabsız davam etmək istəyirsiz?</a>
      </p>


      
      <?php
         if(
            isset($_SESSION['message'])) {
            echo '<p  class ="msg">' . $_SESSION['message'] . '</p>';
         } 
            unset($_SESSION['message']);
      ?>
   </form>
</body>
</html>