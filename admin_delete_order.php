<?php

$con=mysqli_connect("localhost","root","","e-commerce");

$Product_code=$_POST['code'];

$sql="delete from order_info where Product_code = '$Product_code'";
mysqli_query($con,$sql);
header("location:admin_home.php");


?>