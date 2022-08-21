<?php

    require("config/commandes.php");
    error_reporting(E_ALL);
    ini_set("display_errors", 1);


//condition pour voir si l'utilisateur entre des bonnes valeurs
//si le formulaire est envoyé
    if(isset($_POST['forminscription']))
    {
       
        if(isset($_POST['pseudo']) AND isset($_POST['mail']) AND isset($_POST['mail2']) AND isset($_POST['mdp']) AND isset($_POST['mdp2']) )
        {
        //si les autres variable de formulaire sont pas vide
        if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']))
        {

            $pseudo = htmlspecialchars(strip_tags($_POST['pseudo']));
            $mail = htmlspecialchars(strip_tags($_POST['mail']));
            $mail2 = htmlspecialchars(strip_tags($_POST['mail2']));
            //hacher le mdp 
            $mdp = sha1(strip_tags($_POST['mdp']));
            $mdp2 = sha1(strip_tags($_POST['mdp2']));

            $pseudolenghth = strlen($pseudo);
            
            if($pseudolenghth <= 255){
               
                    if($mail == $mail2){
                         //
                        if(filter_var($mail, FILTER_VALIDATE_EMAIL)) 
                        {

                            if(verifmail($mail) == 0 )
                            {
                                
                            
                          
                            if($mdp == $mdp2){
                                    //si il y'a un problème il affiche un msg 
                                    try 
                                    {
                                        ajoutermember($pseudo, $mail, $mdp);
                                    header('Location: connexionuser.php');
                                    } 
                                    catch (Exception $e) 
                                    {
                                        $e->getMessage();
                                    }
                                    //$ ['comptecree'] = "votre compte a bien été créer";  
                            }
                            else{
                                $erreur = "Vos mots de passes ne correspondent pas ";
                            }
                        }
                        else{
                            $erreur = "Adresse email déja utilsé";
                    }
                        }else{
                            $erreur = "Votre adresse mail n'est pas valide";
                        } 
                    }else{
                        $erreur = "Vos adresses mails ne correspondent pas ";
                    }



            }else{
                $erreur = "Votre pseudo ne doit pas dépasser 255 caractères. ";
            }

            
        }else
        {
            //stocker l'erreur dans une variable puisque c'est une suite d'operation de condtion de test
            $erreur = "Tous les champs doivent être complétés !";
        
    }
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
    <div align="center">
    </br></br></br>
    </br></br></br>
        <h2>Inscription</h2>
            <br/> <br/> <br/>
            <form  method="post"  style = "text-align: center;">

                       
                        <input  style = "font-size: 20px; margin-left: 2rem; width: calc(60% - 2rem); height: 25px" type="text" placeholder="votre pseudo" id="pseudo" name="pseudo" value = "<?php if (isset($pseudo)) { echo $pseudo; }?>">

                        </br></br></br>
                       
                        <input  style = "font-size: 20px; margin-left: 2rem; width: calc(60% - 2rem); height: 25px"  type="email" placeholder="votre mail" id="mail " name="mail" value = "<?php if (isset($mail)) { echo $mail; }?>">
                        </br></br></br>
                        
                        <input style = "font-size: 20px; margin-left: 2rem; width: calc(60% - 2rem); height: 25px"  type="email" placeholder="Confirmez votre mail" id="mail2 " name="mail2" value = "<?php if (isset($mail2)) { echo $mail2; }?>">
  
                        </br></br></br>
                        <input style = "font-size: 20px; margin-left: 2rem; width: calc(60% - 2rem); height: 25px"  type="password" placeholder="votre Mot de passe" id="mdp" name="mdp">

                        </br></br></br>
                     
                        <input  style = "font-size: 20px; margin-left: 2rem; width: calc(60% - 2rem); height: 25px"  type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2">
                        <br /></br></br></br>
                        <div class="text-center" style="text-align: center !important;">
                    <input class="bouton"  type="submit" value = "Je m'inscris" name="forminscription"
                    style = "display: inline-block; width: 536px; height: 30px; background: rgba(255, 167, 147, 0.68) !important; position: relative; cursor: pointer; border-radius: 100em;"
                    />
                        </div>
                
            <br />
        </form>
        <?php
        // si existe
         if (isset($erreur))
         {
             echo '<font color = "red">' .$erreur."</font>";
         }
        ?>
    </div>
        </main>
</body>
</html>