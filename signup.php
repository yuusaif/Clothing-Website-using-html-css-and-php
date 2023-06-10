<?php
    session_start();
    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query); 

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<html>

<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="SignUpForm/style_login_page.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&family=Poppins:wght@500&display=swap" rel="stylesheet">
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

        <h1> Sign Up</h1>
        <form method="post">
            <input type="text" class="input-box" placeholder="New Username" name="user_name">
            <input type="password" class="input-box" placeholder="New password" name="password">
            <p><span><input type="checkbox"></span>I agree to the terms of services</p>
            <button type="submit" class="signup-btn">Sign In</button>
            <div class="signup">
                <p>Already have an account? <a href="login.php">Sign In</a></p>
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
</body>

</html>