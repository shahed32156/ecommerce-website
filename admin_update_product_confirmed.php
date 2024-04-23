<?php

$con=mysqli_connect("localhost","root","","e-commerce");

$Image=$_FILES['image']['name'];
$Product_desc=$_POST['desc'];
$Price=$_POST['price'];
$Product_code=$_POST['id'];


$sql="Update all_product set Image='$Image', Product_description='$Product_desc', Product_price='$Price' Where Product_id='$Product_code'";
$res=mysqli_query($con,$sql);
header("location:admin_home.php");

?>