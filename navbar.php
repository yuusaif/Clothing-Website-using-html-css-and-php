<nav>
    <a href="main.php" id="logo"><img src="img\main logo.jpg" alt="Grinder$" /></a>

    <ul>

        <li class="dropdown">
            <a href="#" class="a" onclick="toggleDropdown(event)">Women</a>
            <ul class="dropdown-content">
                <li><a href="#" class="a">T-shirts</a></li>
                <li><a href="#" class="a">Pants</a></li>
                <li><a href="#" class="a">Hoodies</a></li>
                <li><a href="#" class="a">Shirts</a></li>
                <li><a href="#" class="a">Tops</a></li>
                <li><a href="#" class="a">Skirts</a></li>
            </ul>
        </li>

        <li class="dropdown">
            <a href="#" class="a" onclick="toggleDropdown(event)">Men</a>
            <ul class="dropdown-content">
                <li><a href="#" class="a">T-shirts</a></li>
                <li><a href="#" class="a">Pants</a></li>
                <li><a href="#" class="a">Hoodies</a></li>
                <li><a href="#" class="a">Shirts</a></li>
            </ul>
        </li>

        <li class="dropdown">
            <a href="#" class="a" onclick="toggleDropdown(event)">Footwear</a>
            <ul class="dropdown-content">
                <li><a href="#" class="a">Men</a></li>
                <li><a href="#" class="a">Women</a></li>
            </ul>
        </li>

        <li class="dropdown"><a class="a" href="aboutus.php">About Us</a></li>

    </ul>

    <div class="leftnav">

        <div class="search-container">

            <input type="text" placeholder="Search...">
            <button type="submit"><i class="fa-solid fa-magnifying-glass fa-xl" style="color: #000000;"></i></button>

        </div>

        <?php if ($authenticated) { ?>
            <ul>
                <li class="dropdown">

                    <a href="#" class="a" onclick="toggleDropdown(event)"><?php echo $user["username"]; ?> <i class="fa-solid fa-user fa-lg" style="color: #000000;"></i></a>
                    <ul class="dropdown-content">

                        <li><a href="#" class="a">Profile</a></li>
                        <li><a href="logout.php" class="a">Logout</a></li>

                    </ul>

                </li>
            </ul>
        <?php } else { ?>
            <div class="signin">

                <a href="login.php" class="a">Sign In <i class="fa-solid fa-user fa-lg" style="color: #000000;"></i></a>

            </div>
        <?php } ?>

        <div class="cart-logo">
            <a href="#" class="a"><i class="fa-solid fa-cart-shopping fa-xl" style="color: #000000;"></i></a>
        </div>

    </div>

</nav>

<script src="./navbar/script.js"></script>