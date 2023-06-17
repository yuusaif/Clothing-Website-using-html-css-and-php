<!DOCTYPE html>
<html>

<head>
    <title>Grinders-Shop</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="./Product page/product.css">
    <link rel="stylesheet" href="./navbar/navbar.css">
    <link rel="stylesheet" href="./footer/footer.css" class="css">
</head>

<body>

    <?php
    include "navbar.php";
    if (isset($_SESSION['id'])) {
        $user_ID = $_SESSION["id"];
    }
    $type = "";
    if (isset($_GET["type"])) {
        $type = $_GET["type"];
    }
    $name = "";
    if (isset($_GET["name"])) {
        $name = $_GET["name"];
    }
    $all = getQuery($conn, "select * from product where name like '%$name%' and type like  '%$type%'");

    if (isset($_POST["addtocart"])) {

        if (!isset($_SESSION['id'])) {
            header("location:login.php");
        }


        $product_name = $_POST["product_name"];
        $product_price = $_POST["product_price"];
        $product_image = $_POST["product_image"];
        $product_quantity = $_POST["quantity"];
        $product_size = $_POST["size"];

        $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name='$product_name'
            AND user_id = '$user_ID'") or die('query failed');

        if (mysqli_num_rows($select_cart) > 0) {
            $message[] = "product already added to cart!";
        } else {
            mysqli_query($conn, "INSERT INTO `cart`(user_id,name,price,image,quantity,size)VALUES
        ('$user_ID','$product_name','$product_price','$product_image','$product_quantity','$product_size')") or die('query failed');
            $message[] = "product added to cart!";
        }
    }



    ?>


    <div class="banner">
        <h4 class="banner-text">Search products: </h4>
        <div class="search-container">
            <form action="product.php" name="search" method="get">
                <input type="text" name="name" placeholder="...">
                <button type="submit"><i class="fa-solid fa-magnifying-glass fa-xl" style="color: #000000;"></i></button>
            </form>
        </div>

    </div>


    <div class="category">

        <?php

        foreach ($all as $item) {
        ?>
            <div class="card">
                <div class="card-image">
                    <img src="<?php echo $item["picture"]; ?>" alt="Medicine 1">
                </div>

                <div class="card-content">
                    <h2><?php echo $item["name"]; ?></h>
                        <p class="price"><?php echo $item["price"]; ?> BDT
                        <p>
                        <form action="product.php" method="post">
                            <label>Quantity: </label>
                            <input type="number" name="quantity" id="quantity" min="1" value="1">
                            <label for="lang">Size: </label>
                            <select name="size" id="size">
                                <option value="XS">XS</option>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                            <br>


                            <input type="hidden" name="product_name" value="<?php echo  $item["name"]; ?>">
                            <input type="hidden" name="product_price" value="<?php echo  $item["price"]; ?>">
                            <input type="hidden" name="product_image" value="<?php echo  $item["picture"]; ?>">





                            <button type="submit" name="addtocart" id="addtocart">Add to Cart</button>
                        </form>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <?php
    include "footer.php"
    ?>

</body>

</html>