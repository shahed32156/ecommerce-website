<?php
include("navbar.php");

$con=mysqli_connect("localhost","root","","e-commerce");

$sql="select * from catagory";
$res=mysqli_query($con,$sql);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Panel</title>
    
    <link rel="stylesheet" href="user_panel.css">


</head>

<body>
    
<h3 style="text-align: center; margin-top: 3%;color: rgb(79, 156, 228);"> Product Catagory </h3>
    <div class="container-fluid" style="padding-bottom: 4%;">

            <div class="row" style="margin-top: 2%;">

            <?php 
        while ($row=mysqli_fetch_assoc($res))
        {
        ?>
        
           <div class="col-lg-4">

            <a href="all_product.php#<?php echo $row['Product_id']; ?>" class="product-link">
            <div class="card">
                <img style="margin-left: auto; margin-right: auto;" src="<?php echo $row['Image']; ?>" alt="" height="200px" width="250px">
                <p style="margin-top: 20px;"><?php echo $row['Title']; ?></p>
                  
            </div>
        </a>

  
           </div>


           <?php

}

?>

    </div>





</body>




</html>