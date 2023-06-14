<html>

<head>
    <title>Sign Up</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./navbar/navbar.css">
    <link rel="stylesheet" href="SignUpForm/style_login_page.css">
</head>

<body>
    <?php
    include "middleware.php";
    include "validation.php";
    if ($authenticated) {
        header("location:main.php");
    }
    $username = "";
    $email = "";
    $password = "";
    $confirm_password = "";
    $error_message = null;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];
        if ($password != $confirm_password) {
            $error_message = "Password do not match";
        } else if (isEmailExist($conn, $email)) {
            $error_message = "Email already exists";
        } else {
            $sql = "INSERT INTO user (username, email, password) values ('$username', '$email', '$password')";
            $result = insertQuery($conn, $sql);
            if ($result) {
                $_SESSION["authenticated"] = true;
                $_SESSION["id"] = $result;
                header("location:main.php");
            } else {
                $_SESSION["authenticated"] = false;
            }
        }
    }

    dbClose($conn);
    ?>

    <?php
    include "navbar.php"
    ?>
    <section class="container">
        <div class="sign-up-form">
            <h1> Sign Up</h1>
            <form method="post" action="signup.php">
                <input type="text" class="input-box" placeholder="Your Username" name="username">
                <input type="email" class="input-box" placeholder="Your Email" name="email">
                <div class="password-wrapper">
                    <input type="password" class="input-box" placeholder="New password" name="password" id="password">
                </div>
                <div class="password-wrapper">
                    <input type="password" class="input-box" placeholder="Confirm password" name="confirm_password" id="password">
                </div>
                <label for="" style="color: red; font-size:small;"><?php echo $error_message; ?></label>
                <button type="submit" class="signup-btn">Sign Up</button>
                <div class="signup">
                    <p>Already have an account? <a href="login.php">Sign In</a></p>
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
</body>

</html>