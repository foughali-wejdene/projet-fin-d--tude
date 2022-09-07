<?php 

require("config/commandes.php");
error_reporting(E_ALL);
ini_set("display_errors", 1);

        
 //verifier si une session existe
 if(!isset($_SESSION)){
    //si non demarer la session
    session_start();
 }
 //creer la session
 if(!isset($_SESSION['panier'])){
    //s'il nexiste pas une session on créer une et on mets un tableau a l'intérieur 
    $_SESSION['panier'] = array();
 }

//récuperer id

$Produits=afficher();

if(isset($_GET['id'])){
    
    if(!empty($_GET['id']) OR is_numeric($_GET['id']))
    {
        $id = $_GET['id'];
            //verifier grace a l'id si le produit existe dans la base de  données
            //ajouter le produit dans le panier ( Le tableau)

            //ajouter le produit dans le panier ( Le tableau)

            if(isset($_SESSION['panier'][$id])){// si le produit est déjà dans le panier
                $_SESSION['panier'][$id]++; //Représente la quantité 
            }else {
                //si non on ajoute le produit
                $_SESSION['panier'][$id]= 1 ;
                var_dump($_SESSION['panier']);
            }

        //redirection vers la page index.php
        header( "Location: panier.php?id={$_SESSION['id']}" );


  

    } 
                }
?>
