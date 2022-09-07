<?php
session_start();    
include "commun/header.php"; 



   //supprimer les produits
   //si la variable del existe
   if(isset($_GET['del'])){
    $id_del = $_GET['del'] ;
    //suppression
    unset($_SESSION['panier'][$id_del]);
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
</br></br></br></br>
<section>
        <table>
            <tr>
                
                <th>Nom</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Action</th>
            </tr>
            <?php if(isset($_SESSION['id'])){?>
            <?php 
              $total = 0 ;
              // liste des produits
              //récupérer les clés du tableau session
              $ids = array_keys($_SESSION['panier']);
              //s'il n'y a aucune clé dans le tableau
              if(empty($ids)){
                echo "Votre panier est vide";
              }else {
                  
                //si oui 
                if (require("config/connexion.php"))
                    {
                        $produits = $access->prepare("SELECT * FROM produits WHERE id IN (".implode(',', $ids).")");
                        $produits->execute();
                      
                        $produits = $produits->fetchAll();
                       
                       // $produits->closeCursor();

                       
              
             
                //lise des produit avec une boucle foreach
                 foreach($Produits as $produit)
                              { 
                                if(($_SESSION['panier'][$produit->id])>0){
                    //calculer le total ( prix unitaire * quantité) 
                    //et aditionner chaque résutats a chaque tour de boucle
                    $total = $total + $produit->prix * $_SESSION['panier'][$produit->id] ;
                ?>
                <tr>
                    
                    <td><?= $produit->nom?></td>
                    <td><?= $produit->prix?>€</td>
                 <?php  ?>
                <td><?=$_SESSION['panier'][$produit->id]  // Quantité?></td>   
                <td><a href="panier.php?del=<?=$produit->id ?>"><img src="images/delete.png"></a></td>
                            <?php    } else {?>
                    <td></td>
                    <?php } ?>
                   
                </tr>

            <?php } } }?>

            <tr class="total">
                <td>Total : <?=$total?>€</td>
            </tr>
        </table>
    </section>
    <?php } ?>
</body>
</html>