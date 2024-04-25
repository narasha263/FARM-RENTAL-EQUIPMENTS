<?php include "header.php"; ?>

<div class="container">
    <h1>PAYMENT DETAILS</h1>
    
    <!-- Payment Form -->
   
    
    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $cardNumber = $_POST['cardNumber'];
        $expiryDate = $_POST['expiryDate'];
        $cvv = $_POST['cvv'];
        $totalAmount = $_POST['totalAmount'];
        
        // Validate and process the form data as needed
        // For demonstration purpose, let's just display the submitted data
        echo "<h2>Payment Confirmation</h2>";
        echo "<p>Card Number: $cardNumber</p>";
        echo "<p>Expiry Date: $expiryDate</p>";
        echo "<p>CVV: $cvv</p>";
        echo "<p>Total Amount: $totalAmount</p>";
        
        // Insert payment details into the database
        // Assuming you have established a database connection
        include_once 'db_connection.php';
        
        // Prepare and execute the SQL query
        $sql = "INSERT INTO payments (card_number, expiry_date, cvv, total_amount) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            echo "Error preparing SQL: " . $conn->error;
        } else {
            $stmt->bind_param("sssd", $cardNumber, $expiryDate, $cvv, $totalAmount);
            if ($stmt->execute()) {
                echo "<p>Payment details stored in the database successfully.</p>";
            } else {
                echo "<p>Error executing SQL: " . $stmt->error . "</p>";
            }
            $stmt->close();
        }
        $conn->close();
    }
    ?>
    
</div>

<?php include "footer.php"; ?>
