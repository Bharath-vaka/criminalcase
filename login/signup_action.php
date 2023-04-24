<?php

include("../db/db_config.php");

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirmpassword'];
	if($password != $confirm_password){
		echo "Passwords do not match.";
	}else{
		if(!$conn){
			die("Connection failed: " . mysqli_connect_error());
		}
		$sql = "INSERT INTO users (name, email, password, score1, time1, score2, time2, score3, time3) VALUES ('$name', '$email', '$password',0,0,0,0,0,0)";
		if(mysqli_query($conn, $sql)){
			header("Location: signin.php");
			exit();
		}else{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
?>

