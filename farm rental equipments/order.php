
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

<body>
  
  <div class="container text-center">
    <div class="container">
        <h1>Order Confirmation</h1>
        <form method="post" action="process_payment.php">
        <div class="mb-3">
            <label for="cardNumber" class="form-label">Card Number</label>
            <input type="text" class="form-control" id="cardNumber" name="cardNumber" placeholder="Enter Card Number" required>
        </div>
        <div class="mb-3">
            <label for="expiryDate" class="form-label">Expiry Date</label>
            <input type="text" class="form-control" id="expiryDate" name="expiryDate" placeholder="MM/YYYY" required>
        </div>
        <div class="mb-3">
            <label for="cvv" class="form-label">CVV</label>
            <input type="text" class="form-control" id="cvv" name="cvv" placeholder="CVV" required>
        </div>
        <div class="mb-3">
            <label for="totalAmount" class="form-label">Total Amount</label>
            <input type="text" class="form-control" id="totalAmount" name="totalAmount" placeholder="Total Amount" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit Payment</button>
  
    </div>
</div>
<?php include ('footer.php'); ?>