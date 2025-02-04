<!-- Add Book Modal -->
<div class="modal fade" id="addBookModal" tabindex="-1" aria-labelledby="addBookLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addBookLabel">Add New Book</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addBookForm">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="isbn" class="form-label">ISBN</label>
                        <input type="text" class="form-control" id="isbn" required>
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Author</label>
                        <input type="text" class="form-control" id="author" required>
                    </div>
                    <div class="mb-3">
                        <label for="publisher" class="form-label">Publisher</label>
                        <input type="text" class="form-control" id="publisher" required>
                    </div>
                    <div class="mb-3">
                        <label for="year_published" class="form-label">Year Published</label>
                        <input type="number" class="form-control" id="year_published" required>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <input type="text" class="form-control" id="category" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Book</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit Book Modal -->
<div class="modal fade" id="editBookModal" tabindex="-1" aria-labelledby="editBookLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editBookLabel">Edit Book</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editBookForm">
                    <input type="hidden" id="edit_id">
                    <div class="mb-3">
                        <label for="edit_title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="edit_title" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_isbn" class="form-label">ISBN</label>
                        <input type="text" class="form-control" id="edit_isbn" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_author" class="form-label">Author</label>
                        <input type="text" class="form-control" id="edit_author" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_publisher" class="form-label">Publisher</label>
                        <input type="text" class="form-control" id="edit_publisher" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_year_published" class="form-label">Year Published</label>
                        <input type="number" class="form-control" id="edit_year_published" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_category" class="form-label">Category</label>
                        <input type="text" class="form-control" id="edit_category" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Book</button>
                </form>
            </div>
        </div>
    </div>
</div>
