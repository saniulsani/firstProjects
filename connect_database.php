<?php
// Database connection details
$host = "localhost";
$dbName = "test";
$username = "root";
$password = "";

// Connect to the database
$conn = new mysqli($host, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection successful<br>";
}

$isbn = $_POST['isbn'];
$bookTitle = $_POST['bookTitle'];
$bookName = $_POST['bookName'];
$quantity = $_POST['quantity'];
$fiction = $_POST['fiction'];

//for update
$count=0;
if (isset($_POST['update'])) {

    // Retrieve the POST data
    $isbn = $_POST['isbn'];
    $bookTitle = $_POST['bookTitle'];
    $bookName = $_POST['bookName'];
    $quantity = $_POST['quantity'];
    $fiction = $_POST['fiction'];

    // SQL query to update the record
    $sql = "UPDATE borrow_book SET BookTitle='$bookTitle', BookNames='$bookName', Quantity=$quantity, Fiction='$fiction' WHERE isbn='$isbn'";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully!";$count++;
    } else {
        echo "Error updating record: " . $conn->error;
    }
}


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST" && $count == 0) {
    // Retrieve form data
    $isbn = $_POST['isbn'] ?? '';
    $bookTitle = $_POST['bookTitle'] ?? '';
    $bookName = $_POST['bookName'] ?? '';
    $quantity = $_POST['quantity'] ?? '';
    $fiction = $_POST['fiction'] ?? '';

    // Validate form data
    if (empty($isbn) || empty($bookName) || empty($bookTitle) || empty($quantity) || empty($fiction)) {
        echo "All fields are required!<br>";
        echo "ISBN: $isbn<br>";
        echo "Book Name: $bookName<br>";
        echo "Book Title: $bookTitle<br>";
        echo "Quantity: $quantity<br>";
        echo "Fiction: $fiction<br>";
    } else {
        // SQL query to insert data directly
        $sql = "INSERT INTO borrow_book (isbn, BookTitle, BookNames, Quantity, Fiction) 
                VALUES ('$isbn', '$bookTitle', '$bookName', $quantity, '$fiction')";

        // Execute the query
        if ($conn->query($sql) === TRUE) {
            echo "Data inserted successfully!";
        } else {
            echo "Error: " . $conn->error;
        }
    }
}


// Close the connection
$conn->close();
?>
