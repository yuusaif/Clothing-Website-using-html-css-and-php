<?php
include "navbar.php";
if (!isset($_SESSION['id'])) {
    header("location:login.php");
}
$nm = $_SESSION['id'];
$db_info = "SELECT * FROM user WHERE id='$nm'";
$db_result = mysqli_query($conn, $db_info) or die('query failed');
$rt = mysqli_fetch_assoc($db_result);

$password = $rt['password'];
$old_password = "";
$new_password = "";
$confirm_password = "";
$error_message = null;
if (isset($_POST['updatebtn'])) {
    $old_password = $_POST["old_password"];
    $new_password = $_POST["new_password"];
    $confirm_password = $_POST["confirm_password"];
    if ($password != $old_password) {
        $error_message = "Wrong password!";
    } else if ($new_password != $confirm_password) {
        $error_message = "Passwords do not match!";
    } else {
        $sql2 = "UPDATE user SET password ='$new_password' WHERE id='$nm' ";
        mysqli_query($conn, $sql2);
        $error_message = "Password updated successfully";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Grinders | Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./profile/profile.css" class="css">
    <link rel="stylesheet" href="./navbar/navbar.css">
    <link rel="stylesheet" href="./footer/footer.css" class="css">
</head>

<body>

    <div class="profile-container">
        <div class="profile-content">
            <div class="profile-header">
                <h1><i class="fa-solid fa-user fa-lg" style="color: #000000;"></i> User profile</h1>
            </div>

            <div class="profile-info">
                <h1 id="username">Username: <?php echo $rt['username']; ?></h1>
                <p id="email">Email: <?php echo $rt['email']; ?></p>
            </div>

            <div class="password-update">
                <p>Update Password:</p>
                <form method="post" action="profile.php">
                    <div class="password-wrapper">
                        <input type="password" class="input-box" placeholder="Old Password" name="old_password" id="password">
                    </div>
                    <div class="password-wrapper">
                        <input type="password" class="input-box" placeholder="New Password" name="new_password" id="password">
                    </div>
                    <div class="password-wrapper">
                        <input type="password" class="input-box" placeholder="Confirm password" name="confirm_password" id="password">
                    </div>
                    <label for="" style="color: red; font-size:small;"><?php echo $error_message; ?></label>
                    <div class="password-submit">
                        <input type="submit" id="button" name="updatebtn" value="Update Password">
                    </div>

                </form>
            </div>

            <div class="profile-bottom">
                <a href="cart.php" id="button">Shopping Bag</a>
                <a href="logout.php" id="button">Log out</a>
            </div>

        </div>
    </div>


    <?php
    include "footer.php";
    ?>

    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
    <script>
        // Add any JavaScript functionality you need here
    </script>
</body>

</html>