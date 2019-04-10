<?php
include('temp/dbcon.php');
session_start();
?>


<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>E-Commerce </title>
	<!-- Bootstrap core CSS -->
	<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<!-- Fontawesome core CSS -->
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
<body>

	<table width="100%" border="1" style="border-collapse:collapse;">
		<thead>
		<tr>
			<th><strong>Name</strong></th>
			<th><strong>Code</strong></th>
			<th><strong>Image</strong></th>
			<th><strong>Price</strong></th>
			<th><strong>Quantity</strong></th>
			<th><strong>Edit</strong></th>
			<th><strong>Delete</strong></th>
		</tr>
		</thead>
		<tbody>

<?php
require('dbcon.php');

if (!empty($_SESSION['variable'])) {
	$email = $_SESSION['variable'];
	$user_id =$_SESSION['user_id'] ;
          ?>
		<div class="jumbotron">
			<?php

		      $result = $mysqli->query('SELECT * FROM mobile where user_id = $user_id');
		      if($result === FALSE){
		        die(mysql_error());
		      }
		      if($result){


		while($obj = $result->fetch_object()) { ?>
			<td align="center"><?php echo $obj->name ?></td>
			<td align="center"><?php echo $obj->code ?></td>
			<td align="center">
          <img style="width:100px; height:100px;" src="<?php echo $obj->image ?>"/>'
        </td>
			<td align="center"><?php echo $obj->price ?></td>
			<td align="center"><?php echo $obj->qty ?></td>
			<td align="center"><a href="edit_mobile.php?id=<?php echo $obj->id ?>">Edit</a></td>
			<td align="center"><a href="mobile.php?id=<?php echo $obj->id ?>">Delete</a></td>
		</tr>
		<?php  } } ?>
		</tbody>
		</table>

		<br /><br /><br /><br />
		</div>
		</div>

<?php
    }else{

    	?>
    	<div class="jumbotron">
		  <h1 class="display-4">Log In Here </h1>
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
		</div>
		<?php
		
    }
    ?>  

<script src="assets/js/jquery-1.10.2.js"></script>
<!--bootstrap JavaScript file  -->
<script src="assets/js/bootstrap.js"></script>
</body> 
</html>

<?php

if(isset($_POST['login'])){
  $email = $_POST['email'];
  $password = $_POST['password']; 

  $qry = "SELECT * FROM customars WHERE
  email='$email' AND password = '$password'";
    $run = mysqli_query($con, $qry);
  if($run){
    session_start();
    $_SESSION['variable'] = $email;
      echo "<script>window.open('cus_order_.php')</script>";
    }
    else{
      echo "<script>alert('Wrong Somewhere')</script>";
    }
    
}

?>
