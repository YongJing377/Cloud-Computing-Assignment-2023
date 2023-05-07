<?php
$servername = "localhost";
$username = "admin1234";
$password = "admin1234";
$dbname = "proton-db-1.c3iemkdozdsc.us-east-1.rds.amazonaws.com";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>