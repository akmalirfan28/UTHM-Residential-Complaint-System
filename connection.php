<?php
$servername = "localhost";
$username = "urcs";
$password = "";
$dbname = "urcsdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>

