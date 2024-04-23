<?php
session_start();
$con=mysqli_connect("localhost","root","","e-commerce");

$Email=$_POST['email'];
$Password=$_POST['password'];

$sql="select Email,Password from registration where Email='$Email' and Password='$Password'";
$res=mysqli_query($con,$sql);


if (mysqli_num_rows($res)>0) 
{
   $_SESSION['email'] = $Email;  
   header("location:user_panel.php");
   
}
else {

 header("location:login.php?wrongInfo=true");
 }


?>