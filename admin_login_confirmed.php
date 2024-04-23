<?php

$con=mysqli_connect("localhost","root","","e-commerce");

$Admin_email=$_POST['email'];
$Admin_password=$_POST['password'];

$sql="select * from admin_login";
$res=mysqli_query($con,$sql);

while ($row=mysqli_fetch_assoc($res))
        {
  $e=$row['Email'];
  $p=$row['Password'];

  if ($Admin_email==$e && $Admin_password==$p) {

    header("location:admin_home.php");

}

else {

    header("location:admin_login.php?wrongInfo=true");

}
    
}

// if ($Admin_email=="shahed32156@gmail.com" && $Admin_password=="shahed123") {

//     header("location:admin_home.php");

// }

// else {

//     header("location:admin_login.php?wrongInfo=true");

// }


?>