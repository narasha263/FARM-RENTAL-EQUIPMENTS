<?php include "header.php"; ?><br>

<?php
// Include database connection file
include_once 'db_connection.php'; // Assuming you have a file named db_connection.php where you establish a database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Insert the contact form submission into the database
    $sql = "INSERT INTO contact_submissions (name, email, message) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    
    // Check if the statement is prepared successfully
    if ($stmt) {
        // Bind parameters and execute the prepared statement
        $stmt->bind_param("sss", $name, $email, $message);
        if ($stmt->execute()) {
            // Contact form submission successfully inserted into database
            echo "Thank you for contacting us. We will get back to you shortly.";
        } else {
            // Error occurred while executing the statement
            echo "Error: " . $stmt->error;
        }
        // Close statement
        $stmt->close();
    } else {
        // Error occurred while preparing the statement
        echo "Error: " . $conn->error;
    }
} else {
    // Redirect to homepage if accessed directly without submitting form
    header("Location: index.php");
    exit();
}
?>
<p class='text-center'><a href='order.php' class='btn btn-primary'>Confirmation Page</a></p>
<p class='text-center'><a href='index.php' class='btn btn-primary'>Back to Home</a></p>

<?php include "footer.php"; ?>
