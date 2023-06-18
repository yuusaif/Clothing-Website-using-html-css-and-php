 <?php
    include "middleware.php";
    ?>
 <nav>
     <a href="main.php" id="logo"><img src="img\main logo.jpg" alt="Grinder$" /></a>

     <ul>

         <li class="dropdown">
             <a href="product.php?type=1" class="a">Women</a>
         </li>

         <li class="dropdown">
             <a href="product.php?type=0" class="a">Men</a>
         </li>

         <li class="dropdown">
             <a href="product.php?type=2" class="a">Footwear</a>
         </li>

         <li class="dropdown">
             <a class="a" href="#" onclick="toggleDropdown(event)">Info</a>
             <ul class="dropdown-content">

                 <li><a href="aboutus.php" class="a">About Us</a></li>
                 <li><a href="contactus.php" class="a">Contact Us</a></li>

             </ul>
         </li>

     </ul>

     <div class="leftnav">
         <?php if ($authenticated) { ?>
             <ul>
                 <li class="dropdown">

                     <a href="#" class="a" onclick="toggleDropdown(event)"><?php echo $user["username"]; ?> <i class="fa-solid fa-user fa-xl" style="color: #000000;"></i></a>
                     <ul class="dropdown-content">

                         <li><a href="profile.php" class="a">Profile</a></li>
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
             <a href="cart.php" class="a" style="padding:15px;"><i class="fa-solid fa-bag-shopping fa-xl" style="color: #000000;"></i></a>
         </div>

     </div>

 </nav>

 <script src="./navbar/script.js"></script>