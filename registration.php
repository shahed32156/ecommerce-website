
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rgistration</title>
    <link rel="stylesheet" href="registration.css">
    
   
</head> 

<body>
    
<header>
    <label  id="dark-change"></label>
  </header>

  <form action="index_confirmed.php" method="POST">
    <div class='registrationPage'>

        <h1>Registration</h1>
        <p id="wrong-info1" style="color:red; font-size:20px;margin-top:10px;border-radius:3px;text-align:center;width:305px;background:rgb(255, 237, 216)"><?php if(isset($_GET['wrongInfo1'])){echo "Already exist this email";} ?></p>
        <div class='name'>
        <input class="click" type='text' name="name" placeholder='Full name' onclick="pageload1();" required></input>
        </div>
        <div class='email'>
        <input class="click" type='email' name="email" placeholder='Email' onclick="pageload1()" required></input>
        <p id="wrong-info2" style="color:red; font-size:15px;margin-top:10px;padding-left:5px;border-radius:3px;text-align:left;width:305px;background:rgb(255, 237, 216)"><?php if(isset($_GET['wrongInfo2'])){echo "Invalid email";} ?></p>  
      </div>
        <div class='pass'>
        <input class="click" type='password' name="password" placeholder='Password' onclick="pageload1()" minlength="8" required></input>
        <p id="wrong-info3" style="color:red; font-size:15px;margin-top:10px;padding-left:5px;border-radius:3px;text-align:left;width:305px;background:rgb(255, 237, 216)"><?php if(isset($_GET['wrongInfo3'])){echo "At least one uppercase,lowercase and one special character";} ?></p>  
      </div>
      
        <div class='phone'>
        <input class="click" type='number' name="phone" placeholder='Mobile no' onclick="pageload1()" minlength="11" required></input>
        <p id="wrong-info4" style="color:red; font-size:15px;margin-top:10px;padding-left:5px;border-radius:3px;text-align:left;width:305px;background:rgb(255, 237, 216)"><?php if(isset($_GET['wrongInfo4'])){echo "Phone number must be 11 digit";} ?></p>    
      </div>
        <div class='address'>
        <input class="click" type='text' name="address" placeholder='Address' onclick="pageload1()" required></input>
        </div>
        <div class='login-msg'>
          <p>Already have an account? <a href='login.php'>login</a></p>
        </div>
        <div class='register-btn'>
        <input type='submit' value='Register'></input>
        </div>
  
      </div>
  
      </div>

      </form>
 
      

<script>
function pageload1() {

 
const load1 = document.querySelector("#wrong-info1");

load1.innerHTML="";
 
const load2 = document.querySelector("#wrong-info2");

load2.innerHTML="";

const load3 = document.querySelector("#wrong-info3");

load3.innerHTML="";

const load4 = document.querySelector("#wrong-info4");

load4.innerHTML="";

}

</script>
<script src="darkmood.js"></script>


</body>

</html>