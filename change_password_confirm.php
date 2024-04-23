<?php

$con=mysqli_connect("localhost","root","","e-commerce");

$OldPassword=$_POST['current_password'];
$NewPassword=$_POST['new_password'];

$sql2="select Password from registration where Password='$OldPassword'";
$res=mysqli_query($con,$sql2);

if($row=mysqli_fetch_assoc($res)) {

    $db_password=$row['Password'];

    if($OldPassword==$db_password) {

        $sql="Update registration set Password='$NewPassword' Where Password = '$OldPassword' ";
        $res=mysqli_query($con,$sql);
        header("location:user_panel.php");

    }


}


else {


    header("location:change_password.php?wrongInfo=true");
}


?>