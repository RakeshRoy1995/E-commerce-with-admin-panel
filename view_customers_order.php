<?php
session_start();
include 'temp/dbcon.php';
$rn = $_SESSION['T_ID'];
$total = $_SESSION['total'];
echo "<h1>Your Details</h1>";
?>

<html>
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
	<style>
body  {
  background-color: coral;
}
</style>
</head>
<body>

<div>
<br>
<table border="5" width="900" id="customers">
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Permanent Address</th>
			<th>Current Address</th>
			<th>Number</th>
			<th>Track Id</th>
			<th>Total</th>
			<th>Action</th>		
		</tr>

			<?php
	 $query1="SELECT * from customars_2nd where track_id = '$rn'";
	 $result1=mysqli_query($con,$query1);
while($rows=mysqli_fetch_array($result1))
{
	?>
 <tr>
    <td><?php echo $rows['name']?></td>
    <td><?php echo $rows['email']?></td>
	 <td><?php echo $rows['Permanent_Address']?></td>
	 <td><?php echo $rows['Current_Address']?></td>
	 <td><?php echo $rows['Num']?></td>  
	 <td><?php echo $rows['track_id']?></td>
	 <td><?php echo "Tk = ".$total; ?></td>
	 <td><a href="schpayment.php">Proceed</a></td>
  </tr>
<?php
		}
?>
 </table>
</div>
</div>

<script src="assets/js/jquery-1.10.2.js"></script>
<!--bootstrap JavaScript file  -->
<script src="assets/js/bootstrap.js"></script>
</body> 
</html>