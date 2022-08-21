<?php

session_start();
include "commun/header.php";     

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
    <link rel="stylesheet" href="./css/styles.css" />
  



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }

.block {
  display: block;
  width: 100%;
  border: none;
  background-color: #04AA6D;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}

.block:hover {
  background-color: #ddd;
  color: black;
}
</style>
</style>

    
  </head>
  <body style="background-image: url(./images/back.png); background-size: cover;">
    
  
<main>
<div class = "home" >
        <h1 class = "titre" style = "font-family: 'Abel'; color: #3F3F3F; height: 90px; line-height: 80px;text-align: center;"> CHEZ WIK </h1>
    </div>

  <div class="album py-5 bg-light" style="background-image: url(./images/back.png); background-size: cover;">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      <?php foreach($Produits as $produit): ?> 
        <div class="col">
          <div class="card shadow-sm">
          <a href="produit.php?pdt=<?= $produit->id ?>">
          <img src="<?= $produit->image ?>" style="width: 100%">
          </a>
          <div style="margin: 0 0 30px 0;"> </div>
          
            <h3><a href="produit.php?pdt=<?= $produit->id ?>"><?= $produit->nom ?> </a></h3>
           
            
            <div class="card-body" >
            <small class="text" style="font-weight: bold;"><?= $produit->prix ?> €</small>
              <div class="d-flex justify-content align-items" style = " padding-left: 150px; margin-top: -40px;">
                
               

                  <a href="produit.php?pdt=<?= $produit->id ?>">
                  <a href="cart.html" class="icon">
                        <i class="bx bx-cart"></i>
                    </a>
                
                
              </div>
            </div>
          </div>
        </div>
  <?php endforeach; ?>


      </div>
    </div>
  </div>

</main>

  </body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
<script src="./js/slider.js"></script>
<script src="./js/index.js"></script>
</html>