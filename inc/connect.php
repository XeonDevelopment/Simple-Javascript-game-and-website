<?php 

include 'config.php';

//try 
//{ 
        //Creates a connection to the database
//    $db = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password); 
//} 
//catch(PDOException $err) 
//{ 
        // Tell us if there is an error
  //  die("Failed to establish a database connection: " . $err->getMessage()); 
//} 

//header('Content-Type: text/html; charset=utf-8');  
//session_start(); 

    //Makes sure the sanitize function is always available whenever the database is in use
require_once 'functions/sanitize.php';

?>