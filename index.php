<!-- Every page must start with requiring the connect php file, that file contains the backbone to the user auth system. -->
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

    <section hero>

        <div class="mainhead">


          <!-- PHP code used to allow the user to set the website name from the config file. -->  
          <?php echo "<h1>Welcome to " . $websitename . "</h1>" ?>
          <p>Feel Free to sign up to take part in multiplayer</p>
          <!-- calls the custom class for the design of the button. -->
          <a href="play.php"><button type="button" class="buttoncta">PLAY GAME</button></a>
      </div>

  </section>

  <section reasons>
    <div class="contentboxes">
        <h1>REASONS TO PLAY GAMES WITH US</h1>
        <p><b><i>As if you need a reason for games</i></b></p>
        <div class="grid-container">
          <div class="grid-item">
            <!-- uses the class fa provided by the font we have imported. -->
            <i class="fa fa-trophy" style="font-size:50px"></i>
            <h3>Leaderboards</h3>
            <p>Enjoy competing against others who play the games, with public leaderboards</p>
        </div>
        <div class="grid-item">

            <i class="fa fa-clock-o" style="font-size:50px"></i>
            <h3>Passing Time</h3>
            <p>We understand how <b>boring</b> sitting in class it, so we aimed to make every game as fun as possible.</p>


        </div>
        <div class="grid-item">

            <i class="fa fa-coffee" style="font-size:50px"></i>
            <h3>Supporting us.</h3>
            <p>After all the hours spent making the games for you, each time you play you get us closer to our next cup of coffee.</p>

        </div>  
    </div>
</div>
</section>


<section calltoaction>
    <!-- call to action. -->
    <div align="center" class="ctasignup">
        <h1>What are you waiting for?</h1>
        <a href="register.php"><button type="button" class="buttonsgn">SIGN UP</button></a>
    </div>
</section>

<?php
require("footer.php"); 
?>

</body>
</html>
