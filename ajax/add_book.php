<?php
include "../db.php";

$title = $_POST['title'];
$isbn = $_POST['isbn'];
$author = $_POST['author'];
$publisher = $_POST['publisher'];
$year_published = $_POST['year_published'];
$category = $_POST['category'];

$sql = "INSERT INTO books (title, isbn, author, publisher, year_published, category) 
        VALUES ('$title', '$isbn', '$author', '$publisher', '$year_published', '$category')";

if ($conn->query($sql) === TRUE) {
    echo "Book added successfully!";
} else {
    echo "Error: " . $conn->error;
}
?>
