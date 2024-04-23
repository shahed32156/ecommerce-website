<?php
include("navbar.php");

$con=mysqli_connect("localhost","root","","e-commerce");

$sql="select * from all_product";
$res=mysqli_query($con,$sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="all_product.css">
 
    <style>




    </style>

</head>

<body>
    
<h3 style="text-align: center; margin-top: 3%;color: rgb(79, 156, 228);"> All Products </h3>
    <div class="container-fluid" style="padding-bottom: 4%;">

    

            <div class="row" style="margin-top: 2%;">

         
        
           <div class="col-lg-12">

                
           <?php 
        while ($row=mysqli_fetch_assoc($res))
        {
        ?>

            <div class="card-design">
                <a name="<?php echo $row['Product_id']; ?>"> </a>
                <img style="" src="<?php echo $row['Image']; ?>" alt="" height="400px" width="450px">
                <p style="margin-top: 20px;"><?php echo $row['Product_description']; ?></p>
                <h4 style="margin-top: 20px;">Product Code: <?php echo $row['Product_id']; ?></h4>
                <h4 style="margin-top: 20px;color:orange"><?php echo $row['Product_price']; ?></h4>
                <button class="order"><a href="order.php" style="text-decoration:none;color:white">Order</a></button>    
            
            </div>   
               <?php

}

?>

           </div>


        

    </div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>


</html>