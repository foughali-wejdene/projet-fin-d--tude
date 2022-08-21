<?php
session_start();
// si l'utilisateur dans cette sessio -> on détruit
if(isset($_SESSION['xRttpHo0greL393']))
{
    $_SESSION['xRttpHo0greL393']=array();
    session_destroy();
    //dériger l'user sur la page index.ph
    header("Location: ../");
}else {
    header("Location: ../compte_client.php");
}

?>