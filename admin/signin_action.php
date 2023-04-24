<?php
// start the session
session_start();

// include the database connection file
include("../db/db_config.php");

// get the form data
$email = $_POST['email'];
$password = $_POST['password'];

// sanitize the form data
$email = stripcslashes($email);
$password = stripcslashes($password);
$email = mysqli_real_escape_string($conn, $email);
$password = mysqli_real_escape_string($conn, $password);

// check if the user exists in the database
$sql = "select * from admin where email = '$email' and password = '$password'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count >= 1) {
    // password is correct, login the user and store their name in the session
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['user_name'] = $row['name'];
    $_SESSION['email'] = $row['email'];
    header('Location: ../admin/index.php');
    exit();
} else {
    // password is incorrect, show error message
    $_SESSION['login_error'] = 'Invalid email or password';
    header('Location: signin.php');
    exit();
}
?>
