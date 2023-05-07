<?php
$servername = "proton-db-1.c3iemkdozdsc.us-east-1.rds.amazonaws.com";
$username = "admin1234";
$password = "admin1234";
$dbname = "Proton";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$model = $_POST["model"];
$variant = $_POST["variant"];
$pmprice = $_POST["pmprice"];
$emprice = $_POST["emprice"];
$labuan = $_POST["labuan"];
$langkawi = $_POST["langkawi"];

$query = "SELECT * FROM Product WHERE Model=$model";
$result = mysqli_query($conn, $query);

// check if query executed successfully
if (!$result) {
    echo "Error executing query: " . mysqli_error($conn);
    exit();
}

// fetch the first row from the result set
$row = mysqli_fetch_assoc($result);
$id = $row['ProductId'];

// Construct and execute SQL query to delete record
$sql = "INSERT INTO ProductDetails VALUES($variant, $pmprice, $emprice, $labuan, $langkawi, $id);";

if ($conn->query($sql) === TRUE) {
    echo "Record add successfully";
    header("Location: Admin_index.php");
    exit();

} else {
    echo "Error adding record: " . $conn->error;
}


// Close database connection
$conn->close();
?>