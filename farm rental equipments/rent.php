<?php include_once 'header.php'; ?>

<?php
// Define an array of farm equipment with their details
$farmEquipment = [
    1 => ["name" => "Cultivator", "image" => "images/cultivator.jpg", "description" => "Brand New Cultivator", "price" => 90000.00],
    2 => ["name" => "Tractor", "image" => "images/tractor.jpg", "description" => "Used Tractor", "price" => 10000.00],
    3 => ["name" => "Wheelbarow", "image" => "images/wheelbarow.jpg", "description" => "Brand New Wheelbarow", "price" => 6000.00],
    4 => ["name" => "Axe", "image" => "images/axe.jpg", "description" => "Brand New Axe", "price" => 4000.00],
    5 => ["name" => "Pickaxe", "image" => "images/pickaxe.jpg", "description" => "Brand New Pickaxe", "price" => 3000.00],
    6 => ["name" => "Spade", "image" => "images/spade.jpg", "description" => "Brand New Spade", "price" => 900.00],
    7 => ["name" => "Rage", "image" => "images/rage.jpg", "description" => "Brand New Rage", "price" => 400.00],
    8 => ["name" => "Sickle", "image" => "images/sickle.jpg", "description" => "Brand New Sickle", "price" => 300.00],
    9 => ["name" => "Grab hoe", "image" => "images/grab_hoe.jpg", "description" => "Brand New Grab Hoe", "price" => 500.00],
];

// Check if the equipment ID is set in the URL parameters
if (isset($_GET['equipment_id'])) {
    // Get the equipment ID from the URL parameters
    $equipmentId = $_GET['equipment_id'];

    // Check if the equipment ID exists in the farm equipment array
    if (isset($farmEquipment[$equipmentId])) {
        // Get the details of the selected equipment
        $selectedEquipment = $farmEquipment[$equipmentId];
    } else {
        // Handle invalid equipment ID
        $selectedEquipment = ["name" => "Unknown Equipment", "image" => "images/default.jpg", "description" => "Description not available", "price" => 0.00];
    }
} else {
    // Handle case when no equipment ID is provided
    $selectedEquipment = ["name" => "Unknown Equipment", "image" => "images/default.jpg", "description" => "Description not available", "price" => 0.00];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Selected Equipment</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Add custom CSS styles here */
  </style>
</head>
<body>

<!-- Selected Equipment Section -->
<section id="selected-equipment" class="bg-light py-5">
  <div class="container">
    <h2 class="text-center mb-4">Selected Equipment</h2>
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <!-- Use PHP to set the src attribute dynamically -->
          <div class="card-body">
            <h5 class="card-title"><?php echo $selectedEquipment['name']; ?></h5>
            <p class="card-text"><?php echo $selectedEquipment['description']; ?></p>
            <p class="card-text">Price: $<?php echo $selectedEquipment['price']; ?></p>
            <!-- Add rental form or booking details here -->
            <form action="booking_confirmation.php" method="POST">
              <!-- Include input fields for user details, rental dates, etc. -->
              <!-- Example: -->
              <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
              </div>
              <div class="mb-3">
                <label for="start_date" class="form-label">Start Date</label>
                <input type="date" class="form-control" id="start_date" name="start_date" required>
              </div>
              <div class="mb-3">
                <label for="end_date" class="form-label">End Date</label>
                <input type="date" class="form-control" id="end_date" name="end_date" required>
              </div>
              <input type="hidden" name="selected_equipment_id" value="<?php echo $equipmentId; ?>">
              <button type="submit" class="btn btn-primary">Confirm Booking</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<script>
  // Get today's date
  var today = new Date().toISOString().split('T')[0];

  // Set the minimum value for the date input fields
  document.getElementById("start_date").setAttribute("min", today);
  document.getElementById("end_date").setAttribute("min", today);
</script>
</body>
</html>
