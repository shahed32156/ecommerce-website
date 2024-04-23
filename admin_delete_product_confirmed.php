<?php

$con=mysqli_connect("localhost","root","","e-commerce");

$Product_code=$_POST['code'];

$sql="delete from all_product where Product_id = '$Product_code'";
mysqli_query($con,$sql);
header("location:admin_home.php");


?>