<html>

<head>
    <title>Log In</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./navbar/navbar.css">
    <link rel="stylesheet" href="SignUpForm/style_login_page.css">
</head>


<body>
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
            $login_error_message = "Incorrect email or password!";
        }
    }

    dbClose($conn);
    ?>

    <?php
    include "navbar.php";
    ?>
    <section class="container">
        <div class="sign-up-form">
            <h1> Sign In</h1>
            <form method="post" action="login.php">
                <input type="email" class="input-box" placeholder="Your Email" name="email">
                <div class="password-wrapper">
                    <input type="password" class="input-box" placeholder="Your password" name="password" id="password">
                    <span>
                        <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i>
                    </span>
                </div>
                <label for="" style="color: red; font-size:small;"><?php echo $login_error_message; ?></label>
                <button type="submit" class="signup-btn">Sign In</button>
                <div class="signup">
                    <p>Do not have an account? <a href="signup.php">Sign Up</a></p>
                </div>
            </form>
        </div>
    </section>


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
    <script src="./SignUpForm/eye.js"></script>
</body>

</html>