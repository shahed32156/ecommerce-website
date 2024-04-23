<?php

$con=mysqli_connect("localhost","root","","e-commerce");


$Image=$_FILES['image']['name'];
$Title=$_POST['title'];
$Product_code=$_POST['id'];


$sql="insert into catagory (Image,Title,Product_id) values('$Image','$Title','$Product_code')";

header("location:admin_home.php");
    
mysqli_query($con,$sql);


?>