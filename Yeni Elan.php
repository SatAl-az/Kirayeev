<?php
session_start();
if(isset($_SESSION['user']) == null) {
      header('Location:./Signingin.php'); 
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Yeni Elan Yarat</title>
   <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<form  action="./additem.php" method="post" enctype="multipart/form-data">
     
      <label>Məhsulun adı</label>
      <input type="text" placeholder="Məsulun Adı"  name="Name">
      <label>Məhsulun Qiyməti</label>
      <input type="number" maxlength="9" placeholder="Məhsulun Qiyməti" name="Price">
      <br><br>
      <label>Mənzilin yerləşdiyi ərazi:</label><br>      
      <select class="dropdown" name="menu" id="">
      <option value="Baki">Bakı</option>
      <option value="Gence">Gəncə</option>
      <option value="Sumqayit">Sumqayıt</option>
      <option value="Zaqatala">Zaqatala</option>
      <option value="Yevlax">Yevlax</option>
      <option value="Susa">Şuşa</option>
      </select><br><br>
      <label>Məhsul Haqda Məlumat</label>
      <input type="TextArea" placeholder="" name="Description">
      <label>Məhsulun Şəkli</label>
      <input type="file" name="Photo">
      <label>Əlaqə Nömrəsi</label>
      <input type="number" placeholder="Əlaqə Nömrəsi" name="PhoneNumber" required>
     
      

      
  
      
      <button type="submit">Məhsulu Əlavə Et</button>
            <p><
      <a  href="./index.php">Geri Qayıt</a>
      </p>
   
      <p><
      <a href="./register.php">Hər hansı bir elanı yerləşdirmək üçün qeydiyyatdan keçməlisiniz</a>
      </p>


</body>
</html>