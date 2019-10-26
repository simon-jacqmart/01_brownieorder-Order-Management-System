<?php

include("connection.php");
$request = mysqli_real_escape_string($connect, $_POST["query"]);


$query = "
 SELECT * FROM products WHERE product_id LIKE '%".$request."%' OR product_name LIKE '%".$request."%' 
";



$result = mysqli_query($connect, $query);

$data = array();

if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_assoc($result))
 {

  $data[] = $row["product_id"] ." ". $row["product_name"] ;
 }
 echo json_encode($data);
} else{//added by Simon
    $data[]="nothing";
    echo json_encode($data);
}
?>