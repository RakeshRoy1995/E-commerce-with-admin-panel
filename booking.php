<?php
session_start();
  include('temp/dbcon.php');
  $_SESSION['T_ID'] = mt_rand(1000,100000000000);
  if (isset($_POST['reg'])) {
    $name =            $_POST['name'];
    $Current_Address     = $_POST['Current_Address'];
    $email    =            $_POST['email'];
    $Permanent_Address    =$_POST['Permanent_Address'];
    $Num                  =$_POST['Number'];
    $user_id              =$_POST['user_id'];
    $rn=$_SESSION['T_ID'];

    $qry = "INSERT INTO customars_2nd (name, Current_Address, email, Permanent_Address, Num , track_id, user_id) 
    VALUES ('$name', '$Current_Address','$email','$Permanent_Address','$Num' ,'$rn', $user_id)";
    $run = mysqli_query($con , $qry);

    if ($run==true) {
      echo "<script> alert('Successful Keep This Tracking Id ( $rn ) To Track Your Booking');</script>";
    }
    else{
      echo "<script>alert('not')</script>";
    }
    header("location:view_customers_order.php");
  }

?>

<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial;
    font-size: 17px;
}

#myVideo {
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%; 
    min-height: 100%;
}

.content {
    position: fixed;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
    color: #f1f1f1;
    width: 100%;
    padding: 20px;
}

#myBtn {
    width: 200px;
    font-size: 18px;
    padding: 10px;
    border: none;
    background: #000;
    color: #fff;
    cursor: pointer;
}

#myBtn:hover {
    background: #ddd;
    color: black;
}
</style>

</head>
<body>

<video autoplay muted loop id="myVideo">
  <source src="videoplaybahhck.mp4" type="video/mp4">
  <source src="videoplaybhack.ogg" type="video/ogg">  
</video>

<div class="container mx-4 my-4">
<div class="content">
 <form class="needs-validation" action="" method="post" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Name</label>
      <input type="text" name="name" class="form-control" id="validationCustom01" placeholder="Name" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Email</label>
      <input type="email" name="email" class="form-control" id="validationCustom02" placeholder="Email" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>
 <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Current Address</label>
      <input type="text" name="Current_Address" class="form-control" id="validationCustom03" placeholder="Current Address" required>
      <div class="invalid-feedback">
        Please provide a valid  Address
      </div>
    </div>

  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Permanent Address</label>
      <input type="text" name="Permanent_Address" class="form-control" id="validationCustom03" placeholder="Address" required>
      <div class="invalid-feedback">
        Please provide a valid Address.
      </div>
    </div>

     <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Phone Number</label>
      <div class="input-group">
        <div class="input-group-prepend">
        </div>
        <input type="text" name="Number" class="form-control" id="validationCustomUsername" placeholder="Phone Number" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please choose.
        </div>
      </div>
      <label for="validationCustomUsername">User ID</label>
      <div class="input-group">
        <div class="input-group-prepend">
        </div>
        <input type="text" name="user_id" class="form-control" id="validationCustomUsername" placeholder="Phone Number" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please choose.
        </div>
      </div>
    </div>
  </div>
  <button class="btn btn-outline-primary text-center" name="reg" type="submit">Proceed</button>
</form>

</div>
</div>


  </div>
</div>
