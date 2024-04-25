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
if (!isset($_GET['equipment_id'])) {
    // If not provided, redirect back to manage-equipments.php
    header("Location: manage-products.php");
    exit;
}

// Get the equipment ID from the URL
$equipment_id = $_GET['equipment_id'];

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

// Retrieve equipment information based on ID
$sql = "SELECT * FROM farm_equipment WHERE id = $equipment_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Equipment found, fetch data
    $equipment = $result->fetch_assoc();
} else {
    // Equipment not found, redirect back to manage-equipments.php
    header("Location: manage-products.php");
    exit;
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Equipment - Farm Equipment Rental Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: navy;
            color: black;
        }

        .content {
            margin-top: 50px;
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="text-center">Edit Equipment</h1>
    <form action="update_equipment.php" method="post">
        <input type="hidden" name="equipment_id" value="<?php echo $equipment['id']; ?>">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $equipment['name']; ?>">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image URL</label>
            <input type="text" class="form-control" id="image" name="image" value="<?php echo $equipment['image']; ?>">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"><?php echo $equipment['description']; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="<?php echo $equipment['rental_price']; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Update Equipment</button>
    </form>
</div>

</body>
</html>
