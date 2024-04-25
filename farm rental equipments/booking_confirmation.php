
<?php
// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $selected_equipment_id = $_POST['selected_equipment_id'];

    // Validation and sanitation (you can add more validation as needed)
    $name = htmlspecialchars($name);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $phone = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
    $start_date = htmlspecialchars($start_date);
    $end_date = htmlspecialchars($end_date);
    $selected_equipment_id = intval($selected_equipment_id); // Convert to integer

    // Insert data into the database (assuming you have a MySQL database connection)
    include_once 'db_connection.php'; // Include your database connection file

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO bookings (name, email, phone, start_date, end_date, equipment_id) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $name, $email, $phone, $start_date, $end_date, $selected_equipment_id);
 
    // Execute the prepared statement
    if ($stmt->execute()) {
        // Booking successfully inserted into database
        $confirmationMessage = "Your booking has been confirmed.";
    } else {
        // Error occurred while inserting into database
        $confirmationMessage = "Sorry, there was an error processing your booking. Please try again later.";
    }

    // Close statement
    $stmt->close();
} else {
    // Redirect to homepage if accessed directly without submitting form
    header("Location: index.php");
    exit();
}
    // Display confirmation message
    $confirmationMessage = "Thank you, $name! Your booking for the selected vehicle has been confirmed from $start_date to $end_date. Go to the payment page below";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking Confirmation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Add custom CSS styles here */
  </style>
</head>
<body>

<!-- Confirmation Section -->
<section id="confirmation" class="bg-light py-5">
  <div class="container">
    <h2 class="text-center mb-4">Booking Confirmation</h2>
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-body">
            <?php if (isset($confirmationMessage)) : ?>
              <p><?php echo $confirmationMessage; ?></p>
            <?php else : ?>
              <p>Sorry, there was an error processing your booking. Please try again later.</p>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<p class='text-center'><a href='order.php' class='btn btn-primary'>Payment Page</a></p>
<p class='text-center'><a href='index.php' class='btn btn-primary'>Back to Home</a></p>


<?php include 'footer.php'; ?>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
