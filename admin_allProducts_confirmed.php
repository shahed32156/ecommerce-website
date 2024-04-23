<?php

$con=mysqli_connect("localhost","root","","e-commerce");


$Image=$_FILES['image']['name'];
$Product_desc=$_POST['desc'];
$Product_price=$_POST['price'];
$Product_id=$_POST['id'];


$sql="insert into all_product (Image,Product_description,Product_Price,Product_id) values('$Image','$Product_desc','$Product_price','$Product_id')";

header("location:admin_home.php");
    
mysqli_query($con,$sql);


?>