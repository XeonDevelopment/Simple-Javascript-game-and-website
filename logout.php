<?php 
    require("inc/connect.php"); 
    //wipes session ID
    unset($_SESSION['thesesh']); 

    //redirects
    header("Location: index.php"); 
    die("Redirecting...");
?>