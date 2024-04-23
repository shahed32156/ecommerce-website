<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>

    <link rel="stylesheet" href="change_password.css">

</head>
<body>
 
<header>
    <label  id="dark-change"></label>
  </header>


<form action="change_password_confirm.php" method="POST"> 

<div class='registrationPage'>

<h1>Change Password</h1>
<p class="wrong-info" style="color:red; font-size:20px;margin-top:10px;border-radius:3px;text-align:center;width:305px;background:rgb(255, 237, 216)"><?php if(isset($_GET['wrongInfo'])){echo "Incorrect current password";} ?></p>
<div class='email'>
<input class="click" type='password' name="current_password" placeholder='Current password' onclick="pageload()" required ></input>
</div>
<div class='pass'>
<input class="click" type='password' name="new_password" placeholder='New password' onclick="pageload()" required></input>
</div>

<div class='register-btn'>
<input type='submit' value='Change Password'></input>
</div>

</div>

</form> 
<script src="darkmood.js"></script>

</body>
</html>