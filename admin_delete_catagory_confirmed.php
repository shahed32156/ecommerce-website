<?php

$con=mysqli_connect("localhost","root","","e-commerce");

$Product_code=$_POST['id'];

$sql="delete from catagory where Product_id = '$Product_code'";
mysqli_query($con,$sql);
header("location:admin_home.php");


?>