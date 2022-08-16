<?php

require("config/commandes.php");
error_reporting(E_ALL);
ini_set("display_errors", 1);
  $Produits=afficher();

  session_start();


?>
<!doctype html>
<html lang="fr">
  <head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WIK</title>
    <!-- Boxicons -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <!-- Glide js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.css">
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="css/styles.css" />
  



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>



  </head>
  <body style="background-image: url(./images/back.png); background-size: cover;">
    
  <header>
        <!-- Top Nav -->
        
        <div class="navigation">
            <div class="nav-center container d-flex">
                <a href="index.php"class="logo">
                    <h1>WIK</h1>
                </a>

                <ul class="nav-list d-flex">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="shop.php" class="nav-link">SHOP</a>
                    </li>
                   
                    <li class="nav-item">
                        <a href="about.html" class="nav-link">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">ACOUNT</a>
                    </li>


                </ul>

                <div class="icons d-flex">
                    <a href="login.php" class="icon">
                        <i class="bx bx-user"></i>
                    </a>
                    <a href="search.html" class="icon">
                        <i class="bx bx-search"></i>
                    </a>
                    <div class="icon">
                        <i class="bx bx-heart"></i>
                        <span class="d-flex">0</span>
                    </div>
                    <a href="cart.html" class="icon">
                        <i class="bx bx-cart"></i>
                        <span class="d-flex">0</span>
                    </a>
                    <a href="deconnexion.php" class="icon">
                        <i class="bx bx-log-out"></i>
                    </a>
                </div>

                <div class="hamburger">
                    <i class="bx bx-menu-alt-left"></i>
                </div>
            </div>
        </div>
        
    </header>

<main>
    <div class = "home" >
        <h1 class = "titre" style = "font-family: 'Abel'; color: #3F3F3F; height: 90px; line-height: 80px;text-align: center;"> CHEZ WIK </h1>
    </div>
</main>


  </body>
</html>