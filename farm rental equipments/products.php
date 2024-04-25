<?php include('header.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Explore Rental Options - Farm Rental Equipments</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: navy;
      color: black;
      background-image: url('images/bg.jpg');
    }
    
    .container {
      background-color: rgb(30, 69, 177);
    }
  </style>
</head>
<body>

<!-- Banner Section -->
<section id="banner">
  <div class="container text-center py-5">
    <h1>Explore Farm Equipment Options</h1>
    <p class="lead">Browse through our available farm equipment for rental.</p>
  </div>
</section>

<!-- Rental Options Section -->
<section id="rental-options" class="bg-light py-5">
  <div class="container">
    <h2 class="text-center mb-4">Available Farm Equipment for Rental</h2>
    <div class="row">
      <?php
        include_once 'db_connection.php';
        $conn = new mysqli('localhost', 'root', '', 'farm rental system'); // Change the database name to match your farm rental system database

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Query to retrieve farm equipment from the database
        $sql = "SELECT * FROM farm_equipment"; // Change "vehicles" to "farm_equipment" if that's the name of your table
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Loop through rental options and display them
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="col-md-4">
                  <div class="card">
                    <img src="<?php echo $row['image']; ?>" class="card-img-top" alt="<?php echo $row['name']; ?>">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $row['name']; ?></h5>
                      <p class="card-text"><?php echo $row['description']; ?></p>
                      <!-- Form to add equipment to cart -->
                      <form action="cart.php" method="post">
                        <input type="hidden" name="equipment_id" value="<?php echo $row['id']; ?>">
                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                      </form>
                      <!-- Link to view equipment details -->
                      <a href="rent.php?equipment_id=<?php echo $row['id']; ?>" class="btn btn-secondary">View Details</a>
                    </div>
                  </div>
                </div>
                <?php
            }
        } else {
            echo "0 results";
        }

        // Close connection
        $conn->close();
      ?>
    </div>
  </div>
</section>
<?php include 'footer.php'; ?>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
