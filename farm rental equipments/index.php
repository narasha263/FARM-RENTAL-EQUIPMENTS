<!DOCTYPE html>
<html lang="en">
<head>
    <meta cahrset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <title> Farm Equipments Rental Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
<style>
    .rent {
            background-color:#0056b3; /* Light gray background color */
            padding: 80px 0; /* Adjust padding as needed */
            text-align: center;
            color: white; /* Center align the content */
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
            background-color: #fff; /* White background color for boxes */
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
            background-color: #0056b3; /* Light gray background color */
            padding: 80px 0; /* Adjust padding as needed */
            text-align: center;
            color:white; /* Center align the content */
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
        </div>
        <section id="banner">
  <div class="container text-center py-5">
    <h1>Welcome to Farm Equipment Rental Service</h1>
    <p class="lead">Discover the joy of hassle-free farm equipments rentals!</p>
    <a href="products.php" class="btn btn-primary btn-lg">Explore Rental Options</a>
  </div>
  <section class="home" id="home">

</section>
        </section>
        <section class="rent" id="rent">
        <div class="heading">
            <span>How it works</span>
            <h1>Rent With 3 Easy Steps</h1>
        </div>
        <div class="rent-container">
            <div class="box">
                <h2>Choose A Location</h2>
                <p>Choose your preferred location where you need the equipment to be delivered. We provide rental services across multiple locations for your convenience.</p>
            </div>
            <div class="box">
                <h2>Pick-Up Date & Time</h2>
                <p>Specify the date and time you would like to pick up the equipment. Our flexible scheduling system allows you to select a time slot that fits your schedule.</p>
            </div>
            <div class="box">
                <h2>Book An Equipment</h2>
                <p>Book your desired equipment by selecting it from our catalog and filling out a simple booking form. Once your booking is confirmed, your equipment will be ready for pickup at the specified location and time.</p>
            </div>
        </div>
    </section>

</section>
<section class="services" id="services">
    <div class="heading">
        <span>Best Services</span>
        <h1>Explore our Equipments <br> From Top Rated Farm Equipments</h1>

    </div>
    <div class="service-container">
        <div class="box">
            <div class="box-img">
                <img src="product_11.png" alt=" " >

            </div>
            <h1>Cultivator</h1>
            <h3> Brand New Cultivator</h3>
            <h2>Ksh 90,000 <span/month></span></h2>
            <a href="products.php" class="#"> Rent Now!</a>

        </div>
        <div class="box">
            <div class="box-img">
                <img src="product_12.png" alt=" " >

            </div>
            <h1>Tractor</h1>
            <h3> Used Tractor</h3>
            <h2>10,000 <span/month></span></h2>
            <a href="products.php" class="#"> Rent Now!</a>

        </div>
        <div class="box">
            <div class="box-img">
                <img src="product_16.png" alt=" " >

            </div>
            <h1>Wheelbarow</h1>
            <h3> Brand New Wheelbarow</h3>
            <h2>Ksh 6000 <span/month></span></h2>
            <a href="products.php" class="#"> Rent Now!</a>

        </div>
        <div class="box">
            <div class="box-img">
                <img src="product_14.png" alt=" " >

            </div>
            <h1>Axe</h1>
            <h3> Brand New Axe</h3>
            <h2>Ksh 4,000  <span/month></span></h2>
            <a href="products.php" class="#"> Rent Now!</a>

        </div>
        <div class="box">
            <div class="box-img">
                <img src="product_13.png" alt=" " >

            </div>
            <h1>Pickaxe</h1>
            <h3> Brand New Pickaxe</h3>
            <h2>Ksh 3,000<span/month></span></h2>
            <a href="products.php" class="#"> Rent Now!</a>

        </div>
        <div class="box">
            <div class="box-img">
                <img src="product_18.png" alt=" " >

            </div>
            <h1>Spade</h1>
            <h3> Brand New Spade</h3>
            <h2>Ksh 900 <span/month></span></h2>
            <a href="products.php" class="#"> Rent Now!</a>
        </div>

            <div class="box">
                <div class="box-img">
                    <img src="product_19.png" alt=" " >
    
                </div>
                <h1>Rage</h1>
                <h3> Brand New rage</h3>
                <h2>Ksh 400 <span/month></span></h2>
                <a href="products.php" class="#"> Rent Now!</a>
    
            </div>
                <div class="box">
                    <div class="box-img">
                        <img src="product_20.png" alt=" " >
        
                    </div>
                    <h1>sickle</h1>
                    <h3> Brand New sickle</h3>
                    <h2>Ksh 300 <span/month></span></h2>
                    <a href="products.php" class="#"> Rent Now!</a>
        
                </div>
                    <div class="box">
                        <div class="box-img">
                            <img src="product_21.png" alt=" " >
            
                        </div>
                        <h1>Grab hoe</h1>
                        <h3> Brand New Grab hoe</h3>
                        <h2>Ksh 500 <span/month></span></h2>
                        <a href="products.php" class="#"> Rent Now!</a>
            
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

    



    <script src="main.js"></script>
</body>
</html>
<?php include 'footer.php'; ?>
