<?php
// Check if form is submitted and user ID is provided
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['user_id'])) {
    // Get form data
    $user_id = $_POST['user_id'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Database connection
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "farm rental system";
    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Hash the password

    // Prepare SQL statement to update user information
    $sql = "UPDATE users SET username = '$username', password = '$password' WHERE id = $user_id";

    if ($conn->query($sql) === TRUE) {
        // User information updated successfully, redirect back to the users page
        header("Location: users.php");
        exit();
    } else {
        echo "Error updating user: " . $conn->error;
    }

    // Close connection
    $conn->close();
} else {
    // If user ID is not provided or form is not submitted, redirect back to the users page
    header("Location: users.php");
    exit();
}
?>
