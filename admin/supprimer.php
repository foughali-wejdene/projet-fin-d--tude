<?php

require("../config/commandes.php");

    $Produits=afficher();

/*session_start();

if(!isset($_SESSION['xRttpHo0greL393']))
{
    header("Location: ../login.php");
}

if(empty($_SESSION['xRttpHo0greL393']))
{
    header("Location: ../login.php");
}
    require("../config/commandes.php");
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    $Produits=afficher();

foreach($_SESSION['xRttpHo0greL393'] as $i){
    $nom = $i->pseudo;
    $email = $i->email;
  }
  */
?>
<!doctype html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="../">WIK</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="../admin/afficher.php">Produits</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../admin/">Nouveau</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" style="font-weight: bold;" href="supprimer.php">Suppression</a>
        </li>

      </ul>
      <div style="margin-right: 500px">
        <h5 style="color: #545659; opacity: 0.5;">Connecté en tant que: <?= $nom ?></h5>
      </div>
      
      <a class="btn btn-danger d-flex" style="display: flex; justify-content: flex-end;" href="deconnexion.php">Se deconnecter</a>

    </div>
  </div>
</nav>
<div class="album py-5 bg-light">
    <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <form method="post">
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">identifiant de produit</label>
    <input type="number" class="form-control" name="idproduit" required>
    </div>

<button type="submit" name="valider" class="btn btn-primary">Supprimer le produit</button>
</form>
                </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        <?php foreach($Produits as $produit): ?> 
            <div class="col">
                <div class="card shadow-sm">
                <img src="<?= $produit->image ?>" style="width: 100%">
                <div style="margin: 0 0 30px 0;"> </div>
                    <h3><?= $produit->id ?></h3>
                <div class="card-body" >
                  
            </div>
          </div>
        </div>
        <?php endforeach; ?>

        
                </div>
            </div>
        </div>



</body>
</html>
<?php
//vérifier les données 
    if(isset($_POST['valider']))
    {
        if(isset($_POST['idproduit']))
        {
            //vérifier si  les données sont pas vide et que c'est un caractère numérique
            if(!empty($_POST['idproduit']) AND is_numeric($_POST['idproduit']) ) 
            {
                //récuperer les données 
               
                $idproduit = htmlspecialchars(strip_tags($_POST['idproduit']));
                
            //script_tags c pour filtrer les données

            //si il y'a un problème il affiche un msg 
            try 
            {
              supprimer($idproduit);
              //header('Location: afficher.php');
            } 
            catch (Exception $e) 
            {
                $e->getMessage();
            }  
            }
        }
    }
?>