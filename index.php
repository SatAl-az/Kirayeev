<?php
   require_once('./vendor/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Bebas+Neue&family=Exo+2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Mukta:wght@200;300;400;500;600;700;800&family=Open+Sans:wght@300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&family=Rubik+Burned&family=Russo+One&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
   <title>KirayəEv.az</title>
</head>
<body>
   <header class="header">  
         <div class="nav">
               <div class="container">
                  <div class="navbar__wrapper">
                  <div class="nav__left">
                  <div class="nav__left__link"><a href="https://turbo.az/">Turbo.az  </a></div>
                  <div class="nav__left__link"><a href="https://bina.az">Bina.az  </a></div>
                  <div class="nav__left__link"><a href="https://boss.az">Boss.az  </a></div>
                  <div class="nav__left__link"><a href="https://tap.az/">Tap.az</a></div>
               </div>
               <div class="nav_right">
                  <div class="nav_right__link">
                     <a href=""></a>
                  </div>
                  <div class="nav_right__link">
                     <a href="">Yardım</a>
                  </div>
                  <div class="nav_right__link icon_nav">
                     <div class="hearth">♥</div>
                     <a href="">Seçilmişlər</a>
                  </div>
                  <div class="nav_right__link icon_nav">
                  <?php 
                        if(isset($_SESSION['user']) == null) {
                        echo "<div class=\"icon\"><img src=\"./assets/icons/images.png\" alt=\"\"></div>";
                        echo "<a href=\"Signingin.php\">Giriş</a>";
                        } else {
                        session_start();
                        $avatar = $_SESSION['user']['avatar'];
                        echo "<div class=\"icon\"><img src=\"$avatar\" alt=\"\"></div>";
                        echo " <a href=\"vendor/logout.php\">Çıxış</a>";
                         }
                     ?>
                     
                  </div>
               </div>
            </div>
         </div>
     </div>
      <div class="navbar__section">
         <div class="container">
            <div class="navbar__section__wrapper">
               <div class="logolink"><a href="./index.php">Kirayələ.az</a></div>
               <div>
                  <div outline="none" class="dropdown">
                  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                     Kataloq
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                     <li><a class="dropdown-item" href="#">Action</a></li>
                     <li><a class="dropdown-item" href="#">Another action</a></li>
                     <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                  </div>
               </div>
               <div>
               <form class="search__form" action="">
                  <input type="search" name="" id="" placeholder="Kirayə mənzil axtarışı">
                  <div class="dropdown btn-secondary">
                     <select class="dropdown" name="" id="">
                        <option>Şəhər</option>
                        <option value="">Bakı</option>
                        <option value="">Gəncə</option>
                        <option value="">Sumqayıt</option>
                     </select>
                  </div>
                  <div class="search__button">
                     <button>Tap</button>
                  </div>
               </form>
            </div>
               <div class="catalog__button"><button onclick="window.location.href='./Yeni Elan.php'" ><i class="fa fa-plus" aria-hidden="true"></i><a>Yeni elan</a> </button></div>
            </div>
         </div>
      </div>
   </header>
   <section class="catalog">
     <div class="container">
         <div class="catalog__wrapper">
                
            
            <a href=""class="catalog__item">
               <div class="catalog__item__icon">
               <img src="./assets/images/building-11520.png" alt="">
               </div>
               <div class="catalog__item__title">
                  Bina Evi
               </div>
            </a>
            <a href="" class="catalog__item">
               <div class="catalog__item__icon">
               <img src="./assets/images/businesss.png" alt="">
               </div>
               <div class="catalog__item__title">
                  Həyət Evi
               </div>
            </a>
            <a href="" class="catalog__item">
               <div class="catalog__item__icon">
                  <img src="./assets/images/hobbies.png" alt="">
               </div>
               <div class="catalog__item__title">
                  Digər
               </div>
            </a>
          <div class="announcements__vip">
         
            <div class="announcements__wrapper">
               <?php
                  $goodFetch = $dbh->prepare("SELECT * FROM sellinglist");
                  $goodFetch->execute();
                  
               ?> 
                  <div class="announcements__item">
                     <img src="<?='uploads/'.$goodFetchs["img"]?>" alt="">
                     <div class="add__favorites"><i class="fa-regular  fa-heart" aria-hidden="true"></i></div>
                     
            
          
        
         </div>
     </div>
   </section>
   <br>
   <br>

<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>


   
   
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>