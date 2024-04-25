
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
  <?php include_once 'header.php'; ?>
<br>
</head>
<body><br>

<!-- Contact Us Section -->
<section id="contact" class="py-5">
  <div class="container text-center">
  <h5>Contact Us</h5>
        <p>Email: info@farmrentalequipments.com</p>
        <p>Phone: +254 728 486506</p>
        <p>Address:  Farm Equipment Street, Nairobi</p>
    
    <!-- Contact Form -->
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form action="contact_process.php" method="POST">
          <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Your Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Your Message</label>
            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
    <!-- End Contact Form -->
    
  </div>
</section>

<!-- Footer Section -->
<?php include 'footer.php'; ?>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
