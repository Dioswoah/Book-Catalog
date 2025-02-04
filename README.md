Here is the full **README.md** content in text format:

---

# **Simple Book Catalog (AJAX + PHP + MySQL)**  

This is a **simple book catalog** that allows users to **add, edit, and delete books** using **AJAX** for smooth user interactions. The project follows an **Object-Oriented PHP** approach and does **not** use frameworks like Laravel or CodeIgniter.  

## **Features**  
✅ Add new books  
✅ Edit book information  
✅ Delete books  
✅ AJAX-powered CRUD operations  
✅ Uses Bootstrap modals for adding, editing, and deleting  

---

## **Installation Instructions**  

### **1. Requirements**  
- **XAMPP** (for Apache & MySQL)  
- **Visual Studio Code** (or any code editor)  
- **Git** (for repository management)  

### **2. Setup Instructions**  

#### **Step 1: Clone the Repository**  
If you received a Git repository from August 99, clone it into your `htdocs` folder:  
```sh
git clone <repository_url> book_catalog
```
Or, manually extract the project folder into `C:\xampp\htdocs\book_catalog`.

#### **Step 2: Start XAMPP**  
1. Open **XAMPP Control Panel**.  
2. Start **Apache** and **MySQL**.  

#### **Step 3: Import the Database**  
1. Open **phpMyAdmin** (`http://localhost/phpmyadmin`).  
2. Create a new database named `book_catalog`.  
3. Click **Import**, select `books.sql`, and import it.  

#### **Step 4: Configure the Database Connection**  
Edit `db.php` with your database credentials:  
```php
<?php
$servername = "localhost";
$username = "root";  // Default XAMPP user
$password = "";      // Default XAMPP password (empty)
$database = "book_catalog";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
```

#### **Step 5: Open the Project in Browser**  
1. Open **Visual Studio Code** and open the `book_catalog` folder.  
2. Run the project in a browser:  
   ```
   http://localhost/book_catalog/
   ```

---

## **Author**  
Marc Joshua Ramos
