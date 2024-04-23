
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Panel</title>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    

    <style>


* {

margin: 0;
padding: 0;
box-sizing: border-box;

}

html,body {

   display: grid;
}

h1 {


   color: white;
   padding: 15px;
   font-family: cursive;
   position: relative;
   font-size: 30px;
   margin-top: 10px;
}

.user-panel {

    background-color: rgb(243, 180, 97);
}

.my-link-style {

   font-size: 20px;
   font-weight: 500;
   margin-left: 10px;
   margin-right: 10px;
   text-decoration: none;
}

.my-link-style:hover {
  text-decoration: none;
  color: rgb(7, 176, 176);

 
}

.search {

  margin-top: 27px;
  padding: 7px;
  width: 400px;
  border-radius: 5px;
  border: none;
  background:white;
}

.search:focus {

   outline: none;
}

button {
 
 padding:7px 10px 7px 10px;
 background-color: white;
 border: none;
 border-radius: 5px;
 
}


 button:hover {

   background-color: rgb(7, 176, 176);
   transition: 0.3s;
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




    </style>

</head>

<body>

<header>
    <label  id="dark-change"></label>
  </header>

    <div class="container-fluid user-panel">

    <div class="row">

        <div class="col-lg-5">

            <h1>E-Commerce Website</h1>
        
        </div>


        <div class="col-lg-7">

            <nav class="navbar navbar-expand-sm">

                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon navIcon"></span>
                  </button>

                  <div style="margin-left:-80px" class="collapse navbar-collapse" id="navbarTogglerDemo">
                <ul class="navbar-nav py-3">
                    <li class="nav-item"> <a class="my-link-style nav-link" href="user_panel.php">Home</a></li>
                    <li class="nav-item"> <a class="my-link-style nav-link" href="contact.php">Contact</a></li>
                    <li class="nav-item"> <a class="my-link-style nav-link" href="order.php">About</a></li>
                    <li class="nav-item"> <a class="my-link-style nav-link" href="change_password.php">Account</a></li>
                    <li class="nav-item"> <a class="my-link-style nav-link" href="panel.php">Logout</a></li>

          
                </ul>

            </div>
                
            </nav>


        </div>



    </div>


    </div>


<script src="darkmood.js"></script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>




</html>