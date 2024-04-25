<!DOCTYPE html>
<html lang="en">
<head>
    <meta cahrset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <title> Farm Equipments Rental Website</title>

<style>
    .navbar {
    display:flex;
}


.navbar li{
    position: relative;
    list-style: none;
}
.navbar a{
    font-size: 1rem;
    padding: 10px 20px;
    color: var(--text-color);
    font-weight: 500;
}
.navbar a::after{
    content: "";
    width: 0%;
    height: 3px;
    background: var(--gradient);
    position: absolute;
    bottom: -4px;
    left: 0;
}

    </style>

</head>
<body>

        <section class="home"" id="home">
            <header>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
            <li > <a href="index.php"> Home </a></li>
                <li > <a href="#rent">Rent</a> </li>
                    <li > <a href="#services">Services </a></li>
                        <li > <a href="about.php">About </a> </li>
                            <li> <a href="login.php">Login</a></li>
                            <li> <a href="signup.php">Signup</a></li>
                      
        </ul>


        
        
            </header>
        

            
<section class="about" id="about ">
    <div class="heading">
        <span>About</span>
        <h1>Best Customer Experience </h1>
    </div>
    <div class="about-container" >
        <div class="about-img">
            <img src="product_3.png">
        </div>
        <div class="about-text">
            <span>About Us </span>
            
            <p>At  Yocade's renting Farm Equipments, we specialize in providing top-quality farm equipment and tools for rent. Our mission is to support farmers and agricultural businesses by offering a wide range of reliable and efficient machinery, ensuring they have access to the tools they need to thrive. With our extensive inventory and commitment to customer satisfaction, we are dedicated to simplifying the process of acquiring farm equipment. </p>
        </div>
    </div>
</section>
