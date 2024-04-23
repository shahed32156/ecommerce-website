<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget password</title>

    <link rel="stylesheet" href="login.css">

</head>
<body>
 
<header>
    <label  id="dark-change"></label>
  </header>


<form action="forget_password__confirmed.php" method="POST"> 

<div class='registrationPage'>

<h1>Forgot Password</h1>
<p class="wrong-info" style="color:red; font-size:20px;margin-top:10px;border-radius:3px;text-align:center;width:305px;background:rgb(255, 237, 216)"><?php if(isset($_GET['wrongInfo'])){echo "Confirm password doesn't match";} ?></p>

<div class='email'>
<input type='email' name="email" placeholder='Email' onclick="pageload()" required></input>
</div>
<div class='pass'>
<input type='password' name="new_password" placeholder='New Password' onclick="pageload()" required></input>
</div>
<div class='pass'>
<input type='password' name="confirm_password" placeholder='Confirm Password' onclick="pageload()" required></input>
</div>

<div class='register-btn'>
<input type='submit' value='Confirm'></input>
</div>

</div>

</form> 
<script src="darkmood.js"></script>

</body>
</html>