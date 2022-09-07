<?php
session_start();
// si l'utilisateur dans cette sessio -> on détruit
if(isset($_SESSION['id']))
{
    $_SESSION['id']=array();
    session_destroy();
    //dériger l'user sur la page index.ph
    header("Location: index.php");
}else {
    header("Location: compte_client.php");
}

?>