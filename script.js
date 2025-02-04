$(document).ready(function () {
    function loadBooks() {
        $.ajax({
            url: "ajax/fetch_books.php",
            type: "GET",
            success: function (data) {
                $("#book-list").html(data);
            }
        });
    }

    loadBooks(); // Load books when the page loads

    // Add Book
    $("#addBookForm").submit(function (e) {
        e.preventDefault();

        let bookData = {
            title: $("#title").val(),
            isbn: $("#isbn").val(),
            author: $("#author").val(),
            publisher: $("#publisher").val(),
            year_published: $("#year_published").val(),
            category: $("#category").val()
        };

        $.ajax({
            url: "ajax/add_book.php",
            type: "POST",
            data: bookData,
            success: function (response) {
                alert(response);
                $("#addBookModal").modal("hide");
                loadBooks();
                $("#addBookForm")[0].reset();
            }
        });
    });

    // Open Edit Modal
    $(document).on("click", ".edit-book", function () {
        let bookId = $(this).data("id");

        $.ajax({
            url: "ajax/edit_book.php",
            type: "POST",
            data: { id: bookId },
            success: function (response) {
                let book = JSON.parse(response);
                $("#edit_id").val(book.id);
                $("#edit_title").val(book.title);
                $("#edit_isbn").val(book.isbn);
                $("#edit_author").val(book.author);
                $("#edit_publisher").val(book.publisher);
                $("#edit_year_published").val(book.year_published);
                $("#edit_category").val(book.category);
                $("#editBookModal").modal("show");
            }
        });
    });

    // Update Book
    $("#editBookForm").submit(function (e) {
        e.preventDefault();

        let bookData = {
            id: $("#edit_id").val(),
            title: $("#edit_title").val(),
            isbn: $("#edit_isbn").val(),
            author: $("#edit_author").val(),
            publisher: $("#edit_publisher").val(),
            year_published: $("#edit_year_published").val(),
            category: $("#edit_category").val()
        };

        $.ajax({
            url: "ajax/update_book.php",
            type: "POST",
            data: bookData,
            success: function (response) {
                alert(response);
                $("#editBookModal").modal("hide");
                loadBooks();
            }
        });
    });

    // Delete Book
    $(document).on("click", ".delete-book", function () {
        let bookId = $(this).data("id");

        if (confirm("Are you sure you want to delete this book?")) {
            $.ajax({
                url: "ajax/delete_book.php",
                type: "POST",
                data: { id: bookId },
                success: function (response) {
                    alert(response);
                    loadBooks();
                }
            });
        }
    });
});
