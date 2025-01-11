<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="ss.css">
    <!-- <div class="left">management</div> -->
    <!-- <div class="middle"></div>
    <div class="right"></div> -->
    <div class="image-container">
        <img src="ss.png" alt="name" class="image1" width="30%">
    </div>
    
    <div class="table">
        <div class="left">
            <!-- <h1>HeadOne</h1><br> -->
            <!-- <h1>HeadOne</h1><br> -->
        </div>
        <div class="two">
            <div class="second1"></div>
            <div class="second2"></div>
            <div class="second3">
                <div class="second3One"></div>
                <div class="second3Two"></div>
                <div class="second3Three"></div>
            </div>
            <div class="second4">
                <form action="connect_database.php" method="POST">
                    <div class="bookCon">
                        <span>Isbn:</span>
                        <input type="text" name="isbn" placeholder="Isbn">
                        <span>bookName</span>
                        <input type="text" name="bookName" placeholder="bookName">
                        <span>bookTitle</span>
                        <input type="text" name="bookTitle" placeholder="booktitle">
                        <span>quantity</span>
                        <input type="text" name="quantity" placeholder="quantity">
                        <span>fiction</span>
                        <input type="text" placeholder="fiction">
                        <input type="submit" name="submit" id="submit" style="margin-inline:35%">
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