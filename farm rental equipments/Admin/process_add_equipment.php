<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // If not logged in, redirect to the login page
    header("Location: login.php");
    exit;
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection file
    include_once "db_connection.php";

    // Get form data
    $name = $_POST['name'];
    $description = $_POST['description'];
    $rental_price = $_POST['rental_price'];
    $image = $_POST['image'];

    // Prepare SQL statement to insert new equipment into the database
    $sql = "INSERT INTO farm_equipment (name, description, rental_price, image) VALUES (?, ?, ?, ?)";

    // Prepare and bind parameters
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssds", $name, $description, $rental_price, $image);

        // Execute the statement
        if ($stmt->execute()) {
            // Redirect to the manage equipments page with success message
            header("Location: manage-products.php?success=1");
            exit;
        } else {
            // Redirect to the add equipment page with error message
            header("Location: add_equipment.php?error=1");
            exit;
        }
    } else {
        // Redirect to the add equipment page with error message
        header("Location: add_equipment.php?error=1");
        exit;
    }

    // Close statement
    $stmt->close();

    // Close database connection
    $conn->close();
} else {
    // If form data is not submitted, redirect to the add equipment page
    header("Location: add_equipment.php");
    exit;
}
?>
