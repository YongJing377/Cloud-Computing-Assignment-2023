<?php
$servername = "proton-db-1.c3iemkdozdsc.us-east-1.rds.amazonaws.com";
$username = "admin1234";
$password = "admin1234";
$dbname = "Proton";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$id = $_POST["ID"];
$variant = $_POST["variant"];
$pmprice = $_POST["pmprice"];
$emprice = $_POST["emprice"];
$labuan = $_POST["labuan"];
$langkawi = $_POST["langkawi"];

// Construct and execute SQL query to delete record
$sql = "UPDATE ProductDetails
SET Variant = '$variant', PMprice = '$pmprice', EMprice = '$emprice', LABUANprice = '$labuan', LANGKAWIprice = '$langkawi'
WHERE ID = $id";

if ($conn->query($sql) === TRUE) {
  echo "Record Edit successfully";
  header("Location: Admin_index.php");
  exit();

} else {
  echo "Error editing record: " . $conn->error;
}

// Close database connection
$conn->close();
?>