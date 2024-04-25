<?php
// Check if user ID is provided in the URL
if(isset($_GET['id']) && !empty($_GET['id'])) {
    // Get the user ID from the URL
    $user_id = $_GET['id'];

    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "farm rental system";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to delete the user
    $sql = "DELETE FROM users WHERE id = $user_id";

    if ($conn->query($sql) === TRUE) {
        // User deleted successfully, redirect back to the users page
        header("Location: users.php");
        exit();
    } else {
        echo "Error deleting user: " . $conn->error;
    }

    // Close connection
    $conn->close();
} else {
    // No user ID provided in the URL
    echo "User ID not provided.";
}
?>
