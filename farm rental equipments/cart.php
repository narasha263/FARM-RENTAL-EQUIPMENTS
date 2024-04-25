<?php include_once 'header.php'; ?>

<?php
// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $equipmentId = $_POST['equipment_id'];

    // Placeholder logic for adding equipment to cart
    // You can replace this with your actual logic to add the equipment to the cart
    $confirmationMessage = "Equipment with ID $equipmentId added to cart successfully.";
} else {
    // Redirect to homepage if accessed directly without submitting form
    header("Location: index.php");
    exit();
}

// Include database connection file
include_once 'db_connection.php';

// Query to retrieve equipment details based on equipment ID
$sql = "SELECT * FROM farm_equipment WHERE id = $equipmentId";
$result = $conn->query($sql);

// Check if the query was successful and if there is a row returned
if ($result && $result->num_rows > 0) {
    // Fetch the row as an associative array
    $row = $result->fetch_assoc();
    // Retrieve equipment details
    $name = $row['name'];
    $description = $row['description'];
    $image = $row['image'];
    $price = $row['price'];
} else {
    // Set default values if equipment details are not found
    $name = "Unknown Equipment";
    $description = "Description not available";
    $image = "images/default.jpg";
    $price = 0;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart - Farm Rental Equipments</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Add custom CSS styles here */
  </style>
</head>
<body>

<!-- Cart Section -->
<section id="cart" class="bg-light py-5">
  <div class="container">
    <h2 class="text-center mb-4">Cart</h2>
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <img src="<?php echo $image; ?>" class="card-img-top" alt="<?php echo $name; ?>">
          <div class="card-body">
            <h5 class="card-title"><?php echo $name; ?></h5>
            <p class="card-text"><?php echo $description; ?></p>
            <p class="card-text">Price: Ksh <?php echo $price; ?></p>
            <?php if (isset($confirmationMessage)) : ?>
              <p><?php echo $confirmationMessage; ?></p>
              <!-- Button to proceed to checkout -->
              <form action="paypal_checkout.php" method="post">
                <input type="hidden" name="equipment_id" value="<?php echo $equipmentId; ?>">
                <button type="submit" class="btn btn-primary">Proceed to Checkout</button>
              </form>
            <?php else : ?>
              <p>Sorry, there was an error adding the equipment to the cart. Please try again later.</p>
            <?php endif; ?>
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

</body>
</html>
