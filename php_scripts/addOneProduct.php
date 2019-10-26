<?php

include("connection.php");

$product_id=$_POST["product_id"];
$product_id=mysqli_real_escape_string($connect, $product_id);

$product_name=$_POST["product_name"];
$product_name=mysqli_real_escape_string($connect, $product_name);

$category_id=$_POST["category_id"];
$category_id=mysqli_real_escape_string($connect, $category_id);

$sql="INSERT INTO products (product_id, product_name, category_id) 
	VALUES  ('$product_id','$product_name','$category_id')";
	
	
if(mysqli_query($connect, $sql)){
   echo "Products inserted successfully2.";
} else{
    //echo "ERROR:  Not able to execute";
}

//echo "hello";
?>