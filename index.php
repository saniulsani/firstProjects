<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="mainOne.css">
    <!-- <div class="left">management</div> -->
    <!-- <div class="middle"></div>
    <div class="right"></div> -->
    <div class="image-container">
        <img src="ss.png" alt="name" class="image1" width="30%">
    </div>
    
    <div class="table">
         <div class="left">
            <h3>Used Tokens:</h3>
            <?php
            // Fetch the JSON data from the token.json file
            $jsonFile = 'token.json';  
            $jsonData = file_get_contents($jsonFile); 
            $data = json_decode($jsonData, true); 
            
            // Check if 'used_tokens' is available and is an array
            if (isset($data['used_tokens']) && is_array($data['used_tokens'])) {
                $count = 1;
                foreach ($data['used_tokens'] as $token) {
                    echo "<li>Token $count: $token</li>";  
                    $count++;
                }
            } else {
                echo "<li>No used tokens found.</li>"; 
            }
            ?>
        </div>
        <div class="two">
        <div class="second1">
            <h3>Borrowed Books List:</h3>
            <table border="1" cellpadding="10" cellspacing="0">
                <thead>
                    <tr>
                        <th>ISBN</th>
                        <th>Book Title</th>
                        <th>Book Name</th>
                        <th>Quantity</th>
                        <th>Fiction</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Database connection
                    $host = 'localhost'; // Change this to your database host
                    $username = 'root'; // Change this to your database username
                    $password = ''; // Change this to your database password
                    $database = 'test'; // Change this to your database name

                    // Connect to the database
                    $conn = new mysqli($host, $username, $password, $database);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Fetch data from the table (replace 'borrowed_books' with your table name)
                    $sql = "SELECT isbn, BookTitle, bookNames, Quantity, fiction FROM borrow_book";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($row['isbn']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['BookTitle']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['bookNames']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['Quantity']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['fiction']) . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No data found</td></tr>";
                    }

                    // Close the database connection
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>

            <div class="second2">
                <form action="connect_database.php" method="POST">
                    <div class="bookCon">
                        <span>Isbn:</span>
                        <input type="text" name="isbn" placeholder="Isbn" required>
                        <span>bookTitle</span>
                        <input type="text" name="bookTitle" placeholder="booktitle" required>
                        <span>bookName</span>
                        <input type="text" name="bookName" placeholder="bookName" required>
                        
                        <span>quantity</span>
                        <input type="text" name="quantity" placeholder="quantity" required>
                        <span>fiction</span>
                        <input type="text" name="fiction" placeholder="fiction" required>
                        <!-- <button type="button" name="update" id="update" style="margin-inline:35%">update</button> -->
                        <input type="submit" name="update" id="update" style="margin-inline:35%">
                    </div>
                </form>
            </div>
            <div class="second3" height="30%">
                <div class="second3One">
                    <img src="image/one.jpg" alt="Image 1" width="100%" height="30%">
                </div>
                <div class="second3Two">
                    <img src="image/two.jpg" alt="Image 2" width="100%" height="30%">
                </div>
                <div class="second3Three">
                    <img src="image/three.jpg" alt="Image 3" width="100%" height="30%">
                </div>
            </div>
            <div class="second4">
                <form action="connect_database.php" method="POST">
                    <div class="bookCon">
                        <span>Isbn:</span>
                        <input type="text" name="isbn" placeholder="Isbn" required>
                        <span>bookTitle</span>
                        <input type="text" name="bookTitle" placeholder="booktitle" required>
                        <span>bookName</span>
                        <input type="text" name="bookName" placeholder="bookName" required>
                        
                        <span>quantity</span>
                        <input type="text" name="quantity" placeholder="quantity" required>
                        <span>fiction</span>
                        <input type="text" name="fiction" placeholder="fiction">
                        <input type="submit" name="submit" id="submit" style="margin-inline:35%" required>
                    </div>
                </form>
                
            </div>
        </div>
        <div class="right"></div>
        <!-- <h1 class="one">head one</h1>
        <h1 class="two">head one
            <div class="second">
                <h2 class="second1"></h1>
                <h2 class="second2"></h1>
            </div>
        </h1> -->
        <!-- <h1 class="three">head one</h1> -->
    </div>
    <div class="lastOne">
        <div class="lastOne1">
        <form action="main.php" method="POST" class="padding">
                <div style="margin-left: 10px;">
                    <div class="paddings" style="padding-bottom: 10px">
                        <p>book title</p>
                        <label for="medical_books">Choose a medical book:</label>
                        <select id="medical_books" name="medical_books" style="width: 50%">
                            <option value="gray_anatomy">Gray's Anatomy</option>
                            <option value="harrison_internal_medicine">Harrison's Principles of Internal Medicine</option>
                            <option value="guyton_physiology">Guyton and Hall Textbook of Medical Physiology</option>
                            <option value="robbins_pathologic_basis">Robbins and Cotran Pathologic Basis of Disease</option>
                            <option value="kumar_clark_clinical_medicine">Kumar and Clark's Clinical Medicine</option>
                            <option value="nelson_pediatrics">Nelson Textbook of Pediatrics</option>
                            <option value="schwartz_surgery">Schwartz's Principles of Surgery</option>
                            <option value="goodman_gilman_pharmacology">Goodman & Gilman's The Pharmacological Basis of Therapeutics</option>
                            <option value="ferri_clinical_advisor">Ferri's Clinical Advisor</option>
                            <option value="davidson_clinical_practice">Davidson's Principles and Practice of Medicine</option>
                        </select>
                    </div>
                    <div class="dateT">
                        <p>Borrow Date </p>
                        <input type="date" id="date" name="date">
                    </div>
                    <div>
                        <p>Your Name</p>
                        <input type="text" id="name" name="name" placeholder="Enter your Name">
                    </div>
                    <div>
                        <p>your Id </p>
                        <input type="text" id="id" name="id" placeholder="Enter your Id">
                    </div>
                    <div class="token">
                        <p>Token Number</p>
                        <input type="token: " placeholder="your token name" name="token" placeholder="Enter your Token">
                    </div>
                    <div style="padding-top: 10px">
                        <label for="return_date">Return Date :</label>
                        <input type="date" id="return_date" name="return_date">
                    </div>
                    <div style="padding-top: 10px">
                        <label for="E-mail">Your E-mail :</label>
                        <input type="email" id="email" name="email" placeholder="Enter your E-mail">
                    </div>
                    <div style="padding-top: 10px; padding-bottom: 10px">
                        <input type="submit" id="submit" name="submit" >
                    </div>
                </div>
           </form>
        </div>
        <div class="lastOne2">
            <p>Tokens</p>
            <div id="tokens-container">
                <?php
                // Read the JSON file and decode it
                $jsonFile = 'token.json';
                $jsonData = file_get_contents($jsonFile);
                $data = json_decode($jsonData, true);
                // Display tokens
                echo "<ul>";
                $count=1;
                foreach ($data['tokens'] as $token) {
                    echo "<li>Token $count: $token</li>";
                    echo "</br>";
                    $count++;
                }
                echo "</ul>";
                ?>
            </div>
        </div>
    </div>
</head>

<body>
    
</body>
</html>