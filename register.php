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

  <?php
  include 'navbar.php';
  ?>

  <center>
    <!-- Link CSS for the registration form. -->
    <div id="registerdetails">

      <h1 h1 style="color: #55d6aa;">Register</h1>
      <!-- define the form action, using the method post -->
      <form action="register.php" method="post"> 
        <span id="userpage">Username:</span><br /> 
        <!-- assign names that will later be used for registration along with linking the CSS to the boxes. -->
        <input type="text" class="userdetails" name="username" id="regusername" value="" /> 
        <br /><br />
        <span id="userpage">Password:</span></font><br /> 
        <input type="password" class="userdetails" id="regpassword" name="password" value="" /> 
        <br /><br /> 
        <span id="userpage">Confrim:</span></font><br /> 
        <input type="password" class="userdetails" id="passconfirm" name="password" value="" /> 
        <br /><br /> 
        <input type="submit" value="Register" onclick="register()" /> 
        <style>
        input[type="submit"]{
          background-color: #242424;
          color: #ffffff;
          border-radius: 10px; border-color: #55d6aa;
        }
      </style>
    </form>

  </div>
</div>






</div>
</center>
<script src="login.js"></script>