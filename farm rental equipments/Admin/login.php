<?php
// Start the session
session_start();

// Define your admin credentials
$admin_username = "admin";
$admin_password = "admin@123";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $entered_username = $_POST['username'];
    $entered_password = $_POST['password'];

    // Check if the entered credentials match the admin credentials
    if ($entered_username == $admin_username && $entered_password == $admin_password) {
        // Authentication successful
        // Set session variables
        $_SESSION['username'] = $entered_username;

        // Redirect to the admin dashboard
        header("Location: admin_dashboard.php");
        exit;
    } else {
        // Authentication failed
        $error_message = "Invalid username or password.";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login - Farm Rental Service</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: navy;
      color: black;
      /* Assuming you have a background image */
      background-image: url('images/bg.jpg');
    }
    
    .container {
      background-color: rgb(30, 69, 177);
      padding: 20px;
      margin-top: 50px;
      width: 400px;
    }
  </style>
</head>
<body>

<!-- Login Form Section -->
<section id="login-form">
  <div class="container">
    <h2 class="text-center mb-4">Admin Login</h2>
    <?php if(isset($error_message)): ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $error_message; ?>
      </div>
    <?php endif; ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
  </div>
</section>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
