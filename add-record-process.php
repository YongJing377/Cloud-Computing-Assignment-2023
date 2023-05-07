<?php
$servername = "proton-db-1.c3iemkdozdsc.us-east-1.rds.amazonaws.com";
$username = "admin1234";
$password = "admin1234";
$dbname = "Proton";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
    echo "Connection Success";
}
$model = $_POST["model"];
$variant = $_POST["variant"];
$pmprice = $_POST["pmprice"];
$emprice = $_POST["emprice"];
$labuan = $_POST["labuan"];
$langkawi = $_POST["langkawi"];

$query = "SELECT * FROM Product WHERE Model = '$model'";
$result = mysqli_query($conn, $query);

// check if query executed successfully
if (!$result) {
    echo "Error executing query: " . mysqli_error($conn);
    exit();
}else{
    echo "Execute Success";
}

// fetch the first row from the result set
$row = mysqli_fetch_assoc($result);
$id = $row['ProductID'];

// Construct and execute SQL query to delete record
$sql = "INSERT INTO ProductDetails (Variant, PMprice, EMprice, LABUANprice, LANGKAWIprice, ProductID) VALUES ('$variant', '$pmprice', '$emprice', '$labuan', '$langkawi', '$id')";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo "Record added successfully.";
} else {
    echo "Error adding record: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>