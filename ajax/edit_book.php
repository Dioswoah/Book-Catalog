<?php
include "../db.php";

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "SELECT * FROM books WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    echo json_encode($row);
}
?>
