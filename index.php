<?php
session_start();
include "commun/header.php";      
//print_r($_SESSION['id']);


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
    
  
<main>
    <div class = "home" >
        <h1 class = "titre" style = "font-family: 'Abel'; color: #3F3F3F; height: 90px; line-height: 80px;text-align: center;"> CHEZ WIK </h1>
                <div class="container" style="display: flex; justify-content: center">


                    <div style = "font-family: 'Work Sans';font-style: normal;font-weight: 40px;font-size: 15px;  margin-top: 150px;margin-right: 20px;">
                            <a href="shop.php" >SHOP NOW</a>    
                    </div>   
                    <?php foreach($Produits as $produit){ 
                        if($produit->id == 3){
                    ?> 
                            <div class="col-md-8" >
                                    <img style="float: left; width: 30%" src="<?= $produit->image ?>" style="width: 20%">  
                        </div>    

                    <?php }} ?>

                </div>
                        </br> </br>  </br>  </br>  </br>

                <div class="container" style="display: flex; justify-content: center">
                   
                    <?php foreach($Produits as $produit){ 
                        if($produit->id == 10){
                    ?> 
                            <div class="col-md-8" >
                                    <img style="float: left; width: 30%; margin-right: 360px;" src="<?= $produit->image ?>" style="width: 20%">  
                                    <p style = "font-family: 'Work Sans';font-style: normal;font-weight: 40px;font-size: 15px;  margin-top: 150px;">Bringing fashion back to its original and classic form</p>  
                            </div>      

                    <?php }} ?>

                </div>

                </br> </br>  </br>  </br>  </br>

                <div class="container" style="display: flex; justify-content: center">
                
                    <?php foreach($Produits as $produit){ 
                        if($produit->id == 7){
                    ?> 
                            <div class="col-md-8" >
                                    <img style="float: left; width: 30%; margin-right: 360px;" src="<?= $produit->image ?>" style="width: 20%">  
                                    <p style = "font-family: 'Work Sans';font-style: normal;font-weight: 40px;font-size: 15px;  margin-top: 150px;">Bringing fashion back to its original and classic form</p>  
                            </div>      

                    <?php }} ?>

                </div>
    </div>
    
</main>


  </body>
</html>
<?// }
?>