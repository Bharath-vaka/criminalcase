<?php
session_start();
// Connect to the database
include("../db/db_config.php");
// Get the percentage value from the AJAX request
$elapsedTime = $_POST["time"];
$score2 = 100-$elapsedTime;
$email = $_SESSION['email'];
// Insert the percentage into the database
$sql = "UPDATE users SET time2 = '$elapsedTime' WHERE email = '$email'";
$sql1 = "UPDATE users SET score2 = '$score2' WHERE email = '$email'";
if (mysqli_query($conn, $sql)) {
  echo "Percentage added successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
if (mysqli_query($conn, $sql1)) {
  echo "Percentage added successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
