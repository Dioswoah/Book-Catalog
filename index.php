<?php include "db.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Catalog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Book Catalog</h2>
        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addBookModal">Add Book</button>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>ISBN</th>
                    <th>Author</th>
                    <th>Publisher</th>
                    <th>Year Published</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="book-list">
                <!-- Books will be loaded here using AJAX -->
            </tbody>
        </table>
    </div>

    <?php include "includes/modals.php"; ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
