<?php
session_start();
setlocale(LC_TIME, 'en_US.utf8');
date_default_timezone_set('Asia/Dhaka');
$con=mysqli_connect("localhost","root","","e-commerce");

$email = $_SESSION['email'];
$sql="select * from registration where Email = '$email'";
$res=mysqli_query($con,$sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="order.css">
    
   
</head> 

<body>
    
<header>
    <label  id="dark-change"></label>
  </header>

  <form action="order_confirmed.php" method="POST">
    <div class='registrationPage'>

        <h1>Order Confirmation</h1>
        
        <p class="wrong-info" style="color:red; font-size:20px;margin-top:10px;border-radius:3px;text-align:center;width:305px;background:rgb(255, 237, 216)"><?php if(isset($_GET['wrongInfo'])){echo "Already exist this email";} ?></p>
        <?php 
        if ($row=mysqli_fetch_assoc($res))
        {
        ?>

        <div class='name'>
        <input class="click" type='text' name="name" value="<?php echo $row['Name']; ?>" required></input>
        </div>
        <div class='email'>
        <input class="click" type='email' name="email" value="<?php echo $row['Email']; ?>" required></input>
        <p class="wrong-info2" style="color:red; font-size:15px;margin-top:10px;padding-left:5px;border-radius:3px;text-align:left;width:305px;background:rgb(255, 237, 216)"><?php if(isset($_GET['wrongInfo2'])){echo "Invalid email";} ?></p>  
      </div>

        <div class='phone'>
        <input class="click" type='number' name="phone" value="<?php echo $row['Phone']; ?>" required></input>
        <p class="wrong-info1" style="color:red; font-size:15px;margin-top:10px;padding-left:5px;border-radius:3px;text-align:left;width:305px;background:rgb(255, 237, 216)"><?php if(isset($_GET['wrongInfo3'])){echo "Already exist this number";} ?></p>    
      </div>
        <div class='address'>
        <input class="click" type='text' name="address" value="<?php echo $row['Address']; ?>" required></input>
        </div>
<?php
        }

?>
<div class='address'>
        <input class="click" type='text' name="date" value="<?php echo date('Y-m-d');?>" required></input>
</div>

<div class='address'>
        <input class="click" type='text' name="time" value="<?php echo date('g:i a');?>" required></input>
</div>

<div class='address'>
        <input class="click" type='text' name="product-code" placeholder="Product code" required></input>
</div>

<div class='address'>
        <input style="width: 70px; margin-left:30%;margin-right:auto; padding-left:27px" class="number-input" type='number' name="qty" value="1" min="1" max="100" required></input>
       <div class="div">
            <a onclick="increment()">+</a>
            <a onclick="decrement()">-</a>
            </div>

</div>

        <div class='register-btn'>
        <input type='submit' value='Buy product'></input>
        </div>
  
      </div>
  
      </div>

      </form>
      <script src="spinner.js"></script>
      <script src="darkmood.js"></script>
      
 
</body>

</html>