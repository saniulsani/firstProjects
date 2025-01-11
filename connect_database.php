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
}
else{
    echo "connection successfull";
}

// Check if the form is submitted
 // Retrieve form data
 $isbn = $_POST['isbn'] ?? '';
 $bookName = $_POST['bookName'] ?? '';
 $bookTitle = $_POST['bookTitle'] ?? '';
 $quantity = $_POST['quantity'] ?? '';
 $fiction = $_POST['fiction'] ?? '';
 // SQL query to insert data
 $stmt = $conn->prepare("INSERT INTO books (isbn, book_name, book_title, quantity, fiction) VALUES (?, ?, ?, ?, ?)");
//  $stmt->bind_param("sssds", $isbn, $bookName, $bookTitle, $quantity, $fiction);

 // Execute the query
 if ($stmt->execute()) {
     echo "Data inserted successfully!";
 } else {
     echo "Error: " . $stmt->error;
 }

 $stmt->close();
 // Validate form data (optional, add as needed)
 // if (empty($isbn) || empty($bookName) || empty($bookTitle) || empty($quantity) || empty($fiction)) {
 //     echo "All fields are required!";
 // } else {
     
 // }
// if ($_SERVER["REQUEST_METHOD"] === "POST") {
   
// }

// Close the connection
$conn->close();
?>
