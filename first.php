<?php
    try{
        // Retrieving form data
        $Name = $_POST["name"];
        $Id = $_POST["id"];
        $bookName = $_POST["medical_books"];
        $BorrowDate = $_POST["date"];
        $Token = $_POST["token"];
        $ReturnDate = $_POST["return_date"];
        $email =$_POST["email"];
        $submit =$_POST["submit"];

        $check =true;$count=0;

        // name validation
        if (preg_match("/^[A-Z]{2}[a-z]+$/", $Name) ) {
            // echo "Name :" . $Name . '<br>';
            $count++;
        }  
        // else{
        //     // echo "Name format is incorrect<br>"; 
        //     $check=false;  
        // }
        //ID Validation
        if (preg_match("/^\d{2}-\d{5}-\d{1}$/", $Id)) {
            // echo "ID: " . $Id . '<br>';
            $count++;
        }
        //  else {
        //     // echo "ID format is incorrect.<br>";
        //     $check=false;
        // }
        
        //Borrow Date and Return Date is not same
        if ($BorrowDate < $ReturnDate) {
            $count++;
            // echo "BorrowDate : " . $BorrowDate . '<br>';
            // echo "ReturnDate : " . $ReturnDate . '<br>';
        } 
        // else {
        //     $check=false;
        // }

        // // Token
        // echo "Token: " . $Token . '<br>'; 


        // email validation
        if (preg_match("/\@+(student)+\.(aiub)+\.(edu)/", $email)) { 
            // echo "Valid Email: " . $email. '<br>';
            $count++;
        }
        // else {
        //     $check=false;
        // }

        if(isset($submit) && $count>=4){
            if (!isset($_COOKIE[$bookName])) {
                setcookie($bookName, $Name, time() + 20, "/");
                
                // Start the receipt HTML
                echo '<!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Receipt</title>
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            background-color: #f4f4f9;
                            margin: 0;
                            padding: 0;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            height: 100vh;
                        }
                        .receipt-container {
                            background: #fff;
                            border: 2px solid #ddd;
                            border-radius: 10px;
                            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                            width: 90%;
                            max-width: 500px;
                            padding: 20px;
                            text-align: center;
                        }
                        .receipt-header {
                            font-size: 24px;
                            font-weight: bold;
                            margin-bottom: 20px;
                            color: #333;
                        }
                        .receipt-content {
                            text-align: left;
                            font-size: 16px;
                            line-height: 1.8;
                            color: #555;
                        }
                        .receipt-content p {
                            margin: 5px 0;
                        }
                        .receipt-footer {
                            margin-top: 20px;
                            font-size: 14px;
                            color: #777;
                            border-top: 1px solid #ddd;
                            padding-top: 10px;
                        }
                    </style>
                </head>
                <body>
                    <div class="receipt-container">
                        <div class="receipt-header">Borrow Receipt</div>
                        <div class="receipt-content">
                            <p><strong>Name:</strong> ' . htmlspecialchars($Name) . '</p>
                            <p><strong>ID:</strong> ' . htmlspecialchars($Id) . '</p>
                            <p><strong>Book Name:</strong> ' . htmlspecialchars($bookName) . '</p>
                            <p><strong>Token:</strong> ' . htmlspecialchars($Token) . '</p>
                            <p><strong>Borrow Date:</strong> ' . htmlspecialchars($BorrowDate) . '</p>
                            <p><strong>Return Date:</strong> ' . htmlspecialchars($ReturnDate) . '</p>
                        </div>
                    </div>
                </body>
                </html>';
            } else {
                echo "You have already borrowed this book. Check your cookies!";
            }
        }
        else{
            echo "some validation are invalid";
        }
    }
    catch{
        echo "<h2 style=color: red> ",$e->get_error_message() . "</div>";
    }
?>