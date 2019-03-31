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


<body style="text-align:center">

  <?php
  include 'navbar.php';
  ?>
  <!-- PLACE GAME IN THIS DIV -->
  <main>


    <div class="gamesection">



      <style>
      .item1 { grid-area: header; }
      .item2 { grid-area: a; }
      .item3 { grid-area: b; }
      .item4 { grid-area: c; }
      .item5 { grid-area: d; }
      .item8 { grid-area: space; }
      .item6 { grid-area: ans; }
      .item7 { grid-area: life; }

      .grid-container-game {
        display: grid;
        grid-template-areas:
        'header header header header header header'
        'a a a b b b'
        'c c c d d d'
        'space space space space space space'
        'ans ans ans life life life';
        grid-gap: 10px;
        background-color: black;
        padding: 5px;
        font-size: 13px;
		margin: auto;
        max-width: 800px;
        background-image: url("https://i1.wp.com/insiderlouisville.com/wp-content/uploads/2015/10/website-arena.jpg?ssl=1");
        text-align: center;
        height: 600px;
      }

      .grid-container-game > div {
        background-color: rgba(255, 255, 255, 0.5);
        text-align: center;
        padding: 20px 0;
        font-size: 13px;

      }

    </style>


    <div id="quizSection" >

      <div class="grid-container-game">
        <div class="item1"><div id="questionTXT"></div></div>
        <div class="item2"><p id="choice1"></p></div>
        <div class="item3"><p id="choice2"></p></div>  
        <div class="item4"><p id="choice3"></p></div>
        <div class="item5"><p id="choice4"></p></div>
        <div class="item8"><p>Your Bank Balance</p><p id="scoreTXT"></p></div>
        <div class="item6"><form name="myForm" onsubmit="return loadNextQuestion()" method="post">
          Answer: <input type="text" name="fname">
        </form>
        <br>
        <button id="nextBtn" onclick="loadNextQuestion();">Next Question</button></div>
        <div class="item7">Lifelines<br>

          <button id="lckyskip" onclick="Skip();">Lucky Skip</button>
        </div>

      </div>

    </div>

    <style>
    .grid-container-mainmenu {
      display: grid;
      grid-template-columns: auto;
      background-image: url("https://i1.wp.com/insiderlouisville.com/wp-content/uploads/2015/10/website-arena.jpg?ssl=1");
      padding: 5px;
      max-width: 800px;
	  margin: auto;
      height: 600px;
    }
    .grid-item-mainmenu {
      border: 1px solid rgba(0, 0, 0, 0.8);
      background:url('../img/showcase.jpg') -400px;
      padding: 20px;
      font-size: 30px;
      text-align: center;
    }
  </style>

  <div id="menuPage">

    <div class="grid-container-mainmenu">
      <div class="grid-item-mainmenu"> 
        <br>

        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/8/8d/WWTBAMUSFall2018Logo.png/250px-WWTBAMUSFall2018Logo.png"><br>
        <button id="startBtn" onclick="loadQuiz();">Play Game</button>
        <br>
        <br>
        <style>
        #myProgress {
          width: 100%;
          background-color: #ddd;
        }

        #myBar {
          width: 10%;
          height: 30px;
          background-color: #4CAF50;
          text-align: center;
          line-height: 30px;
          color: white;
        }
      </style>


      <div id="myProgress">
        <div id="myBar">10%</div>
      </div>

      <br>

      <script>

      </script>

    </div> 
  </div>

</div>


<style>
.grid-container-winpage {
  display: grid;
  grid-template-columns: auto;
   background-image: url("https://i1.wp.com/insiderlouisville.com/wp-content/uploads/2015/10/website-arena.jpg?ssl=1");
  padding: 5px;
  margin: auto;
  color: white;
  max-width: 800px;
  height: 600px;
}
.grid-item-winpage {
  border: 1px solid rgba(0, 0, 0, 0.8);
  background:url('../img/showcase.jpg') -400px;
  padding: 20px;
  font-size: 30px;
  text-align: center;
}
</style>

<div id="winpage">


  <div class="grid-container-winpage">
    <div class="grid-item-winpage"> 
      <br>

      <img src="https://upload.wikimedia.org/wikipedia/en/thumb/8/8d/WWTBAMUSFall2018Logo.png/250px-WWTBAMUSFall2018Logo.png"><br>
       <p color="white">You Won</p>
      <p id="scoreTXTwin" color="white"></p>
      <p color="white" onclick="savescore()">Would you like to save score?</p>
      <button id="nextBtn" onclick="savescore();">Save</button></div>
      <br>
      <br>



    <br>

    <script>

    </script>

  </div> 
</div>






</div>


</div>
</div>









</main>



<section scoreboard>

  <div align="center" class="gamescore">
    <h1>Top Players</h1>
    <table>
      <tr>
        <th>User</th>
        <th>Score</th>
      </tr>
      <!-- Grab the leaderboard -->
      <?php
      //require("functions/fetchleader.php"); 
      ?>

    </table>
  </div>
</section>




<?php
require("footer.php"); 
?>

</body>
</html>


<script src="game.js"></script>

<script src="login.js"></script>