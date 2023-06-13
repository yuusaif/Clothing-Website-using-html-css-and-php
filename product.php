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
    include "middleware.php";
    // $category = $_GET["category"];
    $name = "";
    if (isset($_GET["name"])) {
        $name = $_GET["name"];
    }
    $all = getQuery($conn, "select * from product where name like '%$name%'");

    ?>


    <?php
    include "navbar.php"
    ?>


    <div class="banner">

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
                        <p class="price"><?php echo $item["price"]; ?></p>
                        <form action="product.php" method="post">
                            <label>Quantity: </label>
                            <input type="number" name="quantity" id="quantity" min="1">
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