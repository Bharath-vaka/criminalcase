<?php
// Connect to database
session_start();
// Connect to the database
include("../db/db_config.php");

// Get form data
$answer1 = mysqli_real_escape_string($conn, $_POST["answer1"]);
$answer2 = mysqli_real_escape_string($conn, $_POST["answer2"]);
$answer3 = mysqli_real_escape_string($conn, $_POST["answer3"]);
$email = $_SESSION['email'];
// Check answers
$correctAnswers = 0;

if ($answer1 == "3:45PM" || $answer1 == "3:45pm" || $answer1 == "3:45Pm") {
	$correctAnswers+=100;
}
if ($answer2 == "Cocaine" || $answer2 == "cocaine" || $answer2 == "COCAINE") {
	$correctAnswers+=100;
}
if ($answer3 == "Mark" || $answer3 == "mark" || $answer3 == "MARK") {
	$correctAnswers+=100;
}
$accuracy = floor($correctAnswers/3);
// Insert quiz result into database
$sql = "UPDATE users SET score3 = '$correctAnswers' WHERE email = '$email'";
if (mysqli_query($conn, $sql)) {
	// Display quiz result
	echo "Your Accuracy is $accuracy%";
    if($accuracy==100)
    {
        echo "<br>Congratulations!! You have caught the killer...";
    }
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


// Close database connection
mysqli_close($conn);
?>
