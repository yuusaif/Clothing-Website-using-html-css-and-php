  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Shopping Bag | Grinders</title>
      <link rel="stylesheet" href="cart.css">
      <link rel="stylesheet" type="text/css" href="medicine.css">
      <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&family=Poppins:wght@500&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
      <link rel="stylesheet" href="./navbar/navbar.css">
      <link rel="stylesheet" href="cart/cart.css">
      <link rel="stylesheet" href="./footer/footer.css" class="css">

  </head>

  <body>
      <?php
        include "navbar.php";
        if (!isset($_SESSION['id'])) {
            header("location:login.php");
        }


        ?>

      <?php



        $user_ID = $_SESSION["id"];

        if (isset($_POST['update_cart'])) {
            $update_quantity = $_POST['cart_quantity'];
            $update_id = $_POST['cart_id'];
            mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_quantity' WHERE id = '$update_id'") or die('query failed');
            $message[] = 'cart quantity updated successfully!';
        }

        if (isset($_GET['remove'])) {
            $remove_id = $_GET['remove'];
            mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'") or die('query failed');
            header('location:cart.php');
        }

        if (isset($_GET['delete_all'])) {
            mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_ID'") or die('query failed');
            header('location:cart.php');
        }


        ?>



      <div class="shopping-cart">

          <h1 class="heading">Shopping Bag</h1>

          <table>
              <thead>
                  <th colspan="2">Product</th>
                  <!-- <th></th> -->
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Size</th>
                  <th>Total Price</th>
                  <!-- <th>action</th> -->
              </thead>
              <tbody>
                  <?php
                    $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_ID'") or die('query failed');
                    $grand_total = 0;
                    if (mysqli_num_rows($cart_query) > 0) {
                        while ($fetch_cart = mysqli_fetch_assoc($cart_query)) {
                    ?>
                          <tr class="table-row">
                              <td><img src="<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
                              <td><?php echo $fetch_cart['name']; ?></td>

                              <td><?php echo $fetch_cart['price']; ?>tk</td>
                              <td>
                                  <form action="" method="post">
                                      <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
                                      <input type="number" min="1" name="cart_quantity" class="quantity-input" value="<?php echo $fetch_cart['quantity']; ?>">
                                      <input type="submit" name="update_cart" value="Update" class="option-btn">
                                  </form>
                              </td>
                              <td><?php echo $fetch_cart['size']; ?></td>
                              <td><?php echo $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?>tk</td>
                              <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" class="delete-btn"><i class="fa-regular fa-trash-can fa-lg" style="color: #000000;"></i></a></td>
                          </tr>
                  <?php
                            $grand_total += $sub_total;
                        }
                    } else {
                        echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="6">no item added</td></tr>';
                    }
                    ?>
                  <tr class="table-bottom">
                      <td colspan="5" class="total">Grand Total :</td>
                      <td><?php echo $grand_total; ?>tk</td>
                      <td><a href="cart.php?delete_all" onclick="return confirm('delete all from cart?');" class="delete-btn <?php echo ($grand_total > 1) ? '' : 'disabled'; ?>"><i class="fa-regular fa-trash-can fa-lg" style="color: #000000;"></a></td>
                  </tr>
              </tbody>
          </table>

          <div class="cart-btn">
              <a href="#" class="btn <?php echo ($grand_total > 1) ? '' : 'disabled'; ?>">proceed to checkout</a>
          </div>

      </div>

      </div>

      <?php
        include "footer.php";
        ?>


  </body>

  </html>