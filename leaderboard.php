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

    <div class="scorehead">

      <!-- This uses the session ID in order to determine which message to display. If the users session ID matches the one we have provided it will display welcome with thier username and a different sub line, if they are not logged it it will say welcome guest. -->


      <h1><?php
      if(!isset($_SESSION['thesesh']) && empty($_SESSION['thesesh'])) {
       echo 'Welcome Guest.';
     }
     else {
       echo "Welcome, ". escape($_SESSION['thesesh']['username']).".";
     }
     ?></h1>
     <p>
       <?php
       if(!isset($_SESSION['thesesh']) && empty($_SESSION['thesesh'])) {
         echo 'This is where you can keep track of your ranking and work your way up. You must be signed in to use this feature.';
       }
       else {
         echo "This is where you can keep track of your ranking and work your way up.";
       }
       ?></p>
     </div>

   </section>




   <section scoreboard>

    <div align="center" class="gamescore">
      <h1>Top Players</h1>
      <table>
        <tr>
          <th>User</th>
          <th>Score</th>
        </tr>

        <!-- calling the PHP function that will generate the table -->


        <?php
        require("functions/fetchleader.php"); 
        ?>




      </table>
    </div>
  </section>




  <?php
  require("footer.php"); 
  ?>

</body>
</html>
