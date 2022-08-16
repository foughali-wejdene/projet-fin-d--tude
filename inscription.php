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
                                    header('Location: index.php');
                                    } 
                                    catch (Exception $e) 
                                    {
                                        $e->getMessage();
                                    }
                                    //$_SESSION['comptecree'] = "votre compte a bien été créer";  
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WIK</title>
</head>

<body>
    <div align="center">
        <h2>Inscription</h2>
            <br/> <br/> <br/>
        <form method="POST" action="">
            <table>
                <tr>
                    <td align="right">
                        <label for="pseudo"> Pseudo :</label>
                    </td>
                    <td>
                        <input type="text" placeholder="votre pseudo" id="pseudo" name="pseudo" value = "<?php if (isset($pseudo)) { echo $pseudo; }?>">
                    </td>


                </tr>
                <tr>
                    <td align="right">
                        <label for="mail"> Mail :</label>
                    </td>
                    <td>
                        <input type="email" placeholder="votre mail" id="mail " name="mail" value = "<?php if (isset($mail)) { echo $mail; }?>">
                    </td>
                </tr>


                <tr>
                    <td align="right">
                        <label for="mail2"> Confirmation du mail :</label>
                    </td>
                    <td>
                        <input type="email" placeholder="Confirmez votre mail" id="mail2 " name="mail2" value = "<?php if (isset($mail2)) { echo $mail2; }?>">
                    </td>
                </tr>

                
                <tr>
                    <td align="right">
                        <label for="mdp"> Mot de passe :</label>
                    </td>
                    <td>
                        <input type="password" placeholder="votre Mot de passe" id="mdp" name="mdp">
                    </td>
                </tr>


                <tr>
                    <td align="right">
                        <label for="mdp2">Confirmation du mot de passe :</label>
                    </td>
                    <td>
                        <input type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2">
                    </td>
                </tr>
                        

                <tr>
                    <td></td>
                    <td>
                        <br />
                    <input  align="center" type="submit" value = "Je m'inscris" name="forminscription"/>
                    </td>

                </tr>


            </table>
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
</body>
</html>