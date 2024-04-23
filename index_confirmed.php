<?php
session_start();
$con=mysqli_connect("localhost","root","","e-commerce");

if (mysqli_connect_error()) {

   echo "Connection failed";

}
else {

    $Name=$_POST['name'];
    $Email=$_POST['email'];
    $Password=$_POST['password'];
    $Phone=$_POST['phone'];
    $Address=$_POST['address'];

    $sql2 = "select * from registration where Email='$Email'";
    $result = mysqli_query($con,$sql2);
  

    if(mysqli_num_rows($result) > 0){

        header("location:registration.php?wrongInfo1=true");

    }

    else if (preg_match('/[A-Z]/', $Password) && preg_match('/[a-z]/', $Password) && preg_match('/[^\w]/', $Password)) {
 
  if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {

    header("location:registration.php?wrongInfo2=true");
  }
  else {
   
    // if (!preg_match("/^[0-10]{11}$/", $Phone)) {
        
    //     header("location:registration.php?wrongInfo4=true");

    // }


    $sql="insert into registration (Name,Email,Password,Phone,Address) values('$Name','$Email','$Password','$Phone','$Address')";
    mysqli_query($con,$sql);
    $_SESSION['email'] = $Email;
    header("location:user_panel.php");

  
   
  }

    }

    // else if (mysqli_num_rows($result) > 0) {

    //     header("location:registration.php?wrongInfo3=true");
    // }

    else {

        header("location:registration.php?wrongInfo3=true");
    
    }
}


?>