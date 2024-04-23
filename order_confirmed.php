<?php

$con=mysqli_connect("localhost","root","","e-commerce");

if (mysqli_connect_error()) {

   echo "Connection failed";

}
else {

    $Name=$_POST['name'];
    $Email=$_POST['email'];
    $Phone=$_POST['phone'];
    $Address=$_POST['address'];
    $Date=$_POST['date'];
    $Time=$_POST['time'];
    $ProductCode=$_POST['product-code'];
    $QTY=$_POST['qty'];


    $sql="insert into order_info (Name,Email,Phone,Address,Order_date,Order_time,Product_code,Quantity) values('$Name','$Email','$Phone','$Address','$Date','$Time','$ProductCode','$QTY')";
    mysqli_query($con,$sql);
    header("location:user_panel.php");

}


?>