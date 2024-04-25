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
    // Check if all required fields are filled
    if (isset($_POST['name']) && isset($_POST['image']) && isset($_POST['description']) && isset($_POST['price']) && isset($_POST['equipment_id'])) {
        // Get form data
        $name = $_POST['name'];
        $image = $_POST['image'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $equipment_id = $_POST['equipment_id'];

        // Establish database connection (replace with your credentials)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "farm rental system"; // Change to your actual database name

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare update query
        $sql = "UPDATE farm_equipment SET name=?, image=?, description=?, rental_price=? WHERE id=?";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            // Bind parameters and execute the prepared statement
            $stmt->bind_param("ssssi", $name, $image, $description, $price, $equipment_id);
            if ($stmt->execute()) {
                // If update successful, redirect to manage-products.php
                $_SESSION['success'] = "Equipment updated successfully.";
                header("Location: manage-products.php");
                exit;
            } else {
                $_SESSION['error'] = "Error updating equipment: " . $stmt->error;
                header("Location: edit_equipment.php?equipment_id=$equipment_id");
                exit;
            }
            // Close statement
            $stmt->close();
        } else {
            $_SESSION['error'] = "Error: " . $conn->error;
            header("Location: edit_equipment.php?equipment_id=$equipment_id");
            exit;
        }

        // Close the database connection
        $conn->close();
    } else {
        $_SESSION['error'] = "All fields are required!";
        header("Location: edit_equipment.php?equipment_id=$equipment_id");
        exit;
    }
} else {
    // If form data is not submitted, redirect to manage-products.php
    header("Location: manage-products.php");
    exit;
}
?>
