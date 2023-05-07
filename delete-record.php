<?php
$servername = "proton-db-1.c3iemkdozdsc.us-east-1.rds.amazonaws.com";
$username = "admin1234";
$password = "admin1234";
$dbname = "Proton";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Get the ID of the record to be deleted from the POST request
$id = $_POST["deleteId"];

// Construct and execute SQL query to delete record
$sql = "DELETE FROM ProductDetails WHERE ID = $id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header("Location: Admin_index.php");
  exit();

} else {
  echo "Error deleting record: " . $conn->error;
}

// Close database connection
$conn->close();
?>