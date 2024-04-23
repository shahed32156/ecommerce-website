<?php

$con=mysqli_connect("localhost","root","","e-commerce");


  $sql="select Fullname,Email from signup";
  $res=mysqli_query($con,$sql);

  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style> 
table {

    border-collapse:collapse;
    margin-top:10%;
    box-shadow:0 0 20px 0 black;
}
th{

    font-size:25px;
    background-color:skyblue;
}
tr:nth-child(even) {
    background-color: lightgreen;
}

tr:nth-child(odd) {
    background-color: lightgray;
}
    </style>


  </head>

  <body>
    <table align="center" border="2px" style="height : 200px; width : 900px; text-align:center">

<tr>

<th style="min-width:130px"> Full name </th>

<th> Email </th>


</tr>

<?php 

while ($row=mysqli_fetch_assoc($res))
  {
?>
<tr>
   <td style="min-width:130px"><?php echo $row['Fullname']; ?> </td>
   <td><?php echo $row['Email']; ?> </td>
   

</tr>
    
  <?php

  }

  ?>



    </table>

  </body>

  </html>

