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
.product{
  position: relative;
  cursor: pointer;
  overflow: hidden;
  -ms-user-select: none;
  user-select: none;
}
.prix_normal {
  text-decoration: none;
  color: #d9c6c3;
  color: #89706c;
  font-weight: bold;
  font-weight: 600;
  font-size: 18px;
  font-style: italic;
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
      <div class="row m-0 col-12 mt-n4 ">
      <?php foreach($Produits as $produit)
         {  
      ?> 
        <div class="p-1 p-md-3 col-6 col-lg-4 col-md-6 mb-lg-0 pb-4 AFiltrer" style = "padding-bottom: 1.5rem !important;">
          <div class="card card-cascade narrower card-ecommerce" style = " font-size: 1.6em; font-weight: 400;border: 0; box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);">
            <div class="product">
          <a href="produit.php?pdt=<?= $produit->id ?>">
              <img src="<?= $produit->image ?>" style="width: 100%">
          </a>
          <div class="card-body card-body-cascade text-center m-1" style = "  padding: 2px;"> 
          <div class="card-text cardTextLibelle" >
            <a href="produit.php?pdt=<?= $produit->id ?>"><?= $produit->nom ?> </a>
     
            
            <div class="card-footer px-1" >
            <span class="float-left font-weight-bold" style="font-weight: 700 !important;">
                <span class="prix_normal" style="font-size: 14px !important;line-height: 10px !important;"> <?= $produit->prix ?> € </span>
              </span>
              <?php if(isset($_SESSION['id'])){?>
            <span style = "float: right !important;" >
                  <a type="button" data-target="#modalAjouterPanier-1"
                  data-original-title="Ajouter au panier la référence Noir Taille Unique" style = "transition: .4s;"   href="produit.php?pdt=<?= $produit->id ?>">
                  <a href="ajouter_panier.php?id=<?= $produit->id ?>"  >
                        <i class="bx bx-cart"style = "width: 20px !important; height: 20px !important;font-size: 1.6em;margin-top: -20px;"></i>
                    </a>
            </span>
            <?php }else{ ?>

              <span style = "float: right !important;" >
                  <a type="button" href="ajouter_panier.php?id=<?= $produit->id ?>">
                  <a href="compte_client.php"  >
                        <i class="bx bx-cart"style = "width: 20px !important; height: 20px !important;font-size: 1.6em;margin-top: -20px;"></i>
                    </a>
            </span>

              <?php } ?>
      </div>
              </div>
            </div> </div>
          </div>
        </div>
        <?php } ?>


      </div>
    </div>
  </div>

</main>

  </body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
<script src="./js/slider.js"></script>
<script src="./js/index.js"></script>
</html>