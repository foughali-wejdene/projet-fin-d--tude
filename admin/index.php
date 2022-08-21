<?php
//condition : on peux accéder uniquement si la session est crée et contient des informations 
session_start();

require("../config/commandes.php");
/*
if(!isset($_SESSION['xRttpHo0greL393']))
{
    header("Location: ../login.php");
}
//si il est vide
if(empty($_SESSION['xRttpHo0greL393']))
{
    header("Location: ../login.php");
}
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    foreach($_SESSION['xRttpHo0greL393'] as $i){
      $nom = $i->pseudo;
      $email = $i->email;
    }*/
    //sécuriser le site


 
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
          <a class="nav-link active" style="font-weight: bold;" aria-current="page" href="../admin/">Nouveau</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="supprimer.php">Suppression</a>
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
    <label for="exampleInputEmail1" class="form-label">L'image du produit</label>
    <input type="name" class="form-control" name="image" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Réference</label>
    <textarea class="form-control" name="ref" required></textarea>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nom du produit</label>
    <input type="text" class="form-control" name="nom" required> 
  </div>

  <div class="mb-3">
    
  <label for="exampleInputPassword1" class="form-label">Taille</label><br>
    <select name="taille">
        <option value="S">S</option>
        <option value="M">M</option>
        <option value="L">L</option>
        <option value="XL">XL</option>
    </select><br><br>
  </div> 

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">couleur</label><br>
    <input type="text" class="form-control" name="couleur" placeholder="la couleur du produit"> <br><br>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">nombre de produits </label>
    <input type="number" class="form-control" name="nbp" required></textarea>
  </div>

   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Prix</label>
    <input type="number" class="form-control" name="prix" required>
  </div>

   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <textarea class="form-control" name="desc" required></textarea>
  </div>



  <button type="submit" name="valider" class="btn btn-success">Ajouter un nouveau produit</button>
</form>
                </div>
            </div>
        </div>
</body>
</html>
<?php
  
?>