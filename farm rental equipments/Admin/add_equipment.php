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
    <title>Add Equipment - Farm Equipment Rental Service</title>
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
        <li><a href="manage-equipments.php">Manage Equipments</a></li>
        <li><a href="manage-bookings.php">Manage Bookings</a></li>
        <li><a href="users.php">Manage Users</a></li>
    </ul>
</div>

<!-- Content Section -->
<div class="content">
    <!-- Banner Section -->
    <section id="banner">
        <div class="container text-center py-5">
            <h1>Add New Equipment</h1>
            <p class="lead">Enter details to add a new equipment for rental.</p>
        </div>
    </section>

    <!-- Add Equipment Form Section -->
    <section id="add-equipment" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Add Equipment Form</h2>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="process_add_equipment.php" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Equipment Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="rental_price" class="form-label">Rental Price ($)</label>
                            <input type="number" class="form-control" id="rental_price" name="rental_price" step="0.01" required>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image URL</label>
                            <input type="text" class="form-control" id="image" name="image" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Equipment</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
