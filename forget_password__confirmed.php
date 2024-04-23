<?php

$con=mysqli_connect("localhost","root","","e-commerce");

$Email=$_POST['email'];
$NewPassword=$_POST['new_password'];
$ConfirmPassword=$_POST['confirm_password'];

// $sql2="select Password from registration where Email='$Email'";
// $res=mysqli_query($con,$sql2);

if($NewPassword==$ConfirmPassword) {
    $sql="Update registration set Password='$NewPassword' Where Email = '$Email' ";
    $res=mysqli_query($con,$sql);
    header("location:login.php");

}

else {


    header("location:forget_password.php?wrongInfo=true");
}


?>