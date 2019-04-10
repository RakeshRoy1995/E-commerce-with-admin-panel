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
    <title>E-Commerce </title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Fontawesome core CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--Slide Show Css -->
    <link href="assets/ItemSlider/css/main-style.css" rel="stylesheet" />
    <!-- custom CSS here -->
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><strong>e</strong> Shop</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                <ul class="nav navbar-nav navbar-right">
                    <li><a href="cus_order.php">Your Order</a></li>
                    <li><a href="log.php">Login</a></li>
                    <li><a href="Signup.php">Signup</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">24x7 Support <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><strong>Call: </strong>008801638127876</a></li>
                            <li><a href="#"><strong>Mail: </strong>rakeshroyshuvo@gmail.com</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><strong>Address: </strong>
                                <div>
                                    Dhaka<br />
                                    Gulshan 1
                                </div>
                            </a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" placeholder="Enter Keyword Here ..." class="form-control">
                    </div>
                    &nbsp; 
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="well well-lg offer-box text-center">
                    Today's Offer : &nbsp; <span class="glyphicon glyphicon-cog"></span>&nbsp;40 % off  on purchase of $ 2,000 and above till 24 april !   
                </div>

                <div class="main box-border">
                    <div id="mi-slider" class="mi-slider">
                        <ul>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/1.jpg" alt="img01"><h4>Boots</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/2.jpg" alt="img02"><h4>Oxfords</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/3.jpg" alt="img03"><h4>Loafers</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/4.jpg" alt="img04"><h4>Sneakers</h4>
                            </a></li>
                        </ul>
                        <ul>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/5.jpg" alt="img05"><h4>Belts</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/6.jpg" alt="img06"><h4>Hats &amp; Caps</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/7.jpg" alt="img07"><h4>Sunglasses</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/8.jpg" alt="img08"><h4>Scarves</h4>
                            </a></li>
                        </ul>
                        <ul>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/9.jpg" alt="img09"><h4>Casual</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/10.jpg" alt="img10"><h4>Luxury</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/11.jpg" alt="img11"><h4>Sport</h4>
                            </a></li>
                        </ul>
                        <ul>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/12.jpg" alt="img12"><h4>Carry-Ons</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/13.jpg" alt="img13"><h4>Duffel Bags</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/14.jpg" alt="img14"><h4>Laptop Bags</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/15.jpg" alt="img15"><h4>Briefcases</h4>
                            </a></li>
                        </ul>
                        <nav>
                            <a href="#">Shoes</a>
                            <a href="#">Accessories</a>
                            <a href="#">Watches</a>
                            <a href="#">Bags</a>
                        </nav>
                    </div>

                </div>
                <br />
            </div>

            <div class="col-md-3 text-center">
                <div class=" col-md-12 col-sm-6 col-xs-6" >
                    <div class="offer-text">
                        30% off here
                    </div>
                    <div class="thumbnail product-box">
                        <img src="assets/img/dummyimg.png" alt="" />
                        <div class="caption">
                            <h3><a href="#">Samsung Galaxy </a></h3>
                            <p><a href="#">Ptional dismiss button </a></p>
                        </div>
                    </div>
                </div>
                <div class=" col-md-12 col-sm-6 col-xs-6">
                    <div class="offer-text2">
                        30% off here
                    </div>
                    <div class="thumbnail product-box">
                        <img src="assets/img/dummyimg.png" alt="" />
                        <div class="caption">
                            <h3><a href="#">Samsung Galaxy </a></h3>
                            <p><a href="#">Ptional dismiss button </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div>
                    <a href="#" class="list-group-item active">Electronics
                    </a>
                    <ul class="list-group">

                        <a href="mobile.php"><li class="list-group-item">Mobile
                            <span class="label label-primary pull-right">234</span>
                        </li></a>
                        <a href="computer.php"><li class="list-group-item">Computers
                            <span class="label label-success pull-right">34</span></a>
                        </li>
                        <a href="tablet.php"><li class="list-group-item">Tablets
                            <span class="label label-danger pull-right">4</span></a>
                        </li>
                        <a href="appliance.php"><li class="list-group-item">Appliances
                            <span class="label label-info pull-right">434</span>
                        </li></a>
                        <a href="games_entertainment.php"><li class="list-group-item">Games & Entertainment
                            <span class="label label-success pull-right">34</span>
                        </li></a>
                    </ul>
                </div>
                <!-- /.div -->
                <div>
                    <a href="#" class="list-group-item active list-group-item-success">Clothing & Wears
                    </a>
                    <ul class="list-group">

                        <a href="mens.php"><li class="list-group-item">Men's Clothing
                            <span class="label label-danger pull-right">300</span>
                        </li></a>
                        <a href="womens.php"><li class="list-group-item">Women's Clothing
                            <span class="label label-success pull-right">340</span>
                        </li></a>
                        <a href="kid.php"><li class="list-group-item">Kid's Wear
                            <span class="label label-info pull-right">735</span>
                        </li></a>

                    </ul>
                </div>
                <!-- /.div -->
                <div>
                    <a href="#" class="list-group-item active">Accessaries & Extras
                    </a>
                    <ul class="list-group">
                        <li class="list-group-item">Mobile Accessaries
                            <span class="label label-warning pull-right">456</span>
                        </li>
                        <li class="list-group-item">Men's Accessaries
                            <span class="label label-success pull-right">156</span>
                        </li>
                        <li class="list-group-item">Women's Accessaries
                            <span class="label label-info pull-right">400</span>
                        </li>
                        <li class="list-group-item">Kid's Accessaries
                            <span class="label label-primary pull-right">89</span>
                        </li>
                        <li class="list-group-item">Home Products
                            <span class="label label-danger pull-right">90</span>
                        </li>
                        <li class="list-group-item">Kitchen Products
                            <span class="label label-warning pull-right">567</span>
                        </li>
                    </ul>
                </div>
                <!-- /.div -->

                <div>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-success"><a href="#">New Offer's Coming </a></li>
                        <li class="list-group-item list-group-item-info"><a href="#">New Products Added</a></li>
                        <li class="list-group-item list-group-item-warning"><a href="#">Ending Soon Offers</a></li>
                        <li class="list-group-item list-group-item-danger"><a href="#">Just Ended Offers</a></li>
                    </ul>
                </div>
                <!-- /.div -->
                <div class="well well-lg offer-box offer-colors">


                    <span class="glyphicon glyphicon-star-empty"></span>25 % off  , GRAB IT                 

                    <br />
                    <br />
                    <div class="progress progress-striped">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                        style="width: 70%">
                        <span class="sr-only">70% Complete (success)</span>
                        2hr 35 mins left
                    </div>
                </div>
                <a href="#">click here to know more </a>
            </div>
        </div>
        <div class="col-md-9">
        <div>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Electronics</li>
                </ol>
        </div>      
                <div class="btn-group alg-right-pad">
                    <button type="button" class="btn btn-default"><strong>1235</strong>items</button>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                            Sort Products &nbsp;
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">By Price Low</a></li>
                            <li class="divider"></li>
                            <li><a href="#">By Price High</a></li>
                            <li class="divider"></li>
                            <li><a href="#">By Popularity</a></li>
                            <li class="divider"></li>
                            <li><a href="#">By Reviews</a></li>
                        </ul>
                    </div>
                </div>
        </div>
            <div class="row" style="margin-top:10px;">
                <?php
                  $i=0;
                  $product_id = array();
                  $product_quantity = array();
                  $result = $mysqli->query('SELECT * FROM mobile');
                  if($result === FALSE){
                    die(mysql_error());
                  }
                  if($result){
                    while($obj = $result->fetch_object()) {
                        echo "<div class='col-md-4'>";
                          echo '<div class="large-4 columns">';
                              echo '<p><h3>'.$obj->name.'</h3></p>';
                              echo '<img style="width:100px; height:100px;" src="'.$obj->image.'"/>';
                              echo '<p><strong>Product Code</strong>: '.$obj->code.'</p>';
                              // echo '<p><strong>Description</strong>: '.$obj->product_desc.'</p>';
                              echo '<p><strong>Units Available</strong>: '.$obj->qty.'</p>';
                              echo '<p><strong>Price (Per Unit)</strong>: '.$currency.$obj->price.'</p>';
                              if($obj->qty > 0){
                                echo '<p><a href="update_cart.php?action=add&id='.$obj->id.'"><input type="submit" value="ADD To Cart" style="clear:both; background: #0078A0; border: none; color: #fff; font-size: 1em; padding: 10px;" /></a></p>';
                              }
                              else {
                                echo 'Out Of Stock!';
                              }
                          echo '</div>';
                        echo '</div>';
                      $i++;
                    }
                  }
                  $_SESSION['product_id'] = $product_id;
                  ?>
            </div>

                <footer style="margin-top:10px;">
                   <p style="text-align:center; font-size:0.8em;clear:both;">&copy; JJRZ. All Rights Reserved.</p>
                </footer>

                    <div class="row">
                        <ul class="pagination alg-right-pad">
                            <li><a href="#">&laquo;</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
        
    </div>

            <script src="assets/js/jquery-1.10.2.js"></script>
            <!--bootstrap JavaScript file  -->
            <script src="assets/js/bootstrap.js"></script>
            <!--Slider JavaScript file  -->
            <script src="assets/ItemSlider/js/modernizr.custom.63321.js"></script>
            <script src="assets/ItemSlider/js/jquery.catslider.js"></script>
            <script>
                $(function () {
                    $('#mi-slider').catslider();
                });
            </script>
        </body>
        </html>
