<?php
$servername = "mysqldatabase";
$username = "root";
$password = "student";

// Create connection
$conn = new mysqli($servername, $username, $password, "mysqldb");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Connection Good --> Continue
?>