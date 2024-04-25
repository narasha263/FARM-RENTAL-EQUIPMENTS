<?php
// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve equipment ID from the form
    $equipmentId = $_POST['equipment_id'];
    
    // Placeholder logic to retrieve transaction details based on equipment ID
    // Replace this with your actual logic to fetch transaction details from the database
    $transactionDetails = [
        'item_name' => 'Farm Equipment Rental', // Name of the item being purchased
        'item_number' => $equipmentId, // Unique identifier for the item
        'amount' => 100.00, // Total amount of the transaction
        'currency_code' => 'USD', // Currency code (e.g., USD)
        'return_url' => 'http://yourdomain.com/success.php', // URL to redirect after successful payment
        'cancel_url' => 'http://yourdomain.com/cancel.php' // URL to redirect if payment is canceled
    ];

    // Redirect URL for PayPal sandbox environment (change to live PayPal URL for production)
    $paypalURL = 'https://www.paypal.com/myaccount/transfer/homepage';
    
    // Build PayPal redirect URL with transaction details
    $redirectURL = $paypalURL . '?' . http_build_query($transactionDetails);
    
    // Redirect user to PayPal for payment
    header('Location: ' . $redirectURL);
    exit();
} else {
    // Redirect to homepage if accessed directly without submitting form
    header("Location: index.php");
    exit();
}
?>
