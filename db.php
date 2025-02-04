<?php
$host = "localhost";
$user = "root"; // Default MySQL user in XAMPP
$pass = ""; // No password by default
$dbname = "book_catalog";

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
