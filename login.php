<?php
    include "middleware.php";
    if ($authenticated) {
        header("location: main.php");
    }
    $login_error_message = null;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $sql = "select * from user where email = '$email' and password = '$password'";
        $result = getQuery($conn, $sql);
        $dataLen = count($result);
        if ($dataLen == 1) {
            $result = $result[0];
            $_SESSION["authenticated"] = true;
            $_SESSION["id"] = $result["id"];
            header("location: main.php");
        } else {
            $_SESSION["authenticated"] = false;
            $login_error_message = "Please correct email and password";
        }
    }

    dbClose($conn);
    ?>

<html>

<head>
    <title>Log In</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="SignUpForm/style_login_page.css">

</head>


<body>

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
            <div class="signin">
                <a href="login.php">Sign In <i class="fa-solid fa-user fa-lg"
                        style="color: #000000;"></i></a>

            </div>
            <div class="cart-logo">
                <a href="#"><i class="fa-solid fa-cart-shopping fa-xl" style="color: #000000;"></i></a>
            </div>
        </div>
    </nav>
    <div class="sign-up-form">

        <h1> Sign In</h1>
        <form method="post" action="login.php">
            <input type="email" class="input-box" placeholder="Eamil" name="email">
            <input type="password" class="input-box" placeholder="Your password" name="password">
            <label><?php echo $login_error_message; ?></label>
            <button type="submit" class="signup-btn">Sign In</button>
            <div class="signup">
                <p>Do not have an account? <a href="signup.php">Sign Up</a></p>
            </div>
        </form>
    </div>

    <footer>
        <div class="footertxt">
            <p>&copy; 2023 Grinders</p>
            <ul>
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
    </footer>
     <script src="SignUpForm/script.js"></script>
</body>

</html>