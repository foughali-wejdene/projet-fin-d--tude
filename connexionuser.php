<?php
require("config/commandes.php");
error_reporting(E_ALL);
ini_set("display_errors", 1);

//concatination des conditions 
if(isset($_POST['formconnection'])) {
    // si il ne sont pas vide
  if( !empty($_POST['mailconnect']) and !empty($_POST['mdpconnect'])){
   //POUR SÉCURISER LES VARIABLES AVEC HTMLSPECIALCHARS
   $mailconnect = htmlspecialchars ($_POST['mailconnect']);
   
   $mdpconnect= sha1($_POST['mdpconnect']);
   $user = getUser($mailconnect, $mdpconnect);
  

   if($user){

    session_start();
    $_SESSION['id'] = $user['id'];
    
   
    $_SESSION['mailconnect']=$mailconnect ;
    
    //$_SESSION = json_decode(json_encode($object), true);
     
    //print_r($_SESSION['id']);
    //die;
    header("Location: index.php?id=".$_SESSION['id']);
   }else{
       $erreur = "Mauvais mail ou mot de passe";
   }

  } 
   else{
    $erreur = "Tous les champs doivent être complétés !";
   }
}
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
<header>
        <!-- Top Nav -->
        
        <div class="navigation">
            <div class="nav-center container d-flex">
                <a href="compte_client.php"class="logo">
                    <h1>WIK</h1>
                </a>

                <ul class="nav-list d-flex">
                    <li class="nav-item">
                        <a href="compte_client.php" class="nav-link">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="shop.php" class="nav-link">SHOP</a>
                    </li>
                   
                    <li class="nav-item">
                        <a href="about.html" class="nav-link">ABOUT US</a>


                </ul>

                <div class="icons d-flex">
                    <a href="compte_client.php" class="icon">
                        <i class="bx bx-user"></i>
                    </a>
                    <a href="search.html" class="icon">
                        <i class="bx bx-search"></i>
                    </a>
                    <div class="icon">
                    <a href="compte_client.php">
                        <i class="bx bx-heart"></i>
                        <span class="d-flex">0</span>
                    </div>
                    <a href="compte_client.php" class="icon">
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

    <div >
    </br></br></br>
    </br></br></br>
         <h1 class="title" style="font-size: 34px;">CONNEXION</h1>
            <form  method="post"  style = "text-align: center;">

                <input style = "font-size: 20px; margin-left: 2rem; width: calc(60% - 2rem); height: 25px" type="email" placeholder="votre mail" id="mailconnect " name="mailconnect" value = "<?php if (isset($mail)) { echo $mail; }?>"required>
                </br></br>
                <input style = "font-size: 20px; margin-left: 2rem; width: calc(60% - 2rem); height: 25px"  type="password" placeholder="votre Mot de passe" id="mdpconnect" name="mdpconnect" required>
                </br></br></br>
                <div class="text-center" style="text-align: center !important;">
                    <input class="bouton" text = connexion name = formconnection type="submit" 
                    style = "display: inline-block; width: 536px; height: 30px; background: rgba(255, 167, 147, 0.68) !important; position: relative; cursor: pointer; border-radius: 100em;" value = "Me Connecter"></input>

                </div>
                </br></br></br>
            </form>
  

                <?php
                // si existe
                if (isset($erreur))
                {
                    echo '<font color = "red">' .$erreur."</font>";
                }
                ?>
            </div>
      </div>
    </div>            
                </main>
</body>
</html>
