<?php include ('header.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - Farm Rental Service</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: navy;
      color: white;
    }
    .register-container {
      max-width: 400px;
      margin: 0 auto;
      margin-top: 100px;
    }
  </style>
</head>
<body>

<div class="container register-container">
  <h2 class="text-center mb-4">Register for Farm Rental Service</h2>
  <form action="register_process.php" method="POST">
    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" class="form-control" id="username" name="username" required>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <div class="mb-3">
      <label for="confirm_password" class="form-label">Confirm Password</label>
      <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Register</button>
  </form>
  <p class="mt-3 text-center">Already have an account? <a href="login.php">Login here</a>.</p>
</div>
<?php include ('footer.php') ?>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
