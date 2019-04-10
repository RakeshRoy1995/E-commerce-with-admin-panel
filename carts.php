<?php
session_start();
include 'dbcon.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Bootstrap E-Commerce Template- DIGI Shop mini</title>
	<!--Slide Show Css -->
	<link href="assets/ItemSlider/css/foundation.css" rel="stylesheet" />
	<!-- custom CSS here -->
	<script src="assets/ItemSlider/js/vendor/modernizr.js"></script>
</head>
<body>
    <div class="row" style="margin-top:10px;">
      <div class="col-md-3">
        <?php

          echo '<p><h3>Your Shopping Cart</h3></p>';

          if(isset($_SESSION['cart'])) {

            $total = 0;
            echo '<table border="1" class="float-right">';
            echo '<tr>';
            echo '<th>Code</th>';
            echo '<th>Name</th>';
            echo '<th>Quantity</th>';
            echo '<th>Cost</th>';
            echo '</tr>';
            foreach($_SESSION['cart'] as $product_id => $quantity) {

            $result = $mysqli->query("SELECT * FROM page WHERE id = ".$product_id);


            if($result){

              while($obj = $result->fetch_object()) {
                $cost = $obj->price * $quantity; //work out the line cost
                $total = $total + $cost; //add to the total cost

                echo '<tr>';
                echo '<td>'.$obj->code.'</td>';
                echo '<td>'.$obj->name.'</td>';
                echo '<td>'.$quantity.'&nbsp;<a class="button [secondary success alert]" style="padding:5px;" href="update_cart.php?action=add&id='.$product_id.'">+</a>&nbsp;<a class="button alert" style="padding:5px;" href="update_cart.php?action=remove&id='.$product_id.'">-</a></td>';
                echo '<td>'.$cost.'</td>';
                echo '</tr>';
              }
            }

          }



          echo '<tr>';
          echo '<td colspan="3" align="right">Total</td>';
          echo '<td>'.$total.'</td>';
          echo '</tr>';

          echo '<tr>';
          echo '<td colspan="4" align="right"><a href="update_cart.php?action=empty" class="button alert">Empty Cart</a>&nbsp;';
          if (!empty($_SESSION['variable'])) {
            $_SESSION['total'] = $total;
            echo '<a href="booking.php"><button style="float:right;">Continue</button></a>';
          }

          else {
            echo '<a href="log.php"><button style="float:right;">Login</button></a>';
          }

          echo '</td>';

          echo '</tr>';
          echo '</table>';
        }

        else {
          echo "You have no items in your shopping cart.";
        }





          echo '</div>';
          echo '</div>';
          ?>



   

        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;clear:both;">&copy; JJRZ  All Rights Reserved.</p>
        </footer>

     





    <script src="assets/ItemSlider/js/vendor/jquery.js"></script>
    <script src="assets/ItemSlider/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
