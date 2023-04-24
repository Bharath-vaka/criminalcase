<?php
// Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "elitmus";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data from MySQL table
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

// Convert MySQL data to JSON object
$data = array();
while($row = mysqli_fetch_assoc($result)) {
  $data[] = $row;
}
echo json_encode(array("data" => $data));

mysqli_close($conn);
?>
