<?php

$con=mysqli_connect("localhost","root","","e-commerce");

$OldPassword=$_POST['current_password'];
$NewPassword=$_POST['new_password'];

$sql2="select Password from admin_login where Password='$OldPassword'";
$res=mysqli_query($con,$sql2);

if($row=mysqli_fetch_assoc($res)) {

    $db_password=$row['Password'];

    if($OldPassword==$db_password) {

        $sql="Update admin_login set Password='$NewPassword' Where Password = '$OldPassword' ";
        $res=mysqli_query($con,$sql);
        header("location:admin_home.php");

    }


}


else {


    header("location:admin_changePassword.php?wrongInfo=true");
}


?>