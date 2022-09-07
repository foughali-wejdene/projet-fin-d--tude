<?php
session_start();    
include "commun/header.php"; 
//si dans la session de l'utilisateur il y'a une variable panier 
//cette variable permet de rajouter des produits dans le panier 



?>

<!doctype html>
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
.col-md-5 {
  flex: 0 0 auto;
  width: 30%;
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
.flex-center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
}
.col-10 {
  -ms-flex: 0 0 83.333333%;
  flex: 0 0 83.333333%;
  max-width: 83.333333%;
}
.btn-rounded, .counter {
  border-radius: 10em;
  color: white;
  padding: 10px;
  font-size: 20px;
  width: 100%;
}
.justify-content-center {
  -ms-flex-pack: center !important;
  justify-content: center !important;
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
#imgPrincipale {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}
.scroll-h-300 {
  position: relative;
  overflow-y: auto;
  height: 300px;
}
.block:hover {
  background-color: #ddd;
  color: black;
}
.titre_2, .titre_2b {
  text-align: left;
  color: #000000;
  font-size: 16px;
}
.choixReference li {
  float: left;
  text-align: center;
  min-width: 40px;
  min-height: 40px;
  line-height: 40px;
  font-size: 20px;
  border: 1px solid #4B4B4B;
  margin-right: 18px !important;
  margin: .5rem;
  padding: 0 .5em 0 .5em;
  margin: auto;
}
.choixReference {
  list-style-type: none;
  margin: 0;
  height: auto !important;
  justify-content: center;
  padding-inline-start: initial;
}
.ui-state-active {
  background-color: #FFF3CE !important;
  color: #000000 !important;
}
.text_couleur {
  font-size: 24px;
  text-align: center;
  font-weight: lighter;
  margin-top: 3px;
  margin-right: 18px;

}
.offreArticle {
  background-color: #FFF3CE !important;
  color: #000000 !important;
  font-size: 16px;
  line-height: 16px;
  text-align: center;
}
.accordion > .card:last-of-type {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.md-accordion .card:first-of-type, .md-accordion .card:not(:first-of-type):not(:last-of-type) {
  border-bottom: 1px solid #e0e0e0;
}
.accordion > .card:first-of-type {
  border-bottom: 0;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.md-accordion .card {
  overflow: visible;
  box-shadow: none;
  border-bottom: 1px solid #e0e0e0;
  border-radius: 0;
}
.card {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 1px solid rgba(0,0,0,.125);
  border-radius: .25rem;
}
</style>
</head>
<body style="background-image: url(./images/back.png); background-size: cover;">
    
      <main>

        <div class="container" style="display: flex; justify-content: center">
        </br></br></br></br></br></br>
            <div class="row">
                  <?php foreach($Produits as $produit)
                              { if($produit->id == $id){ ?> 
                      <div class="col-3 col-sm-4 col-md-2 noPadding">
                      </br></br></br></br></br></br>
                          <div id="ImagesMiniature" class="col-12 scrollable scroll-h-300 scrollbar-rare-wind">
                                <div class="row">
                                    <div class="col-md-12">
                                          <div id="lightboxID" class="mdb-lightbox">
                                          <figure class="col-sm-12 col-md-6">
                                                  <a data-size="800x1200">
                                                    <img class="img-fluid z-depth-1" src="<?= $produit->image ?>">
                                                  </a>
                                              </figure>
                                              <figure class="col-sm-12 col-md-6">
                                                  <a data-size="800x1200">
                                                    <img class="img-fluid z-depth-1" src="<?= $produit->image2 ?>">
                                                  </a>
                                              </figure>
                                              <figure class="col-sm-12 col-md-6">
                                                  <a data-size="800x1200">
                                                    <img class="img-fluid z-depth-1"src="<?= $produit->image3 ?>">
                                                  </a>
                                              </figure>
                                              <figure class="col-sm-12 col-md-6">
                                                  <a data-size="800x1200">
                                                    <img class="img-fluid z-depth-1" src="<?= $produit->image4 ?>">
                                                  </a>
                                              </figure>
                                          </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                         

                      <div class="col-9 col-sm-8 col-md-5">
                            </br></br></br></br></br></br>
                            <img id="imgPrincipale" src="<?= $produit->image ?>" style="width: 100%;">
                      </div>
                      <div class="col-12 col-md-5" >
                            </br></br></br></br></br></br>
                            <div class="row" style ="" >
                                <div class="col-12 mt-md-0 mt-sm-3" >
                                    <h1><?= $produit->nom ?></h1>
                                </div>
                            <div class="col-6 text-left mt-md-0 titre_2"> Réf : <?= $produit->ref ?> </div>
                                <div class="col-6 text-right">
                                    <span class="prix_normal" ><?= $produit->prix ?> €</span>
                                </div>
                            <div class="col-12 mt-2">
                              <div class="text_couleur titre_2b">
                                  <?= $produit->couleur ?>
                              </div>
                                <ul class="row choixReference ui-sortable flex-center"> 
                                <li class="ui-state-default listeReference ui-state-active">
                                  <?= $produit->taille ?></ul>
                            </div>
                         
                            
                           
                                 
                                    
                                    <div class="col-12 mb-3 AjouterAuPanierPrincipal">
                                      <div class="justify-content-center row">
                                        <div class="col-10 AjouterAuPanierPrincipal"> 
                                        <a href="ajouter_panier.php?id=<?= $produit->id ?>"></br></br><button class="btn btnInput btn-block btn-rounded btn-dark waves-effect waves-light"  type="button">AJOUTER AU PANIER</button></a>
                                            
                                              
                                            
                                        </div> 
                                      </div> 
                                    </div> 
                                    <div class="container offreArticle">
                                      <div class="col-12 m-2" >
                                        <div class="offreArticle">
                                        LIVRAISON OFFERTE EN POINT RELAIS PICKUP CHRONOPOST EN 24H A PARTIR DE 100 € D'ACHAT EN FRANCE METROPOLITAINE
                                        </div> 
                                      </div> 
                                    </div>
                                    
                                    <div class="col-12">
                                      <div class="accordion md-accordion">
                                      </br></br>
                                        <div class="c"> 
                                        
                                          <div class="card-header pl-0">
                                            
                                            <h5 class="mb-0 letterSpacing7" >DESCRIPTION </h5>
                                          </div>
                                          <div class="collapse show " >
                                            <?= $produit->description ?>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                      </div>
                  </div>
                </div>
                          <?php }} ?>
            </div>
        

      </main>
</body>
</html>