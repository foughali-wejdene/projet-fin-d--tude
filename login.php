<?php
//une fonction pour démarer la session
session_start();
include("config/commandes.php");
/*
if(isset($_SESSION['xRttpHo0greL393']))
{
    if(!empty($_SESSION['xRttpHo0greL393']))
    {
        header("Location: admin/afficher.php");
    }
}
*/
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - WIK</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
                <div class="col-md-6">


                    <form method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" style="width: 80%">
                        </div>

                        
                        <div class="mb-3">
                            <label for="motdepasse" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" name ="motdepasse" style="width: 80%">
                        </div>
                        <input type="submit" class="btn btn-danger" value= "Se connecter" name="envoyer">
                </form>


            </div>
        <div class="col-md-3"></div>
    </div> 

</body>
</html>

<?php
//récuperer es données
    //si on appuie sur se connecter 
    if(isset($_POST['envoyer'])) {
         // si il ne sont pas vide
       if( !empty($_POST['email']) and !empty($_POST['motdepasse'])){
        //POUR SÉCURISER LES VARIABLES AVEC HTMLSPECIALCHARS
        $email = htmlspecialchars ($_POST['email']);
        $motdepasse= htmlspecialchars($_POST['motdepasse']);


        $admin = getAdmin($email, $motdepasse);

        /*if($admin){
            //créer une session
            $_SESSION['xRttpHo0greL393'] = $admin;
            //dériger l'utilisateur qui a mis les veritable information vers la page admin 
            header("Location: admin/");
        }
        else{
            echo " Problème de connxion";
        }*/
       } 

    }
?>