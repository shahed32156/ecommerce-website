<?php

$con=mysqli_connect("localhost","root","","e-commerce");

$Image=$_FILES['image']['name'];
$Title=$_POST['title'];
$Product_code=$_POST['id'];


$sql="Update catagory set Image='$Image', Title='$Title' Where Product_id='$Product_code'";
$res=mysqli_query($con,$sql);
header("location:admin_home.php");

?>