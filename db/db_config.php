<?php
// database configuration
$host = 'localhost';
$user = 'root';
$password = 'root';
$database = 'elitmus';

// establish database connection
$conn = mysqli_connect($host, $user, $password, $database);

// check if connection was successful
if(!$conn) {
	die('Database connection error: ' . mysqli_connect_error());
}
?>
