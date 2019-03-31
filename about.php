<?php
//Ensure the database is connected for later usage
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

  <!-- Grabs the navbar file -->

  <?php
  include 'navbar.php';
  ?>

  <section hero>

    <div class="abouthead">
      <h1>About</h1>
    </div>

  </section>
  <article>
    <div class="contentboxes">
      <h1>How To Play</h1>

      <!-- grabs the modified contained css class for the about page -->

      <div class="grid-containerabt">
        <div class="grid-itemabtr">

          <img src="img/placeholder.png" style="width:500px;height:500px;">

        </div>
        <div class="grid-itemabtl">

          <h3>Game Help</h3>
          <p>Proin a dignissim tellus, et ultrices dui. Nullam ante ante, scelerisque vel tincidunt nec, pulvinar a nibh. Praesent pretium ac eros sed lobortis. Sed semper laoreet arcu gravida tempus. Vivamus vulputate, orci sed suscipit tincidunt, risus dui finibus augue, quis condimentum ipsum sem in eros. Aenean venenatis sodales mauris tristique interdum. Suspendisse eu nibh vitae nibh elementum placerat.</p>


          <p>Proin a dignissim tellus, et ultrices dui. Nullam ante ante, scelerisque vel tincidunt nec, pulvinar a nibh. Praesent pretium ac eros sed lobortis. Sed semper laoreet arcu gravida tempus. Vivamus vulputate, orci sed suscipit tincidunt, risus dui finibus augue, quis condimentum ipsum sem in eros. Aenean venenatis sodales mauris tristique interdum. Suspendisse eu nibh vitae nibh elementum placerat.</p>



          <h3>Coammands</h3>
          <p>Proin a dignissim tellus, et ultrices dui. <Br>
            Nullam ante ante, scelerisque vel tincidunt nec, <Br>
            pulvinar a nibh. Praesent pretium ac eros sed lobortis.<Br>
            Sed semper laoreet arcu gravida tempus. Vivamus vulputate, <Br>
            orci sed suscipit tincidunt, risus dui finibus augue, quis <Br>
            condimentum ipsum sem in eros. Aenean venenatis sodales mauris<Br>
          tristique interdum. Suspendisse eu nibh vitae nibh elementum placerat.</p>

        </div>

      </div>
    </div>
  </article>

  <section HTP>
    <div align="center" class="ctasignup">
      <h1>About our game</h1>
    </div>
    <article>
      <div class="contentboxes">
        <div class="grid-containerabt">
          <!-- grabs the modified grid item with right aligntment css class for the about page -->
          <div class="grid-itemabtr">

            <img src="img/placeholder.png" style="width:500px;height:500px;">

          </div>
          <!-- grabs the modified grid item with left aligntment css class for the about page -->
          <div class="grid-itemabtl">

            <h3>Why did we decide to make this game?</h3>
            <p>Proin a dignissim tellus, et ultrices dui. Nullam ante ante, scelerisque vel tincidunt nec, pulvinar a nibh. Praesent pretium ac eros sed lobortis. Sed semper laoreet arcu gravida tempus. Vivamus vulputate, orci sed suscipit tincidunt, risus dui finibus augue, quis condimentum ipsum sem in eros. Aenean venenatis sodales mauris tristique interdum. Suspendisse eu nibh vitae nibh elementum placerat.</p>

            <h3>What was the process like?</h3>
            <p>Proin a dignissim tellus, et ultrices dui. Nullam ante ante, scelerisque vel tincidunt nec, pulvinar a nibh. Praesent pretium ac eros sed lobortis. Sed semper laoreet arcu gravida tempus. Vivamus vulputate, orci sed suscipit tincidunt, risus dui finibus augue, quis condimentum ipsum sem in eros. Aenean venenatis sodales mauris tristique interdum. Suspendisse eu nibh vitae nibh elementum placerat.</p>

            <h3>Future Updates?</h3>
            <p>Proin a dignissim tellus, et ultrices dui. Nullam ante ante, scelerisque vel tincidunt nec, pulvinar a nibh. Praesent pretium ac eros sed lobortis. Sed semper laoreet arcu gravida tempus. Vivamus vulputate, orci sed suscipit tincidunt, risus dui finibus augue, quis condimentum ipsum sem in eros. Aenean venenatis sodales mauris tristique interdum. Suspendisse eu nibh vitae nibh elementum placerat.</p>


          </div>

        </div>
      </div>
    </article>
  </section>

  <section calltoaction>
    <!-- Redirect button as call to action to take you to the play page -->
    <div align="center" class="ctasignup">
      <h1>What are you waiting for?</h1>
      <a href="play.php"><button type="button" class="buttonsgn">PLAY</button></a>
    </div>
  </section>


  <?php
  require("footer.php"); 
  ?>
</body>
</html>
