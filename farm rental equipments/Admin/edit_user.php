<?php
// Include header.php for common header content
include ('header.php');

// Check if user ID is provided in the URL
if(isset($_GET['id']) && !empty($_GET['id'])) {
    // Get the user ID from the URL
    $user_id = $_GET['id'];

    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "farm rental system";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve user data from the database based on the provided ID
    $sql = "SELECT * FROM users WHERE id = $user_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User data found, display the form for editing
        $row = $result->fetch_assoc();
?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Edit User</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
            <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding-top: 50px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .form-control:focus {
            border-color: #007bff;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .btn-primary {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            background-color: #007bff;
            border: none;
            cursor: pointer;
            transition: background-color 0.15s ease-in-out;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: #dc3545;
            font-size: 0.875rem;
        }
    </style>        </head>
        <body>
            <div class="container">
                <h1>Edit User</h1>
                <form action="update_user.php" method="post">
                    <!-- Hidden field to store user ID -->
                    <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?php echo $row['username']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update User</button>
                </form>
            </div>
        </body>
        </html>
<?php
    } else {
        // No user found with the provided ID
        echo "User not found.";
    }

    // Close connection
    $conn->close();
} else {
    // No user ID provided in the URL
    echo "User ID not provided.";
}
?>

