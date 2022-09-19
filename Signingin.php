
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Auth and Regisration</title>
   <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
   <form  action="vendor/signin.php" method="post">
      <label>Username or Login</label>
      <input type="text" placeholder="Username or Login" name="login">
      <label>Şifrə</label>
      <input type="password" placeholder="Şifrə"  name="password">
      <button type="submit">Daxil Ol</button>
      <p>
         Hələdə Qeydiyyatdan Keçməmisiniz? - <a  href="/register.php">Qeydiyyatdan Keçmək</a>
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