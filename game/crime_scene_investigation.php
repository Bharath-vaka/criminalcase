<?php
// start the session
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Crime Scene Investigation</title>
    <link rel="stylesheet" type="text/css" href="../css/crime_scene_investigation.css">
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
        <h1> Crime Scene Investigation </h1>
        <button class="button" onclick="openModal()">Rules</button>
        <a href="../login/logout.php">Logout</a>
      </div>
      <div class="row">
        <div class="column">
          <div class="card1">
            <img class='slideshow-thumbnails active' src='../images/1.jpg'>
            <img class='slideshow-thumbnails' src='../images/2.jpg'>
            <img class='slideshow-thumbnails' src='../images/3.jpg'>
          </div>
        </div>
        <div class="column">
          <div class="card2">
            <div id='lens'></div>
            <div>
              <img class='slideshow-items active' src='../images/1.jpg'>
              <img class='slideshow-items' src='../images/2.jpg'>
              <img class='slideshow-items' src='../images/3.jpg'>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card3">
            <div id='result' class="result"></div>
            <br>
            <br>
            <span id="timer" class="timer">00:00</span>
            <button id="restartBtn" onclick="restart()" class="restart">Restart</button>
          </div>
        </div>
      </div>
      <div class="quiz">
        <div id="quiz">
          <h1 id="quiz-name"></h1>
          <button id="prev-question-button">Previous</button>
          <button id="submit-button" onclick="submitTime()">Submit Answers</button>
          <button id="next-question-button">Next Question</button>
          <div id="quiz-results">
            <p id="quiz-results-score"></p>
          </div>
        </div>
      </div>
    </div>
    <script src="../js/crime_scene_investigation.js"></script>
    <script>
      var all_questions = [{
    question_string: "What is the weapon used by the killer?",
    choices: {
        correct: "Knife",
        wrong: ["Injecting drug", "Gun", "Flower pot"]
    }
}, {
    question_string: "What is the major object collected by forensics?",
    choices: {
        correct: "Mobile",
        wrong: ["Knife", "Injection", "Finger prints"]
    }
}, {
    question_string: "What is the main reason for murder?",
    choices: {
        correct: "Money",
        wrong: ["House Robbery", "Gold", "Rivalry"]
    }
}, {
    question_string: 'At what time police arrived to the Crime location?',
    choices: {
        correct: "10:00AM",
        wrong: ["3:45PM", "10:00PM", "11:45AM"]
    }
}];
  
    </script>
    <script>
        var i = 0;
var txt = 'In this level you are given images at crime scene.You need to closely identify by magnifying the image and notice each and every clue carefully.The mcqs are given to test your identification skills and the clues hidden in these mcqs may help you in further levels';
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