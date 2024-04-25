
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Farm Rental Service</title>
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
        .container {
    margin-top: 10px;
    text-align: center; 
    margin-left: 150px;
    margin-right: auto;
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
<div class="content">

<div class="container">
    <h1>PAYMENT DETAILS</h1>
    
    <?php
    // Establish database connection
    include_once 'db_connection.php';

    // Retrieve booking details
    $sql = "SELECT * FROM bookings";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $booking_id = $row["id"];
            $customer_name = $row["name"];
            $customer_email = $row["email"];
            $customer_phone = $row["phone"];
            $start_date = $row["start_date"];
            $end_date = $row["end_date"];
            $equipment_id = $row["equipment_id"];
            
            // Display booking details
            echo "<div class='booking-feedback'>";
            echo "<h2>Booking Details</h2>";
            echo "<p>Customer: $customer_name ($customer_email)</p>";
            echo "<p>Booking Dates: $start_date to $end_date</p>";
            echo "<p>Equipment ID: $equipment_id</p>";
            echo "<form action='process_payment.php' method='post'>";
            echo "<input type='hidden' name='booking_id' value='$booking_id'>";
            echo "<input type='submit' class='btn' value='View Booking'>";
            echo "</form>";
            echo "</div>";
        }
    } else {
        echo "<p>No bookings found.</p>";
    }

    // Retrieve payment details
    $sql = "SELECT * FROM payments";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<div class='booking-feedback'>";
        echo "<h2>Payment Details</h2>";
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Card Number</th><th>Expiry Date</th><th>CVV</th><th>Total Amount</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['card_number'] . "</td>";
            echo "<td>" . $row['expiry_date'] . "</td>";
            echo "<td>" . $row['cvv'] . "</td>";
            echo "<td>" . $row['total_amount'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
    } else {
        echo "<p>No payment details found.</p>";
    }

    // Close database connection
    $conn->close();
    ?>
</div>

<?php include "footer.php"; ?>
