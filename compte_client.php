<?php
session_start();    
include "commun/header.php"; 

?>
<!DOCTYPE html>
<html lang="en">
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
        <h1 class = "titre" style = "font-family: 'Abel'; color: #3F3F3F; height: 90px; line-height: 80px;text-align: center;"> CONNEXION </h1>
        <div class="row2" style = "display: flex; -ms-flex-wrap: wrap; flex-wrap: wrap; margin-right: -15px; margin-left: -15px;">
            <div class="col-md-6 col-sm-12 col-six" style="min-height: 100px; border-bottom: 1px solid #BEBEC0; border: 1px solid #BEBEC0; text-align: center; padding-top: 20px; padding-bottom: 20px;">

		        <h1 style = "min-height: 40px;"> IDENTIFIEZ<br>VOUS	 </h1>
                    <p>Accéder à votre compte</p>

                <div class="text-center" style="text-align: center !important;">
                    <a class="bouton" href = "connexionuser.php" text = connexion style = "display: inline-block; width: 536px; height: 30px; background: rgba(255, 167, 147, 0.68) !important; position: relative; cursor: pointer; border-radius: 100em;"> 
                    
                    <p style="font-size: 17px; line-height: 32px; text-align: center;color: black !important;">Me Connecter </p> 
                </a>

                </div>
</div>
            <div class="col-md-6 col-sm-12 input_gris col-six" style="in-height: 100px; float: right; border-bottom: 1px solid #BEBEC0; border: 1px solid #BEBEC0; text-align: center; padding-top: 20px; padding-bottom: 20px;flex: 0 0 50%; max-width: 50%;">
                   <h1 style = "in-height: 40px;">CREATION DE<br>COMPTE</h1>
                        <p>Vous n'avez pas encore de compte chez BlooShop ?</p>
                        <div class="text-center" style="text-align: center !important; ">
                <a class="bouton" href = "inscription.php" style = "display: inline-block; width: 536px; height: 30px; background: rgba(255, 167, 147, 0.68) !important; position: relative; cursor: pointer; border-radius: 100em;">
                
                <p style="font-size: 17px; line-height: 32px; text-align: center;color: black !important;">Créer mon compte </p>
            </a>

            


            </div>

            </div>
       </div>
    </div>
</main>

</body>
</html>