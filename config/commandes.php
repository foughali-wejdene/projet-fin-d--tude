<?php


function getProduit($id){

  if(require("connexion.php"))
  {
    
  $req = $access->prepare("select * from produits where id = ? ");
    

  $req->execute(array($id));

    if($req->rowCount() == 1){
      //dans ce cas je créer un variable qui va récuperer les informations en question

      $data = $req->fetchAll(PDO::FETCH_OBJ);

      return $data;

    }
    else {
      return false;
    }

  $req->closeCursor();

  }

}




function getIdUser($id){

  if(require("connexion.php"))
  {
    
  $req = $access->prepare("select * from membre where id = ? ");
    

  $req->execute(array($id));
  //vérifier si il y'a un utilisateur qui correspon a l'email et le mot de passe que j'ai donné
  if($req->rowCount() == 1){
    //dans ce cas je créer un variable qui va récuperer les informations en question

    $data = $req->fetch();

    return $data;

  }
  else {
    return false;
  }

$req->closeCursor();

}

  }



  function modifierUser($id, $pseudo, $email, $mdp)
  {
    if(require("connexion.php"))
    {
      
      $req = $access->prepare("UPDATE membre set pseudo = ?, email = ?, motdepasse = ? where id = ?");
      
  
      $req->execute(array($id, $pseudo, $email, $mdp));
  
      $req->closeCursor();
    }
  }







// récuperer les information d'utilisateur 
function getUser($email, $password){

  if(require("connexion.php"))
  {
    
  $req = $access->prepare("SELECT * FROM membre where email = ? AND motdepasse = ?");
    

  $req->execute(array($email, $password));
//vérifier si il y'a un utilisateur qui correspon a l'email et le mot de passe que j'ai donné
    if($req->rowCount() == 1){
      //dans ce cas je créer un variable qui va récuperer les informations en question

      $data = $req->fetch();

      return $data;

    }
    else {
      return false;
    }

  $req->closeCursor();

  }

}









// récuperer les information d'admin 
function getAdmin($email, $password){

  if(require("connexion.php"))
  {
    
  $req = $access->prepare("select * from admin where email = ? AND password = ? ");
    

  $req->execute(array($email, $password));
//vérifier si il y'a un utilisateur qui correspon a l'email et le mot de passe que j'ai donné
    if($req->rowCount() == 1){
      //dans ce cas je créer un variable qui va récuperer les informations en question

      $data = $req->fetchAll(PDO::FETCH_OBJ);

      return $data;

    }
    else {
      return false;
    }

  $req->closeCursor();

  }

}


function ajouter($image, $ref, $nom, $taille , $nbp ,$couleur, $prix, $desc)
{
  if(require("connexion.php"))
  {
    
    $req = $access->prepare("INSERT INTO produits (image, ref, nom, taille, couleur, nbp, prix, description) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    

    $req->execute(array($image,$ref, $nom, $taille , $nbp ,$couleur, $prix, $desc));

    $req->closeCursor();
  }
}

function afficher ()
{
    if (require("connexion.php"))
    {
        $req = $access->prepare("SELECT * FROM produits ORDER BY id DESC");
        
        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;
        $req->closeCursor();

    }
}



function modifier($image, $ref, $nom, $taille , $nbp ,$couleur, $prix, $desc, $id)
{
  if(require("connexion.php"))
  {
    
    $req = $access->prepare("UPDATE produits set `image` = ?, ref = ?, nom = ?, taille = ?, couleur = ?, nbp = ?, prix = ?, description = ? where id=?");
    

    $req->execute(array($image,$ref, $nom, $taille , $nbp ,$couleur, $prix, $desc, $id));

    $req->closeCursor();
  }
}

function supprimer($id)
{
    if(require("connexion.php"))
    {
        $req=$access->prepare("DELETE FROM produits WHERE id=?");
        $req->execute(array($id));
    }
}

function afficherimg()
{
  if(require("connexion.php"))
  {
    
  $req = $access->prepare("select image from produits where id = 5 ");
    

  $req->execute(array($id));
//vérifier si il y'a un utilisateur qui correspon a l'email et le mot de passe que j'ai donné
    if($req->rowCount() == 1){
      //dans ce cas je créer un variable qui va récuperer les informations en question

      $data = $req->fetchAll(PDO::FETCH_OBJ);

      return $data;

    }
    else {
      return false;
    }

  $req->closeCursor();
  }
}


function ajoutermember($pseudo, $mail, $mdp)
{
  if(require("connexion.php"))
  {
    
    $req = $access->prepare("INSERT INTO membre (pseudo, email, motdepasse  ) VALUES (?, ?, ?)");
    

    $req->execute(array($pseudo, $mail, $mdp));

    $req->closeCursor();
  }
}


function verifmail($mail)
{
    if (require("connexion.php"))
    {
        $req = $access->prepare("SELECT * FROM membre where email = ?");
        
        $req->execute(array($mail));
        if($req->rowCount() > 0){
          //dans ce cas je créer un variable qui va récuperer les informations en question
    
          $data = $req->fetchAll(PDO::FETCH_OBJ);
    
          return $data;
    
        }
        else {
          return false;
        }

    }
}


?>