<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // If not logged in, redirect to the login page
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Farm Equipment Rental Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: navy;
            color: black;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            background-color: #333;
            padding-top: 20px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 10px 15px;
            border-bottom: 1px solid #555;
        }

        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }
    </style>
</head>
<body>

<!-- Navbar Section -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Farm Equipment Rental Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Sidebar Section -->
<div class="sidebar">
    <ul>
        <li><a href="admin_dashboard.php">Dashboard</a></li>
        <li><a href="manage-products.php">Manage Equipments</a></li>
        <li><a href="manage-bookings.php">Manage Bookings</a></li>
        <li><a href="users.php">Manage Users</a></li>
    </ul>
</div>

<!-- Content Section -->
<div class="content">
    <!-- Banner Section -->
    <section id="banner">
        <div class="container text-center py-5">
            <h1>Manage Equipments</h1>
            <p class="lead">Add, edit, or delete equipments available for rental.</p>
        </div>
    </section>

    <!-- Equipment Management Section -->
    <section id="equipment-management" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Equipment Management</h2>
            <div class="row">
                <!-- Add new equipment form -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add New Equipment</h5>
                            <form action="add_equipment.php" method="post">
                                <!-- Form fields for adding a new equipment -->
                                <!-- You can add fields for equipment name, image, description, price, etc. -->
                                <button type="submit" class="btn btn-primary">Add Equipment</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Display existing equipments -->
                <?php
                // Establish database connection (replace with your credentials)
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "farm rental system";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Query to retrieve equipments from the database
                $sql = "SELECT * FROM farm_equipment";
                $result = $conn->query($sql);

                // Loop through equipments and display them
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        ?>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="<?php echo $row['image']; ?>" class="card-img-top" alt="<?php echo $row['name']; ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['name']; ?></h5>
                                    <p class="card-text"><?php echo $row['description']; ?></p>
                                    <p class="card-text">Price: $<?php echo $row['rental_price']; ?></p>
                                    <!-- Update the link to pass the equipment ID as a parameter -->
                                    <a href="edit_equipment.php?equipment_id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                                    <a href="delete_equipment.php?equipment_id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>
            </div>
        </div>
    </section>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
