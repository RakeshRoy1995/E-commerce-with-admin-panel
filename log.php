<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>LogIn Ecommerce</title>

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
</head>

<body>
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="" method="post">
        <h2 class="form-login-heading">sign in now</h2>
        <div class="login-wrap">
          <input type="text" name="email" class="form-control" placeholder="User Email" autofocus>
          <br>
          <input type="password" name="password" class="form-control" placeholder="Password">
          <label class="checkbox">
            <input type="checkbox" value="remember-me"> Remember me
            <span class="pull-right">
            <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
            </span>
            </label>
          <button class="btn btn-theme btn-block" name="login" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
          <hr>
          </form>
          <div class="registration">
            Don't have an account yet?<br/>
            <a class="" href="Signup.com">
              Create an account
              </a>
          </div>
        </div>
    </div>
  </div>
 
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/login-bg.jpg", {
      speed: 500
    });
  </script>
</body>

</html>

<?php

include('temp/dbcon.php');

if(isset($_POST['login'])){
  $email = $_POST['email'];
  $password = $_POST['password']; 

  $qry = "SELECT * FROM customars WHERE
  email='$email' AND password = '$password'";
    $run = mysqli_query($con, $qry);
    $row = mysqli_fetch_assoc($run);
  if($run){
    session_start();
    $_SESSION['variable'] = $email;
    $_SESSION['user_id'] = $row['user_id'];
      echo "<script>window.open('index.php')</script>";
    }
    else{
      echo "<script>alert('Wrong Somewhere')</script>";
    }
    
}

?>
