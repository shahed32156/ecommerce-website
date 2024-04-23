<?php

include("navbar.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!-- <link rel="stylesheet" href="contact.css"> -->
 
<style> 


* {

margin: 0;
padding: 0;
box-sizing: border-box;

}

html,body {

   display: grid;
}

.image {

max-width: 100%;
height: auto;
 
}

.contact-card {

box-shadow: 0 0.188em 1.550em rgb(100, 156, 156);
width: 400px;
text-align: center;
font-weight: 500;
margin-top: 13%;
margin-left: 10%;
padding-top: 25px;
padding-bottom: 15px;
border-radius: 5px;

}

.color1 {

    color: rgb(213, 120, 120);
}

.color2 {

color: rgb(19, 232, 19);
}

.contact-card2 {

box-shadow: 0 0.188em 1.550em rgb(100, 156, 156);
border-radius: 5px;
width: 600px;
padding: 10px;
padding-bottom: 10px;
margin-top: 7%;
margin-left: 27%;
border-radius: 5px;


}

.para {

    padding-right:13px;
    padding-left:13px;
    text-align:justify;
    margin-top:5%;
}

.name {

margin-top: 8%;

}

.number {

margin-top: 3%;

}

.email {

margin-top: 3%;
}

.msg {

margin-top: 3%;
}

.click {

width: 350px;
padding: 8px;
border-radius: 10px;
background-color: transparent;
border: 2px solid rgb(7, 176, 176);
position: relative;
display: block;
margin-left: auto;
margin-right: auto;
color: black;

}

.click:focus {

    outline:none;

}

textarea {

padding: 8px;
border-radius: 10px;
background-color: transparent;
border: 2px solid rgb(7, 176, 176);
position: relative;
display: block;
margin-left: auto;
margin-right: auto;
color: black; 
}

.send-rst {
    margin-top: 5%;
    margin-left: 37%;
    margin-bottom: 5%;
    
}

.send {
   
   border: none;
   background-color: rgb(3, 127, 127);
   padding: 10px 15px 10px 15px;
   border-radius: 5px;
   color: white;
}

.send:hover {

background-color: rgb(7, 176, 176);
}



.btn-reset {

border: none;
background-color: rgb(3, 127, 127);
padding: 10px 15px 10px 15px;
border-radius: 5px;
margin: 20px;
color: white;

}

.btn-reset:hover {

background-color: rgb(7, 176, 176);
}

</style>

</head>

<body style="padding-bottom:5%">
  

<div class="container">


<div class="row">


       <div class="col-lg-5">

            <img style="margin-top:10%" class="image" src="contact.jpg" alt="" height="350px" width="500px">

       </div>

       <div class="col-lg-7">


        <div class="contact-card">


           <h4 style="text-align:center;">Contact details</h4>

            <p style="margin-top:5%" class="info">Address: Mirpur-14, Dhaka-1206</p>
            <p class="info">Email: shahed32156@gmail.com</p>
            <p class="info">Phone: +8801741987566</p>  

            <div class="contact-img">

        <a href="https://www.facebook.com/profile.php?id=100094014247740&mibextid=ZbWKwL" target="_blank"><i style="margin: 12px;" class="fa-brands fa-facebook fa-2x"></i></a>
        <a href="https://instagram.com/abdullah__shahed?utm_source=qr&igshid=MThlNWY1MzQwNA==" target="_blank"><i style="margin: 12px;" class="fa-brands fa-instagram fa-2x color1"></i></a>
        <a href="https://github.com/shahed32156" target="_blank"><i style="margin: 12px;" class="fa-brands fa-whatsapp fa-2x color2"></i></a>
        <a href="https://linkedin.com/in/abdullahshahed24/" target="_blank"><i style="margin: 12px;" class="fa-brands fa-twitter fa-2x color3" target="_blank"></i></a>

</div>

        </div>

      
            
        </div>

</div>


<div class="row">


<div class="col-lg-12">

<div class="contact-card2">

<h4 style="text-align:center;margin-top:3%">Feedback</h4>
<h6 style="text-align:center;margin-top:3%">Your Feedback is Important to us!</h6>
<p class="para">We appreciate you taking the time to let us know how we did and how we could do better. Please fill out the form provided and our management team will take a look at what you have to say and share it with our team.</p>

<form action="https://formsubmit.co/443846771d4a398c20442cb42bd23deb" method="POST">

<div class="name">
<input class="click" type="text" name="name" placeholder="Enter your name" required>
</div>

<div class="email">
    <input class="click" type="email" name="email" placeholder="Enter your email" required>
</div>

<div class="number">
    <input class="click" type="number" name="number" placeholder="Enter your phone number" required>
</div>

<div class="msg">
    <textarea class="click" name="message" id="" cols="43" rows="5" placeholder="Enter your message" required></textarea>
</div>
<div class="send-rst">
   
    
    <button class="send">Send</button>
    <button class="btn-reset">Reset</button>
    
</div>

</form>


</div>

</div>



</div>


</div>





<script>

let btnClear = document.querySelector('.btn-reset');
let inputs = document.querySelectorAll('input');
let msg = document.querySelectorAll('textarea');

btnClear.addEventListener('click', () => {
    inputs.forEach(input =>  input.value = '');
    msg.forEach(textarea =>  textarea.value = '');
});
</script>

</body>
</html>