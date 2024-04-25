<!DOCTYPE html>
<html lang="en">
<head>
    <meta cahrset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <title> Farm Equipments Rental Website</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
<style>
    .rent {
            background-color: #f2f2f2; /* Light gray background color */
            padding: 80px 0; /* Adjust padding as needed */
            text-align: center; /* Center align the content */
        }

        .rent .heading {
            margin-bottom: 40px; /* Add space between heading and boxes */
        }

        .rent h1 {
            font-size: 36px; /* Increase font size for the main heading */
        }

        /* Style for the rent-container */
        .rent-container {
            display: flex;
            justify-content: space-around; /* Align boxes evenly */
            flex-wrap: wrap;
        }

        /* Style for individual boxes */
        .box {
            width: 30%; /* Adjust box width as needed */
            padding: 20px; /* Add padding to the boxes */
            background-color: #ffffff; /* White background color for boxes */
            border-radius: 10px; /* Add rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add shadow for depth */
            margin-bottom: 30px; /* Add space between boxes */
            text-align: left; /* Left align text in boxes */
        }

        /* Style for box headings */
        .box h2 {
            color: #333333; /* Dark text color */
            margin-bottom: 10px; /* Add space between heading and content */
        }

        /* Style for box paragraphs */
        .box p {
            color: #666666; /* Light text color */
            line-height: 1.6; /* Increase line height for readability */
        }
        .services {
            background-color: #f9f9f9; /* Light gray background color */
            padding: 80px 0; /* Adjust padding as needed */
            text-align: center; /* Center align the content */
        }

        .services .heading {
            margin-bottom: 40px; /* Add space between heading and boxes */
        }

        .services h1 {
            font-size: 36px; /* Increase font size for the main heading */
            margin-bottom: 20px; /* Add space below the main heading */
        }

        /* Style for the service-container */
        .service-container {
            display: flex;
            justify-content: center; /* Center align boxes horizontally */
            flex-wrap: wrap; /* Allow boxes to wrap to the next line */
            gap: 30px; /* Add space between boxes */
        }

        /* Style for individual boxes */
        .box {
            width: 200px; /* Adjust box width as needed */
            padding: 20px; /* Add padding to the boxes */
            background-color: #ffff; /* White background color for boxes */
            border-radius: 10px; /* Add rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add shadow for depth */
            margin-bottom: 30px; /* Add space between boxes */
            text-align: left; /* Left align text in boxes */
        }

        /* Style for box headings */
        .box h1 {
            color: #333333; /* Dark text color */
            margin-bottom: 10px; /* Add space between heading and content */
        }

        /* Style for box paragraphs */
        .box p {
            color: #666666; /* Light text color */
            line-height: 1.6; /* Increase line height for readability */
        }

        /* Style for box images */
        .box-img {
            margin-bottom: 15px; /* Add space below the image */
        }

        .box-img img {
            width: 100%; /* Make images fill the container */
            border-radius: 5px; /* Add rounded corners to images */
        }

        /* Style for rent now link */
        .box a {
            display: inline-block; /* Ensure link appears as a block */
            background-color: #007bff; /* Blue background color */
            color: #ffffff; /* White text color */
            padding: 8px 15px; /* Add padding to the link */
            border-radius: 5px; /* Add rounded corners */
            text-decoration: none; /* Remove underline */
            margin-top: 10px; /* Add space above the link */
        }

        .box a:hover {
            background-color: #0056b3; /* Darker blue color on hover */
        }
    </style>

</head>
<body>

            <header>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
            <li > <a href="index.php"> Home </a></li>
                <li > <a href="#rent">Rent</a> </li>
                    <li > <a href="#services">Services </a></li>
                        <li > <a href="about.php">About </a> </li>
                        <li > <a href="contact.php">Contact Us </a> </li>
                        <li > <a href="products.php">Products </a> </li>
                         <li> <a href="login.php">Login</a></li>
                         <li> <a href="signup.php">Signup</a></li>
                         <li> <a href="Admin/login.php">Admin Panel</a></li>
                      
        </ul>    
            </header>  