<?php
include "commun/header.php"; 
session_start();    


        //securiser la variable id (que des nombres)
       
        $userinfo = getIdUser($_SESSION['id']);
        $_SESSION['pseudo'] = $userinfo['pseudo'];
        //print_r(  $_SESSION['mailconnect'] );

        //die;



       
        
?>
<!DOCTYPE html>
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
    <link rel="stylesheet" href="css/style.css" />
  



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


</head>

<body style="background-image: url(./images/back.png); background-size: cover;" >

        
    </header>
    <main>
    <div class="container">
</br></br></br></br></br></br></br></br>
            <h1 class="" style="text-align: center; color=black !important;">MODIFICATION</h1>
            <form class="content-card" method="post">
                <input class="input" type="text" placeholder="Votre pseudo" name="newpseudo" value="<?=  $_SESSION['pseudo']?>" required>
              
                <input class="input" type="email" placeholder="Votre email" name="newemail" value="<?=  $_SESSION['mailconnect']?>" required>

                <input class="input" type="password" placeholder="Adresse mot de passe" name="newmdp" required>

                <button class="input" type="submit" name="modification">Modifier</button>

            </form>
        
    </div>
    </main>
</body>
</html>

<?php
//vérifier les données 
    if(isset($_POST['modification']))
    {
        if(isset($_POST['newpseudo']) AND isset($_POST['newemail']) AND isset($_POST['newmdp']))
        {
            //vérifier si  les données sont pas vide 
            if(!empty($_POST['newpseudo']) AND !empty($_POST['newemail']) AND !empty($_POST['newmdp']))
            {
                //récuperer les données 
                $newpseudo = htmlspecialchars($_POST['newpseudo']);
                $newemail = htmlspecialchars($_POST['newemail']);
                $newmdp= sha1($_POST['newmdp']);
            //script_tags c pour filtrer les données
            if(isset($_GET['id'])){
    
                if(!empty($_GET['id']) OR is_numeric($_GET['id']))
                {
                    $id = $_GET['id'];
                }
            }
            //si il y'a un problème il affiche un msg 
            try 
            {
                modifierUser($id, $newpseudo, $newemail, $newmdp);
                header("Location: index.php?id=".$_SESSION['id']);
            } 
            catch (Exception $e) 
            {
                $e->getMessage();
            }  


            
            }
        }
    }
?>
