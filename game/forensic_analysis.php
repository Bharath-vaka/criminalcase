<?php
// start the session
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Forensic Analysis</title>
    <link rel="stylesheet" type="text/css" href="../css/forensic_analysis.css">
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
        echo "Agent:". $_SESSION['user_name'];
    } else {
        // redirect to the login page
        header('Location: ../login/signin.php');
        exit();
    }
    ?> </h2>
        <h1> Forensic Analysis </h1>
        <button class="button" onclick="openModal()">Rules</button>
        <a href="../login/logout.php">Logout</a>
      </div>
      <div class="row">
        <div class="column">
          <div class="card1">
            <div id="pincode">
              <div class="table">
                <div class="cell">
                  <div id="anleitung" class="anleitung">
                    <p></p>
                  </div>
                  <div id="fields">
                    <div class="grid">
                      <div class="grid__col grid__col--1-of-4 numberfield">
                        <span></span>
                      </div>
                      <div class="grid__col grid__col--1-of-4 numberfield">
                        <span></span>
                      </div>
                      <div class="grid__col grid__col--1-of-4 numberfield">
                        <span></span>
                      </div>
                      <div class="grid__col grid__col--1-of-4 numberfield">
                        <span></span>
                      </div>
                    </div>
                  </div>
                  <div id="numbers">
                    <div class="grid">
                      <div class="grid__col grid__col--1-of-3">
                        <button>1</button>
                      </div>
                      <div class="grid__col grid__col--1-of-3">
                        <button>2</button>
                      </div>
                      <div class="grid__col grid__col--1-of-3">
                        <button>3</button>
                      </div>
                      <div class="grid__col grid__col--1-of-3">
                        <button>4</button>
                      </div>
                      <div class="grid__col grid__col--1-of-3">
                        <button>5</button>
                      </div>
                      <div class="grid__col grid__col--1-of-3">
                        <button>6</button>
                      </div>
                      <div class="grid__col grid__col--1-of-3">
                        <button>7</button>
                      </div>
                      <div class="grid__col grid__col--1-of-3">
                        <button>8</button>
                      </div>
                      <div class="grid__col grid__col--1-of-3">
                        <button>9</button>
                      </div>
                      <div class="grid__col grid__col--1-of-3"></div>
                      <div class="grid__col grid__col--1-of-3">
                        <button>0</button>
                      </div>
                      <div class="grid__col grid__col--1-of-3"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
            <div class="card2"> <br><br>
                <h2>Solve the Riddle</h2>
                <p id="demo1"></p> </div>
        </div>
        <div class="column">
          <div class="card3">
            <br>
            <br>
            <span id="timer" class="timer">00:00</span>
            <button id="restartbtn" class="restart">Restart</button>
            <button id="submit-button" onclick="submitTime()" class="submit">Submit</button>
          </div>
        </div>
      </div>
    </div>
    <script src="../js/forensic_analysis.js"></script>
    <script>
      var i = 0;
      var txt = 'The evidence collected in crime scene investigation is sent to forensic. This level is about to unlock the mobile password by solving the riddle. So that you can get important information about the killer';
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
      <script>
      var j = 0;
      var txt1 = 'I am a 4 digit number \n My first digit is neither prime nor composite \n Without my second digit the numbers are known as Natural numbers \n My third digit is square of least prime number \n and my last digit is last digit of 52nd prime number';
      var speed1 = 100;

      function typeWriter1() {
        if (j < txt1.length) {
          document.getElementById("demo1").innerHTML += txt1.charAt(j);
          j++;
          setTimeout(typeWriter1, speed1);
        }
      }
      typeWriter1();
    </script>
  </body>
</html>