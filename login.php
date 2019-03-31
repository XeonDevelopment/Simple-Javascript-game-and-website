<?php 
require("inc/connect.php");   


?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/favicon.ico">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Link Font Awesome for Icons -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



  <title>Game Website</title>

</head>


<body>

  <!-- Rather than importing the navbar.php for this one it was much easier to just perform it here, due to that as this is the login page, we want to ensure that a user that is already logged in doesnt try to login again, this is done by matching session id then creating a redirect, as shown below. -->

  <section header>
    <header>
      <div class="container">
        <img src="img/logo.png" class="logo" >
        <nav>
          <ul>
            <li>
              <!-- uses our re-usable function to ensure the content of the name and then displays it in the navigation bar if needed. -->
              <?php 
              if(isset($_SESSION['thesesh'])) {
                echo "Welcome, ". escape($_SESSION['thesesh']['username'])."";
              }
              ?>
            </li>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="play.php">Play</a></li>
            <li><a href="leaderboard.php">Leaderboard</a></li>
            <li>
              <?php 
              if(isset($_SESSION['thesesh'])) {
                header("Location: index.php");
                die();
              }
              ?>
            </li>
          </ul>
        </nav>
      </div>
    </header>
  </section>

  <center>

    <!-- Creating a simple form that will handle all communication of POST, we use this form in order to grab values to check agaist the database to ensure the user is registered. -->

    <h1 style="color: #55d6aa;" id="statuslogin" >Login</h1>
    <form action="login.php" method="post"> 
      <span id="userpage">Username:</span><br /> 
      <input type="text" class="userdetails" id="userlog"name="username" value="" /> 
      <br /><br /> 
      <span id="userpage">Password:</span></font><br /> 
      <input type="password" class="userdetails" id="userpass" name="password" value="" />  
      <br /><br /> 

      <div id="submitlogin">
            <input type="submit" onclick="login()" value="Login">
            <input type="submit" onclick="logout()" value="Logout">
        </div>

        <div id="statuslogin"></div>

      <style>
      input[type="submit"]{
        background-color: #242424;
        color: #ffffff;
        border-radius: 10px; border-color: #55d6aa;
      }
    </style> 
  </form>
  <u><font size="3"><a href="register.php"><font color="#55d6aa">Don't have an account? Sign up here!</font></a></u></center>
<script src="login.js"></script>