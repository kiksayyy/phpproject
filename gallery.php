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
    <nav>
        <a href="#" class="logo">
            <img src="logo.jpg" alt="">
        </a>
        <!--links-->
        <input type="checkbox" id="check">
        <label for="check" id="checkbtn"><i class="fa-solid fa-bars"></i></label>
        
        <ul id="nav">
            <li><a href="home.php">HOME</a></li>
            <li><a href="menu.php">MENU</a></li>
            <li><a href="#about">ABOUT</a></li>
            <li><a href="location.php">LOCATION</a></li>
            <li><a href="reservation.php">RESERVATION</a></li>
        </ul>   

    </nav>
</header>


<div class="gal">   
    <div class="gallery-" id="gallery">
        <h5>Gallery</h5>
    </div>
</div>
    <div class="gal-">
    <div class="gallery" id="gallery">
            <img src="images/gal1.jpg" alt="">
    </div>
    <div class="gallery" id="gallery">
        <img src="images/gal2.jpg" alt="">
</div>
 <div class="gallery" id="gallery">
            <img src="images/gal3.jpg" alt="">
    </div>
     <div class="gallery" id="gallery">
            <img src="images/gal4.jpg" alt="">
    </div>
     <div class="gallery" id="gallery">
            <img src="images/about.jpg" alt="">
    </div>
    <div class="gallery" id="gallery">
        <img src="images/bg.jpg" alt="">
</div>

</div>


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