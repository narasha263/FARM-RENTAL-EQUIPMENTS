<?php
// Include database connection file
include_once 'db_connection.php'; // Assuming you have a file named db_connection.php where you establish a database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Retrieve user data from the database
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);

    // Check if the statement is prepared successfully
    if ($stmt) {
        // Bind parameters and execute the prepared statement
        $stmt->bind_param("s", $username);
        if ($stmt->execute()) {
            // Store result
            $stmt->store_result();
            if ($stmt->num_rows > 0) {
                // Bind result variables
                $stmt->bind_result($id, $db_username, $hashed_password);
                if ($stmt->fetch()) {
                    // Verify password
                    if (password_verify($password, $hashed_password)) {
                        // Password is correct, start a new session
                        session_start();
                        // Store data in session variables
                        $_SESSION["id"] = $id;
                        $_SESSION["username"] = $username;
                        // Redirect to index.php
                        header("location: index.php");
                    } else {
                        // Display error message if password is incorrect
                        echo "<div class='container'><p class='alert alert-danger'>Incorrect password.</p></div>";
                    }
                }
            } else {
                // Display error message if user does not exist
                echo "<div class='container'><p class='alert alert-danger'>User does not exist.</p></div>";
            }
        } else {
            // Error occurred while executing the statement
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
