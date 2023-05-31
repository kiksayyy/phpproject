<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

        <body>
        
          <div class="containers" id="containers">
            <div class="form-container sign-up-container">
                <form action="#">
                    <h1>Delivery</h1>
                    
                    <div class="infield">
                        <input type="text" placeholder="Name" />
                        <label></label>
                    </div>
                    <div class="infield">
                        <input type="number" placeholder="Phone Number" name="number"/>
                        <label></label>
                    </div>
                    <div class="infield">
                        <input type="text" placeholder="Address" />
                        <label></label>
                    </div>
                    <button>Submit</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="#">
                    <h1>Pick Up</h1>
                    
                    <div class="infield">
                        <input type="text" placeholder="Name" name="name"/>
                        <label></label>
                    </div>
                    <div class="infield">
                        <input type="time" placeholder="time" />
                        <label></label>
                    </div>
                   
                    <button>Submit</button>
                </form>
            </div>
            <div class="overlay-container" id="overlayCon">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Pick Up</h1>
                        <p>Need a quick and easy way to enjoy our delicious food? </p>
                        <button>Pick Up</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Delivery</h1>
                        <p>No time to go out? We'll bring the food to you </p>
                        <button>Delivery</button>
                    </div>
                </div>
                <button id="overlayBtn"></button>
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


    
    
        <!-- link script -->
        <script>

const containers = document.getElementById('containers')
const overlayCon = document.getElementById('overlayCon')
const overlayBtn = document.getElementById('overlayBtn')

overlayBtn.addEventListener('click', () => {
    containers.classList.toggle('right-panel-active');

    overlayBtn.classList.remove('btnScaled');
    window.requestAnimationFrame( ()=> {
        overlayBtn.classList.add('btnScaled');
    })
});

        </script>
</body>
</html>