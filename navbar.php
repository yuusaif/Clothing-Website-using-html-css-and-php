 <?php
    include "middleware.php";
    ?>
 <nav>
     <a href="main.php" id="logo"><img src="img\main logo.jpg" alt="Grinder$" /></a>

     <ul>

         <li class="dropdown">
             <a href="product.php?type=Women" class="a">Women</a>
         </li>

         <li class="dropdown">
             <a href="product.php?type=Men" class="a">Men</a>
         </li>

         <li class="dropdown">
             <a href="product.php?type=Footwear" class="a">Footwear</a>
         </li>

         <li class="dropdown"><a class="a" href="aboutus.php">About Us</a></li>

     </ul>

     <div class="leftnav">
         <?php if ($authenticated) { ?>
             <ul>
                 <li class="dropdown">

                     <a href="#" class="a" onclick="toggleDropdown(event)"><?php echo $user["username"]; ?> <i class="fa-solid fa-user fa-xl" style="color: #000000;"></i></a>
                     <ul class="dropdown-content">

                         <li><a href="#" class="a">Profile</a></li>
                         <li><a href="logout.php" class="a">Logout</a></li>

                     </ul>

                 </li>
             </ul>
         <?php } else { ?>
             <div class="signin">

                 <a href="login.php" class="a">Sign In <i class="fa-solid fa-user fa-xl" style="color: #000000;"></i></a>

             </div>
         <?php } ?>

         <div class="cart-logo">
             <a href="cart.php" class="a"><i class="fa-solid fa-bag-shopping fa-xl" style="color: #000000;"></i></a>
         </div>

     </div>

 </nav>

 <script src="./navbar/script.js"></script>