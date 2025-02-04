<?php
include "../db.php";

$id = $_POST['id'];
$title = $_POST['title'];
$isbn = $_POST['isbn'];
$author = $_POST['author'];
$publisher = $_POST['publisher'];
$year_published = $_POST['year_published'];
$category = $_POST['category'];

$sql = "UPDATE books SET 
        title = '$title', 
        isbn = '$isbn', 
        author = '$author', 
        publisher = '$publisher', 
        year_published = '$year_published', 
        category = '$category' 
        WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Book updated successfully!";
} else {
    echo "Error: " . $conn->error;
}
?>
