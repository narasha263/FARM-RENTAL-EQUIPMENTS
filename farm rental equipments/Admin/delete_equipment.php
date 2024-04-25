<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // If not logged in, redirect to the login page
    header("Location: login.php");
    exit;
}

// Check if equipment ID is provided in the URL
if (isset($_GET['equipment_id'])) {
    // Include database connection file
    include_once "db_connection.php";

    // Get equipment ID from URL parameter
    $equipment_id = $_GET['equipment_id'];

    // Prepare SQL statement to delete the equipment from the database
    $sql = "DELETE FROM farm_equipment WHERE id = ?";

    // Prepare and bind parameter
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $equipment_id);

        // Execute the statement
        if ($stmt->execute()) {
            // Redirect to the manage equipments page with success message
            header("Location: manage-products.php?success=1");
            exit;
        } else {
            // Redirect to the manage equipments page with error message
            header("Location: manage-equipments.php?error=1");
            exit;
        }
    } else {
        // Redirect to the manage equipments page with error message
        header("Location: manage-equipments.php?error=1");
        exit;
    }

    // Close statement
    $stmt->close();

    // Close database connection
    $conn->close();
} else {
    // If equipment ID is not provided, redirect to the manage equipments page
    header("Location: manage-equipments.php");
    exit;
}
?>
