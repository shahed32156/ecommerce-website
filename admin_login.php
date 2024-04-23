<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="admin_login.css">

</head>
<body>
 
<header>
    <label  id="dark-change"></label>
  </header>


<form action="admin_login_confirmed.php" method="POST"> 

<div class='registrationPage'>

<h1>Admin Login</h1>
<p class="wrong-info" style="color:red; font-size:20px;margin-top:10px;border-radius:3px;text-align:center;width:305px;background:rgb(255, 237, 216)"><?php if(isset($_GET['wrongInfo'])){echo "Incorrect email or password";} ?></p>
<div class='email'>
<input type='email' name="email" placeholder='Email' onclick="pageload()" ></input>
</div>
<div class='pass'>
<input type='password' name="password" placeholder='Password' onclick="pageload()" ></input>
</div>

<div class='register-btn'>
<input type='submit' name="login" value='Login'></input>
</div>

</div>

</form> 
<script src="darkmood.js"></script>

</body>
</html>