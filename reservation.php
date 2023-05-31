<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reservations</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
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
    <section class="reservations" id="reservations">
        <h2>reservation form</h2>

        <div class="reserve-input">
            <div class="image">
            <img src="logo.jpg" alt="">
        </div>
        <div class="form">
            <label for="fullname">Full Name</label>
            <input type="name" id="name">
        </div>
        <div class="form">
            <label for="e-mail">Email</label>
            <input type="email" id="e-mail">
        </div>
        <div class="form">
            <label for="phonenum">Phone Number</label>
            <input type="text id="text">
        </div>
        <div class="form">
            <label for="guest">Number Of Guest</label>
            <input type="guests" id="guests">
        </div>
        <div class="form">
            <label for="date">Date</label>
            <input type="date" id="date">
        </div>
        <div class="form">
            <label for="time">Time</label>
            <input type="time" id="time">
        </div>
        <div class="form">
            <button>
                Submit
            </button>
        </div>


    </section>


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



</body>
</html>