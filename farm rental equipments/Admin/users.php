
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Farm Rental Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

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
            margin-left: 150px;
            padding: 50px;
        }
        .container {
    margin-top: 10px;
    text-align: center; 
    margin-left: 150px;
    margin-right: auto;
    padding: 1px;

}

    </style>
</head>
<body>

<!-- Navbar Section -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="about.php">Farm Equipment Rental Admin</a>
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
        <li><a href="manage-products.php">Manage Farm Equipments</a></li>
        <li><a href="manage-bookings.php">Manage Bookings</a></li>
        <li><a href="users.php">Manage Users</a></li>
    </ul>
</div>

</style>
<br>

<div class="container">
    <!-- Banner Section -->
    <section id="banner">
        <div class="container text-center py-5">
            <h1>Manage Users</h1>
            <p class="lead">Add, edit, or delete Users.</p>
        </div>
    </section>

    <section id="user-management" class="bg-light py-5">
            <h2 class="text-center mb-4">Users Management</h2>
            <div class="row">
                
                
<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "farm rental system";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}// (Assuming connection code is already included here)

// Retrieve users from the database
$sql = "SELECT id, username, password FROM users"; // Include "password" column in the query
$result = $conn->query($sql);
?>

</div>
<body>
        <h1>Manage Users</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add New User</h5>
                        <form action="add_user.php" method="post">
                            <!-- Add fields for adding a new user if needed -->
                            <button type="submit" class="btn btn-primary">Add User</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <h2>Users List</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result->num_rows > 0) {
                            // Output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["id"] . "</td>";
                                echo "<td>" . $row["username"] . "</td>";
                                echo "<td>" . $row["password"] . "</td>";
                                echo "<td>";
                                echo "<a href='edit_user.php?id=" . $row["id"] . "' class='btn btn-primary'>Edit</a>";
                                echo "<a href='delete_user.php?id=" . $row["id"] . "' class='btn btn-danger'>Delete</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='3'>No users found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>