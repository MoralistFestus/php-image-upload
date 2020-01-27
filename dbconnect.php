<?php
$servername = "localhost"; // localhost
$username = "root"; // username
$password = ""; // password
$dbname = "image_upload"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
?>