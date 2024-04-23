<?php


include("admin_navbar.php");


$con=mysqli_connect("localhost","root","","e-commerce");
$sql="select * from registration";
$res=mysqli_query($con,$sql);
$sql1="select * from order_info";
$res1=mysqli_query($con,$sql1);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin home</title>
   
    <link rel="stylesheet" href="admin_home.css">

    <style>

table {

border-collapse: collapse;
margin-top:5%;
margin-left:auto;
margin-right:auto;
border: 1px solid black;
}





th{

font-size:25px;
background-color: rgb(7, 176, 176);

}
tr:nth-child(even) {
    background-color: rgb(170, 255, 0);
}

tr:nth-child(odd) {
background-color: lightgray;
}

label{
    position: absolute;
    width: 45px;
    height: 26px;
    right: 20px;
    top: 34px;
    border: 2px solid;
    border-radius: 20px;
   
}
label:before{
    position: absolute;
    content: '';
    width:20px;
    height: 20px;
    left: 1px;
    top: 1px;
    border-radius: 50%;
    background: #000;
    cursor: pointer;
    transition: 0.4s;
}
label.active:before{
    left: 24px;
    background: #fff;
}
body.night{
    background: #000;
    color: #fff;
}

        textarea:focus{

            outline:none;
        }

        
        .price {
    
    margin-top: 10px; 

    }


    </style>
</head>

<body style="padding-bottom:5%">
    
<header>
    <label  id="dark-change"></label>
  </header>

    <h3 id="catagory" style="text-align: center; margin-top: 3%;color: rgb(79, 156, 228);">Include Catagory </h3>
    
    <div class="container-fluid">

        <div class="row">


            <div class="col-lg-12 registration">

                <form action="admin_home_confirmed.php" method="POST" enctype="multipart/form-data">
                    
                    <div class='registrationPage'>
                
                       
                        <div class='name'>
                        <input class="file" type='file' name="image" onclick="pageload()" required></input>
                        </div>
                        <div class='email'>
                        <input class="text" type='text' name="title" placeholder='Product Title' onclick="pageload()" required></input>
                        </div>
                        <div class='email'>
                        <input class="file" type='text' name="id" onclick="pageload()" placeholder='Product code' required></input>
                        </div>
                        <div class='login-msg'>
                        <p style="color:black;font-size:15px;margin-top:10px"><a href='#delete'>Delete</a> -OR- <a href='#update'>Update</a></p>
                        
                        </div>
                                                
                        <div class='register-btn'>
                        <input type='submit' value='Insert' onclick="click('Successfully Inserted')"></input>
                        </div>
                  
                      </div>
                  
                      </div>
                
                      </form>


            </div>


        </div>



    </div>


    <h3 id="delete" style="text-align: center; margin-top: 3%;color: rgb(79, 156, 228);">Delete Catagory </h3>
    
    <div class="container-fluid">

        <div class="row">


            <div class="col-lg-12 registration">

                <form action="admin_delete_catagory_confirmed.php" method="POST" enctype="multipart/form-data">
                    
                    <div class='registrationPage'>
                
                     
                        <div class='email'>
                        <input class="text" type='text' name="id" placeholder='Product code' onclick="pageload()" required></input>
                        </div>
                                
                        <div class='register-btn'>
                        <input type='submit' value='Delete' onclick="click('Successfully Deleted')"></input>
                        </div>
                  
                      </div>
                  
                      </div>
                
                      </form>


            </div>


        </div>



    </div>



    <h3 id="update" style="text-align: center; margin-top: 3%;color: rgb(79, 156, 228);">Update Catagory </h3>
    
    <div class="container-fluid">

        <div class="row">


            <div class="col-lg-12 registration">

                <form action="admin_update_catagory_confirmed.php" method="POST" enctype="multipart/form-data">
                    
                    <div class='registrationPage'>
                
                    <div class='name'>
                        <input class="file" type='file' name="image" onclick="pageload()" required></input>
                        </div>

                        <div class='email'>
                        <input class="text" type='text' name="title" placeholder='Product Title' onclick="pageload()" required></input>
                        </div>

                        <div class='email'>
                        <input class="file" type='text' name="id" onclick="pageload()" placeholder='Product code' required></input>
                        </div>
                                
                        <div class='register-btn'>
                        <input type='submit' value='Update' onclick="click('Successfully Deleted')"></input>
                        </div>
                  
                      </div>
                  
                      </div>
                
                      </form>


            </div>


        </div>



    </div>
    
    <h3 id="products" style="text-align: center; margin-top: 3%;color: rgb(79, 156, 228);">All Products </h3>
    
    <div class="container-fluid">

        <div class="row">


            <div class="col-lg-12 registration">

                <form action="admin_allProducts_confirmed.php" method="POST" enctype="multipart/form-data">
                    
                    <div class='registrationPage'>
                
                       
                        <div class='name'>
                        <input class="file" type='file' name="image" onclick="pageload()" required></input>
                        </div>
                        <div class='email'>
                        <textarea style="border: none;background-color: rgb(229, 226, 226);border-radius: 0.25em;padding-left: 5px;padding-top:5px" name="desc" id="" cols="38" rows="5" placeholder="Product description" required></textarea>
                        </div>
                        <div class='price'>
                        <input class="text" type='text' name="price" onclick="pageload()" placeholder="Product price" required></input>
                        </div>
                        <div class='email'>
                        <input class="text" type='text' name="id" placeholder='Product code' onclick="pageload()" required></input>
                        </div>
                        <div class='login-msg'>
                        <p style="color:black;font-size:15px;margin-top:10px"><a href='#delete-product'>Delete</a> -OR- <a href='#update-product'>Update</a></p>
                        
                        </div>
                                                
                        <div class='register-btn'>
                        <input type='submit' value='Insert' onclick="click('Successfully Inserted')"></input>
                        </div>
                  
                      </div>
                  
                      </div>
                
                      </form>


            </div>


        </div>



    </div>

    <h3 id="delete-product" style="text-align: center; margin-top: 3%;color: rgb(79, 156, 228);">Delete Product </h3>
    
    <div class="container-fluid">

        <div class="row">


            <div class="col-lg-12 registration">

                <form action="admin_delete_product_confirmed.php" method="POST" enctype="multipart/form-data">
                    
                    <div class='registrationPage'>
                
                     
                        <div class='email'>
                        <input class="text" type='text' name="code" placeholder='Product code' onclick="pageload()" required></input>
                        </div>
                                
                        <div class='register-btn'>
                        <input type='submit' value='Delete' onclick="click('Successfully Deleted')"></input>
                        </div>
                  
                      </div>
                  
                      </div>
                
                      </form>


            </div>


        </div>



    </div>


    <h3 id="update-product" style="text-align: center; margin-top: 3%;color: rgb(79, 156, 228);">Update product </h3>
    
    <div class="container-fluid">

        <div class="row">


            <div class="col-lg-12 registration">

                <form action="admin_update_product_confirmed.php" method="POST" enctype="multipart/form-data">
                    
                    <div class='registrationPage'>
                
                    <div class='name'>
                        <input class="file" type='file' name="image" onclick="pageload()" required></input>
                        </div>

                        <div class='email'>
                        <textarea style="border: none;background-color: rgb(229, 226, 226);border-radius: 0.25em;padding-left: 5px;padding-top:5px" name="desc" id="" cols="38" rows="5" placeholder="Product description" required></textarea>
                        </div>

                        <div class='price'>
                        <input class="text" type='text' name="price" onclick="pageload()" placeholder="Product price" required></input>
                        </div>
                        <div class='email'>
                        <input class="text" type='text' name="id" placeholder='Product code' onclick="pageload()" required></input>
                        </div>
                                
                        <div class='register-btn'>
                        <input type='submit' value='Update' onclick="click('Successfully Deleted')"></input>
                        </div>
                  
                      </div>
                  
                      </div>
                
                      </form>


            </div>


        </div>



    </div>

    <table id="users" style="height : 400px; width : 1100px; text-align:center;">

<tr>

<th style="min-width:130px;font-size:17px"> Full Name </th>

<th style="min-width:130px;font-size:17px"> Email </th>

<th style="min-width:130px;font-size:17px"> Password </th>

<th style="min-width:130px;font-size:17px"> Phone </th>

<th style="min-width:130px;font-size:17px"> Address </th>

</tr>

<?php 

while ($row=mysqli_fetch_assoc($res))
  {
?>
<tr>
   <td style="min-width:130px"><?php echo $row['Name']; ?> </td>
   <td style="min-width:130px"><?php echo $row['Email']; ?> </td>
   <td style="min-width:130px"><?php echo $row['Password']; ?> </td>
   <td style="min-width:130px"><?php echo $row['Phone']; ?> </td>
   <td style="min-width:130px"><?php echo $row['Address']; ?> </td>
 
</tr>
    
  <?php

  }

  ?>

    </table>

    <table id="order-info" style="height : 200px; width : 1100px; text-align:center;">

<tr>

<th style="min-width:130px;font-size:17px"> Full Name </th>

<th style="min-width:130px;font-size:17px"> Email </th>

<th style="min-width:130px;font-size:17px"> Phone </th>

<th style="min-width:130px;font-size:17px"> Address </th>

<th style="min-width:130px;font-size:17px"> Oder date </th>

<th style="min-width:130px;font-size:17px"> Order time </th>

<th style="min-width:130px;font-size:17px"> Product code </th>

<th style="min-width:130px;font-size:17px"> Quantity </th>

<th style="min-width:130px;font-size:17px"> Action </th>

</tr>

<?php 

while ($row=mysqli_fetch_assoc($res1))
  {
?>
<tr>
   <td style="min-width:130px"><?php echo $row['Name']; ?> </td>
   <td style="min-width:130px"><?php echo $row['Email']; ?> </td>
   <td style="min-width:130px"><?php echo $row['Phone']; ?> </td>
   <td style="min-width:130px"><?php echo $row['Address']; ?> </td>
   <td style="min-width:130px"><?php echo $row['Order_date']; ?> </td>
   <td style="min-width:130px"><?php echo $row['Order_time']; ?> </td>
   <td style="min-width:130px"><?php echo $row['Product_code']; ?> </td>
   <td style="min-width:130px"><?php echo $row['Quantity']; ?> </td>
   <td style="min-width:130px"><a href="#delete-order" style="color:red;font-weight:600">Delete</a> </td>
 
</tr>
    
  <?php

  }

  ?>

    </table>

    <h3 id="delete-order" style="text-align: center; margin-top: 3%;color: rgb(79, 156, 228);">Delete Order </h3>
    
    <div class="container-fluid">

        <div class="row">


            <div class="col-lg-12 registration">

                <form action="admin_delete_order.php" method="POST" enctype="multipart/form-data">
                    
                    <div class='registrationPage'>
                
                     
                        <div class='email'>
                        <input class="text" type='text' name="code" placeholder='Product code' onclick="pageload()" required></input>
                        </div>
                                
                        <div class='register-btn'>
                        <input type='submit' value='Delete' onclick="click('Successfully Deleted')"></input>
                        </div>
                  
                      </div>
                  
                      </div>
                
                      </form>


            </div>


        </div>



    </div> 

    <script src="darkmood.js"></script>



</body>




</html>