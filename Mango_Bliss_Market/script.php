<?php


// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mangola";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Your SQL query
$sql = "SELECT * FROM users WHERE email = 'admin@mangola.com'";

// Execute the query
$result = $conn->query($sql);

// Check if the query was successful
if ($result === false) {
    die("Error executing query: " . $conn->error);
}

// Check number of rows
$num_rows = mysqli_num_rows($result);

echo "Number of rows: " . $num_rows;

$conn->close();
?>

