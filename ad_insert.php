<?php

include('dbcon.php');
    
        if(isset($_POST['upload'])){
      	$name = $_POST['name'];
      	$code = $_POST['code'];
      	$price = $_POST['price'];
      	$qty = $_POST['qty'];
        $target = "images/".basename($_FILES['image']['name']);
        

        $result = $mysqli->query("INSERT INTO tblproduct(name, code, image, price , qty)
         VALUES ('$name','$code','$target','$price', $qty)");
        if ($result) {
        	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
              echo '<script language="javascript">';
              echo 'alert("message successfully sent")';
              echo '</script>';
        }
        }


}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
  
<div class="form">
<p> <a href="index.php">Home</a> </p>
<div>
<h1>Insert New Record</h1>

   <form class="form-group" action='' method='post' enctype='multipart/form-data' ></br><br>
           Name  :<input type="text" name="name" class="form-control" required ><br><br>
           Code  :<input type="text" name="code" class="form-control" required ><br><br>
           Image :<input type='file' name= 'image' class="btn btn-outline-primary" required ><br><br>
           Price :<input type="text" name="price" class="form-control" required ><br><br>
           Quantity :<input type="text" name="qty" class="form-control" required ><br><br>
            <input type="submit" name="upload" value="Image Upload" class="btn btn-outline-primary" />
    </form>

<br /><br /><br /><br />
</div>
</div>
</body>
</html>
