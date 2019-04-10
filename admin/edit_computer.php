<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Admin Panel</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <link rel="stylesheet" href="css/style.css" /> <!-- mine content -->
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css2/style.css" />
  <link href="css/style-responsive.css" rel="stylesheet">
</head>

<body>
  <section id="container">
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <a href="index.php" class="logo"><b>Dashbo<span>rd</span></b></a>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html">Logout</a></li>
        </ul>
      </div>
    </header>
    <aside>
        <div id="sidebar" class="nav-collapse ">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered"><a href="profile.html"><img src="img/_MG_5744.JPG" class="img-circle" width="80"></a></p>
            <h5 class="centered">Rakesh Roy</h5>
            <li class="mt">
              <a href="index.php">
                <i class="fa fa-dashboard"></i>
                <span>Dashboard</span>
                </a>
            </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-desktop"></i>
                <span>Electronics</span>
                </a>
              <ul class="sub">
                <li><a href="page.php">Main Page</a></li>
                <li><a href="mobile.php">Mobile</a></li>
                <li><a href="computer.php">Computer</a></li>
                <li><a href="Tablets.php">Tablets</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-cogs"></i>
                <span>Clothing</span>
                </a>
              <ul class="sub">
                <li><a href="men.php">Men's</a></li>
                <li><a href="women.php">Women's</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-book"></i>
                <span>Extra Pages</span>
                </a>
              <ul class="sub">
                <li><a href="blank.html">Blank Page</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="lock_screen.html">Lock Screen</a></li>
                <li><a href="profile.html">Profile</a></li>
                <li><a href="invoice.html">Invoice</a></li>
                <li><a href="pricing_table.html">Pricing Table</a></li>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="404.html">404 Error</a></li>
                <li><a href="500.html">500 Error</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-tasks"></i>
                <span>Forms</span>
                </a>
              <ul class="sub">
                <li><a href="form_component.html">Form Components</a></li>
                <li><a href="advanced_form_components.html">Advanced Components</a></li>
                <li><a href="form_validation.html">Form Validation</a></li>
                <li><a href="contactform.html">Contact Form</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-th"></i>
                <span>Data Tables</span>
                </a>
              <ul class="sub">
                <li><a href="basic_table.html">Basic Table</a></li>
                <li><a href="responsive_table.html">Responsive Table</a></li>
                <li><a href="advanced_table.html">Advanced Table</a></li>
              </ul>
            </li>
            <li>
              <a class="active" href="inbox.html">
                <i class="fa fa-envelope"></i>
                <span>Mail </span>
                <span class="label label-theme pull-right mail-info">3</span>
                </a>
            </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class=" fa fa-bar-chart-o"></i>
                <span>Charts</span>
                </a>
              <ul class="sub">
                <li><a href="morris.html">Morris</a></li>
                <li><a href="chartjs.html">Chartjs</a></li>
                <li><a href="flot_chart.html">Flot Charts</a></li>
                <li><a href="xchart.html">xChart</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-comments-o"></i>
                <span>Chat Room</span>
                </a>
              <ul class="sub">
                <li><a href="lobby.html">Lobby</a></li>
                <li><a href="chat_room.html"> Chat Room</a></li>
              </ul>
            </li>
            <li>
              <a href="google_maps.html">
                <i class="fa fa-map-marker"></i>
                <span>Google Maps </span>
                </a>
            </li>
          </ul>
        </div>
    </aside>
    
    <section id="main-content">
      <section class="wrapper">
  <?php
   
  require('../dbcon.php');
  $id=$_REQUEST['id'];
  $result = $mysqli->query("SELECT * FROM tblproduct where id=$id");
  if($result === FALSE){
        die(mysqli_error());
      }
  else{
  while($obj = $result->fetch_object()) { ?>

<div class="form">
<form name="form" method="post" action="" enctype="multipart/form-data"> 
<input name="id" type="text" value="<?php echo $obj->id ?>" />
<p><input type="text" name="name"  required value="<?php  echo $obj->name ?>" /></p>
<p><input type="text" name="code"  required value="<?php echo $obj->code ?>" /></p>
<p><input type="file" name="image" " /></p>
<p><input type="text" name="price" required value="<?php echo $obj->price ?>" /></p>
<p><input type="text" name="qty"  required value="<?php echo $obj->qty ?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
</div>
<?php } }?>

<br /><br /><br /><br />


<div class="form">
<p><a href="index.php">Home</a> | <a href="page_insert.php">Insert New Record</a> </p>
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['submit']))
{
$id=$_REQUEST['id'];
$name =$_REQUEST['name'];
$code = $_REQUEST["code"];
$image=$_REQUEST['image'];
$price =$_REQUEST['price'];
$qty = $_REQUEST["qty"];

$exten    = explode('.', $_FILES['image']['name']);
$exten    = end($exten);
$filename = uniqid() .'.'. $exten;

$target = "images/".$filename;
$fullpath ="../" .$target;

$update="update tblproduct set name='".$name."', code='".$code."',image='".$target."', price='".$price."',qty='".$qty."' where id='".$id."'";
$result = $mysqli->query($update);
if ($result) {
if (move_uploaded_file($_FILES['image']['tmp_name'], $fullpath)) {
    echo '<script language="javascript">';
    echo 'alert("message successfully sent")';
    echo '</script>';
 } else {
  echo '<script language="javascript">';
    echo 'alert("message error sent")';
    echo '</script>';
 }
}

}

?>
</div>

</section>
      <!-- /wrapper -->
    </section>
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          Created with Rakesh template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="inbox.php" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
  </section>
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->

</body>

</html>
