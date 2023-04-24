<?php
// start the session
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Cipher Decryption</title>
    <link rel="stylesheet" type="text/css" href="../css/cipher_decryption.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&family=Press+Start+2P&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>
  <body onload="startTimer()">
    <div id="modal" class="modal">
      <div class="content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Game Rules</h2>
        <p id="demo"></p>
      </div>
    </div>
    <div class="container">
      <div class="header">
        <h2> <?php
    // check if the user is logged in
    if (isset($_SESSION['user_id'])) {
        // display the user's name
        echo "Agent:" . $_SESSION['user_name'];
    } else {
        // redirect to the login page
        header('Location: ../login/signin.php');
        exit();
    }
    ?> </h2>
        <h1> Cipher Decryption </h1>
        <button class="button" onclick="openModal()">Rules</button>
        <a href="../login/logout.php">Logout</a>
      </div>
      <div class="row">
        <div class="column">
          <div class="card1">
            <iframe src="https://morsecode.world/international/decoder/audio-decoder-adaptive.html" style="width:100%;height:100%"></iframe>
          </div>
        </div>
        <div class="column">
          <div class="card2">
            <form id="quiz-form" method="post">
              <label>Expected time that muder had happened?</label>
              <input type="text" name="answer1" id="answer1" required>
              <br>
              <br>
              <label>What is the item mentioned in call recording?</label>
              <input type="text" name="answer2" id="answer2" required>
              <br>
              <br>
              <label>What is the name of the killer?</label>
              <input type="text" name="answer3" id="answer3" required>
              <br>
              <br>
              <input type="button" value="Submit" onclick="submitQuizForm()">
            </form>
            <div id="result"></div>
          </div>
        </div>
        <div class="column">
          <div class="card3">
            <br>
            <br>
            <span id="timer" class="timer">00:00</span>
            <button id="restartBtn" onclick="restart()" class="restart">Restart</button>
            <button id="submit-button" onclick="submitTime()" class="submit">Submit</button>
          </div>
        </div>
      </div>
    </div>
    <script src="../js/cipher_decryption.js"></script>
    <script>
      var i = 0;
      var txt = 'This is the most crucial level to chase the killer. The clues that you collected in previous levels play key role here.';
      var speed = 100;

      function typeWriter() {
        if (i < txt.length) {
          document.getElementById("demo").innerHTML += txt.charAt(i);
          i++;
          setTimeout(typeWriter, speed);
        }
      }
      typeWriter();
    </script>
  </body>
</html>