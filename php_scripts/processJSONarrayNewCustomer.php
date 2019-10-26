<?php

include("connection.php");

$newcustomerLN=$_POST["newcustomerLN"];
$newcustomerLN=mysqli_real_escape_string($connect, $newcustomerLN);

$newcustomerFN=$_POST["newcustomerFN"];
$newcustomerFN=mysqli_real_escape_string($connect, $newcustomerFN);

$newcustomerPHONE=$_POST["newcustomerPHONE"];
$newcustomerPHONE=mysqli_real_escape_string($connect, $newcustomerPHONE);



$sql="INSERT INTO customers (CustomerLN, CustomerFN, CustomerPHONE) 
	VALUES  ('$newcustomerLN','$newcustomerFN','$newcustomerPHONE')";
	
	
if(mysqli_query($connect, $sql)){
   //echo "Customer inserted successfully2.";
} else{
    //echo "ERROR:  Not able to execute";
}


$sql = "SELECT MAX(customerID) as 'max' FROM customers";
$result = $connect->query($sql);
if ($result->num_rows > 0) {

	$row = $result->fetch_assoc();   
	$highest_id=$row['max'];
		
} else {
	//echo "0 results";
}
	



echo $highest_id;
mysqli_close($connect);
?>