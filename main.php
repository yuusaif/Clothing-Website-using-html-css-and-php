<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Grinder$ | Streetwear</title>
    <link rel="stylesheet" href="Home page/mainstyle.css">
    <link rel="stylesheet" href="./navbar/navbar.css">
    <link rel="stylesheet" href="./footer/footer.css" class="css">
</head>

<body>
    <?php
    include "navbar.php";
    ?>
    <section class="hero">
        <div class="herotxt">
            <h2>Welcome To Grinders</h2>
            <p>—Where fashion meets the urban landscape, and individuality reigns supreme.<br> Let's
                embark on this style journey together.</p>
            <a href="./product.php" id="button">Shop Now</a>
        </div>
    </section>

    <section class="new">
        <div class="newtxt">
            <h2>New Arrivals</h2>
            <a href="#" id="button">Shop Now</a><br>
            <div class="para">Explore our latest collection, discover your own style narrative, and unleash your inner
                urban
                warrior. Get ready to
                turn heads, set trends, and leave an unforgettable mark on the streets.
            </div>
        </div>
        <img src="img\new.jpg">
    </section>

    <section class="season">
        <img src="img\season.jpg">
        <div class="seasontxt">
            <h2>Summer Essentials</h2>
            <a href="#" id="button">Shop Now</a>
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
            <a href="#" id="button">Shop Now</a>
            <div class="para">Our footwear collection is designed to elevate your style while providing the utmost
                comfort and support. From sleek
                sneakers to rugged boots and everything in between, we offer a diverse range of designs to cater to your
                unique
                preferences and needs.
            </div>
        </div>
        <img src="img\shoes2.jpg">
        <img src="img\shoes1.jpg">
    </section>

    <?php
    include "footer.php";
    ?>


    <script src="./navbar/script.js"></script>
</body>

</html>