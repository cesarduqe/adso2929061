<?php
include '../config/app.php';
include '../config/database.php';
include '../config/security.php';

if ($_GET){
    if(deletepet($_GET['id'], $conx)) {
        $_SESSION['message'] = "la mascota fue eliminada con exito!";
        echo "<cript> window.location.replace(''dashboard.ph)</cript>";

    }

}




?>

