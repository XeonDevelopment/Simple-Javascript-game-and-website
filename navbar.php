  <!-- Contains both PHP and HTML code for the navigation bar -->
  <section header>
    <header>
      <div class="container">
        <img src="img/logo.png" class="logo" >
        <nav>
          <ul>
            <li>
              <!-- If user is logged in, place on nav bar "Welcome $username" -->
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

              <!-- if the user session is empty, meaning they are not logged in, add the login page to the end of the nav bar, else display the logout page. -->

              <?php
              if(!isset($_SESSION['thesesh']) && empty($_SESSION['thesesh'])) {
               echo '<a href="login.php"><b>Log In</b></a>';
             }
             else {
               echo  '<a href="logout.php"><b>Log Out</b></a>';
             }
             ?>
           </li>
         </ul>
       </nav>
     </div>
   </header>
 </section>


