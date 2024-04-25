<?php
// Include database connection file
include_once 'db_connection.php'; // Assuming you have a file named db_connection.php where you establish a database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo "<div class='container'><p class='alert alert-danger'>Passwords do not match.</p></div>";
        exit(); // Stop further execution
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert the user into the database
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);

    // Check if the statement is prepared successfully
    if ($stmt) {
        // Bind parameters and execute the prepared statement
        $stmt->bind_param("ss", $username, $hashed_password);
        if ($stmt->execute()) {
    echo "<div class='container'><p class='alert alert-success'>Registration successfully!</p></div>";
    // Redirect to index.php after 2 seconds
    echo "<script>setTimeout(function() { window.location.href = 'login.php'; }, 2000);</script>";
} else {
    echo "<div class='container'><p class='alert alert-danger'>Error: " . $stmt->error . "</p></div>";
}
        // Close statement
        $stmt->close();
    } else {
        // Error occurred while preparing the statement
        echo "<div class='container'><p class='alert alert-danger'>Error: " . $conn->error . "</p></div>";
    }
} else {
    // Redirect to homepage if accessed directly without submitting form
    header("Location: index.php");
    exit();
}
?>
