<?php

include("connection.php");
$request = mysqli_real_escape_string($connect, $_POST["query"]);


$query = "
 SELECT * FROM customers WHERE customerFN LIKE '%".$request."%' OR customerLN LIKE '%".$request."%' OR customerPHONE LIKE '%".$request."%'
";



$result = mysqli_query($connect, $query);

$data = array();

if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_assoc($result))
 {

  $data[] = $row["customerFN"] ." ". $row["customerLN"]." ".$row["customerPHONE"]." "."IDENTIFICATION:".$row["customerID"];
 }
 echo json_encode($data);
} else{//added by Simon
    $data[]="";
    echo json_encode($data);
}
?>