<?php
include "../db.php";

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM books WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Book deleted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
