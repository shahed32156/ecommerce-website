
<?php
echo "No Search Result";
$con=mysqli_connect("localhost","root","","e-commerce");

$Search=$_POST['search'];

$sql="select Title,Product_id from catagory where Title='$Search'";
$res=mysqli_query($con,$sql);

while ($row=mysqli_fetch_assoc($res))
        {
  $Title=$row['Title'];
  $id=$row['Product_id'];

  if($Title==$Search)  {
    header("location:all_product.php#".$id);
  
  }

    
}



?>