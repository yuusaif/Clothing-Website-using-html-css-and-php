

<!DOCTYPE html>
<html>

<head>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&family=Poppins:wght@500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />
    <title>Grinder$ | Streetwear</title>
    <link rel="stylesheet" href="Home page\mainstyle.css">
</head>

<body>
    <?php
    include "middleware.php";
    ?>
    <nav>
        <img src="Home Page\img\main logo.jpg" alt="Grinder$">
        <ul>
            <li class="dropdown">
                <a href="#" onclick="toggleDropdown(event)">Women</a>
                <ul class="dropdown-content">
                    <li><a href="#">T-shirts</a></li>
                    <li><a href="#">Pants</a></li>
                    <li><a href="#">Hoodies</a></li>
                    <li><a href="#">Shirts</a></li>
                    <li><a href="#">Tops</a></li>
                    <li><a href="#">Skirts</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" onclick="toggleDropdown(event)">Men</a>
                <ul class="dropdown-content">
                    <li><a href="#">T-shirts</a></li>
                    <li><a href="#">Pants</a></li>
                    <li><a href="#">Hoodies</a></li>
                    <li><a href="#">Shirts</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" onclick="toggleDropdown(event)">Footwear</a>
                <ul class="dropdown-content">
                    <li><a href="#">Men</a></li>
                    <li><a href="#">Women</a></li>
                </ul>
            </li>
            <li><a href="#">About</a></li>
        </ul>
        <div class="leftnav">
            <div class="search-container">
                <input type="text" placeholder="Search...">
                <button type="submit"><span class="material-symbols-outlined">
                        search
                    </span></button>
            </div>
            <?php if($authenticated) {?>
                <div class="signin">
                <a href="login.php"> <?php echo $user["username"]; ?> <i class="fa-solid fa-user fa-lg"
                        style="color: #000000;"></i></a>

            </div>
            <?php } else { ?>
                <div class="signin">
                <a href="login.php">Sign In <i class="fa-solid fa-user fa-lg"
                        style="color: #000000;"></i></a>

            </div>
            <?php } ?>
            <div class="cart-logo">
                <a href="#"><i class="fa-solid fa-cart-shopping fa-xl" style="color: #000000;"></i></a>
            </div>
        </div>
    </nav>
    <section class="hero">
        <div class="herotxt">
            <h2>Welcome To Grinders</h2>
            <p>—Where fashion meets the urban landscape, and individuality reigns supreme.<br> Let's
                embark on this style journey together.</p>
            <a href="#" class="button">Shop Now</a>
        </div>
    </section>

    <section class="new">
        <div class="newtxt">
            <h2>New Arrivals</h2>
            <a href="#" class="button">Shop Now</a><br>
            <div class="para">Explore our latest collection, discover your own style narrative, and unleash your inner
                urban
                warrior. Get ready to
                turn heads, set trends, and leave an unforgettable mark on the streets.
            </div>
        </div>
        <img src="Home Page\img\new.jpg">
    </section>

    <section class="season">
        <img src="Home Page\img\season.jpg">
        <div class="seasontxt">
            <h2>Summer Essentials</h2>
            <a href="#" class="button">Shop Now</a>
            <div class="para">At Grinders, we are all about embracing the vibrant energy and laid-back vibes of the
                summer season. Get
                ready to elevate your style game with our collection of summer streetwear that effortlessly blends
                fashion, comfort, and
                a touch of urban flair.
            </div>
        </div>
    </section>

    <section class="footwear">
        <div class="footweartxt">
            <h2>Footwear</h2>
            <a href="#" class="button">Shop Now</a>
            <div class="para">Our footwear collection is designed to elevate your style while providing the utmost
                comfort and support. From sleek
                sneakers to rugged boots and everything in between, we offer a diverse range of designs to cater to your
                unique
                preferences and needs.
            </div>
        </div>
        <img src="Home Page\img\shoes2.jpg">
        <img src="Home Page\img\shoes1.jpg">
    </section>

    <footer>
        <div class="container">
            <div class="footer-top">
                <div class="footer-logo">
                    <img src="Home Page\img\main logo.jpg" alt="Logo">
                </div>
                <div class="footer-links">
                    <h4>Categories</h4>
                    <ul>
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Footwear</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Information</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Shipping Policy</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">FAQs</a></li>
                    </ul>
                </div>
                <div class="footer-social">
                    <h4>Follow Us</h4>
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 Grinders</p>
                <ul>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </footer>


    <script src="Home Page/script.js"></script>
</body>

</html>