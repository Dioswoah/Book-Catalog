<?php
include "../db.php";

$sql = "SELECT * FROM books ORDER BY id DESC";
$result = $conn->query($sql);

$books = "";
while ($row = $result->fetch_assoc()) {
    $books .= "
        <tr>
            <td>{$row['title']}</td>
            <td>{$row['isbn']}</td>
            <td>{$row['author']}</td>
            <td>{$row['publisher']}</td>
            <td>{$row['year_published']}</td>
            <td>{$row['category']}</td>
            <td>
                <button class='btn btn-warning btn-sm edit-book' data-id='{$row['id']}'>Edit</button>
                <button class='btn btn-danger btn-sm delete-book' data-id='{$row['id']}'>Delete</button>
            </td>
        </tr>
    ";
}

echo $books;
?>
