<?php
session_start();
include("temp/dbcon.php");
$total = $_SESSION['total'];
$rn = $_SESSION['T_ID'];
?>
<html>
<head>
<title>
E-Commerce
</title>
<style>
body
{
	background-color:#ccc;
}
#txt
{
	width:250px;
	border-style:groove;
	height:30px;
	border-radius:4px;
}
#sl
{
	width:125px;
	border-style:groove;
	height:30px;
	border-radius:4px;
}
#btn
{
	background-color:#1e5799;
	border-style:none;
	width:100px;
	height:30px;
	border-radius:4px;
	color:white;
}
#btn:hover{
background-color:#1e5700;
color:#000;
}
.header
{
		position:fixed;
		top:0px;
		background-color:#000;
		width:100%;
		left:0px;
		color:#fff;	
		opacity:.8;
		text-align:center;
}
		.footer
		{
		position:fixed;
		bottom:0px;
		background-color:#000;
		width:100%;
		left:0px;
		color:#fff;
		
		}
		.footer a
		{
color:#fff;
		}
		.container
		{
			padding-top:120px;
		}
		table
		{
			text-align:center;
		}
		.section
		{
			
		background-color:#fff;
		width:700px;
		height:490px;
		border-radius:10px;
		
		}
</style>
</head>
<body>
<center>
<div class="container">
<div class="section">
<?php
$dt=date("m/d/Y");
$email = $_SESSION['variable'];
$Trans_ID= mt_rand(1000,100000000000);
$query1="SELECT * from customars_2nd where track_id ='$rn'";
$result1=mysqli_query($con,$query1);
$rows=mysqli_fetch_array($result1);
	echo "Name: ".$rows['name']."<br>";
	echo "Products Code NO: ".$rows['track_id']."<br>";
	echo "User ID: ".$rows['user_id']."<br>";
	echo "User Email: ".$email."<br>";
	echo "Total Cost: Tk  ".$total."<br>";
?>
		<br>
        <form action="" method="post">
				<input type="text" name="name" id="txt" value="<?php echo $rows['name']; ?>" required>
				<br>
				<br>
				<input type="text" name="p_code" id="txt" value="<?php echo $rows['track_id']; ?>" required>
				<br>
				<br>
				<input type="text" name="u_id" id="txt" value="<?php echo $rows['user_id']; ?>" required>
				<br>
				<br>
				<input type="text" name="email" id="txt" value="<?php echo $rows['email']; ?>" required>
				<br>
				<br>
				<input type="text" name="num" id="txt" value="<?php echo $rows['Num']; ?>" required>
				<br>
				<br>
				<input type="text" name="tk" id="txt" value="<?php echo $total; ?>" required>
				<br>
				<br>
				<input type="text" name="Trans_ID" id="txt" placeholder="Your Transection ID" required>
				<br>
				<br>
				<input type="submit" name="btnpro" id="btn" value="Pay Now">
		</form>

				<a href="cancel.php"><input type="submit"id="btn" value="Cancel"></a><br>
			  </center>
			  </div>
			  </div>
			   <?php
			  if(isset($_POST["btnpro"]))
			  {
					$name     = $_POST["name"];
					$p_code   = $_POST["p_code"];
					$u_id     = $_POST["u_id"];
					$email    = $_POST["email"];
					$num      = $_POST["num"];
					$Trans_I  = $_POST["Trans_ID"];
					$tk       = $_POST["tk"];

					$query = "INSERT INTO transection (name, product_code , user_id , email , num , trans_id, Taka ) 
			        VALUES ('$name' , $p_code, $u_id,'$email', $num ,'$Trans_I' , $tk )";

					if(mysqli_query($con,$query))
					{
						$_SESSION['variable_2'] = $Trans_ID; 
						echo "<script> alert('Thank you So Much. We will Inform You Later for further requirement ');</script>";
						// header("location:complete.php");
					}
					else
					{
						echo "<script> alert('Thank you So Much. We will Inform You Later for further requirement ');</script>";
					}	
					
			  }
			  ?>
</body>
</html>