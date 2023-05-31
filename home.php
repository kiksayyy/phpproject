<!doctype html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Dayo</title>
    <link rel="shortcut icon" href="logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</head>
<body>
    <!--navbar-->


    <header>
            <a href="#" class="logo">
                <img src="logo.jpg" alt="">
            </a>
        <nav>
            <ul >
                <li><a href="home.php" class="active">HOME</a></li>
                <li><a href="menu.php">MENU</a></li>
                <li><a href="home.php#about">ABOUT</a></li>
                <li><a href="location.php">LOCATION</a></li>
                <li><a href="reservation.php">RESERVATION</a></li>
            </ul>
            <li><a href="index.html" class="act">HOME</a></li>
            <li><a href="signin.html" class="sign">Sign In</a></li>
        </nav>
        </header>
    <section class="home" id="home">
        <div class="home-text">
            <h1>DAYO</h1>
        </div>
        <div class="home-img">
            <img src="images/bg.jpg" alt="">
        </div>
    </section>
    <!--heading-->
    <section class="heading" id="heading">
        <div class="menu-heading">
            <h3>FEATURED MENU</h3>
        </div>
    </section>
    <!--menu-->
    <section class="menu" id="menu">
        <div class="menu-item">
            <h1>Pizza</h1>
            <p>No meat, less guilt, overloaded goodness with 5 different kinds of cheeses, creamy pesto and roasted mushrooms</p>
            <img src="images/img2.webp" alt="">
        </div>
        <div class="menu-item">
            <h1>Must try</h1>
            <p>Our bestseller, mas sulit na! Lasagna with loaded layers of beef, lots of cheese & flavorful tomato sauce.</p>
            <img src="images/image.webp" alt="">
        </div>
        <div class="menu-item">
            <h1>Merienda Meals</h1>
            <p>These nachos are healthy, boasting plenty of folate, fibre and vitamin c</p>
            <img src="images/no-bg-nac.png" alt="">
        </div>
    </section>
    <!--orderbtn-->
    <section class="order" id="order">
        <div class="order-btn">
            <button onclick="orderpage()" id="orderbtn">Order Now</button>
        </div>
    </section>
    <!--about-->
    <section class="about" id="about">
    <div class="aboutmain">
        <img src="images/about.jpg" alt="">
    <div class="about-text">
        <h5>About Us</h5>
        <p>Welcome to Dayo Restaurant, where culinary excellence meets warm hospitality. Nestled in the heart of the Philippines, we are a premier dining destination that celebrates the art of food and the joy of sharing a meal with loved ones.
</p>
    </div>
</section>

<!--footer-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <ul>
                    <img src="images/logo-.png" alt="">
                </ul>
            </div>
            <div class="footer-col">
                <h6>company</h6>
                <ul>
                    <li><a href="aboutus.php">about us</a></li>
                    <li><a href="accessibility.php">Accessibility</a></li>
                    <li><a href="privacy.php">privacy policy</a></li>
                    <li><a href="condition.php">Condition of Use</a></li>
                    <li><a href="reviews.php">Reviews</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h6>get help</h6>
                <ul>
                    <li><a href="FAQ.php">FAQ</a></li>
                    <li><a href="location.php">delivery</a></li>
                    <li><a href="reservation.php">reservations</a></li>
                    <li><a href="franchising.php">Franchising</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="member.php">Group Members</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h6>follow us</h6>
                <div class="social-links">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>

</footer>






<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="main.js"></script>
</body>
</html>