
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
            margin-left: 250px;
            padding: 20px;
        }
   

.booking-feedback {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 10px;
    display: inline-block; /* Keep the content centered */
    text-align: left;
    margin-left: 60px; /* Add margin for spacing between booking feedback */
}

.booking-feedback p {
    margin: 5px 0;
}
.booking-item p {
    margin: 5px 0;
}

.btn {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 8px 16px;
    border-radius: 5px;
    cursor: pointer;
}

.btn:hover {
    background-color: #0056b3;
}

</style>
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
        <li><a href="#">Dashboard</a></li>
        <li><a href="manage-products.php">Manage Farm Equipments</a></li>
        <li><a href="manage-bookings.php">Manage Bookings</a></li>
        <li><a href="users.php">Manage Users</a></li>
    </ul>
</div>

</style>
<br>
<div class="content">

<div class="container">
    <div class="payment-details">
        <h2>Payment Details</h2>
        <?php
        if(isset($_POST['booking_id'])) {
            $booking_id = $_POST['booking_id'];
            
            // Retrieve booking details from the database based on the provided booking ID
            // Replace the database connection details with your actual credentials
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
            
            // Fetch booking details from the database
            $sql = "SELECT * FROM bookings WHERE id = $booking_id";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<div class='payment-item'>";
                    echo "<p>Booking ID: " . $row["id"]. "</p>";
                    echo "<p>Customer Name: " . $row["name"]. "</p>";
                    echo "<p>Customer Email: " . $row["email"]. "</p>";
                    echo "<p>Start Date: " . $row["start_date"]. "</p>";
                    echo "<p>End Date: " . $row["end_date"]. "</p>";
                    echo "<p>Selected Equipment ID: " . $row["equipment_id"]. "</p>";
                    // You can display more booking details as needed
                    echo "</div>";
                }
            } else {
                echo "No booking details found.";
            }
            $conn->close();
        } else {
            echo "No booking ID provided.";
        }
        ?>

           
        </form>
    </div>
</div>

<?php include ('footer.php'); ?>
