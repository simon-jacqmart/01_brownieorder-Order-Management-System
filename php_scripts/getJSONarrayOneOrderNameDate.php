<?php
//echo "In php One Order";
include("connection.php");
$rowNumberSavedOrders=$_POST["rowNumberSavedOrders"];
$rowNumberSavedOrders=mysqli_real_escape_string($connect, $rowNumberSavedOrders);
//$data = array();
//Get everything from Orders
$sql="SELECT * FROM Orders WHERE OrderID=$rowNumberSavedOrders";
$return_arr = array();	
	

if ($result = mysqli_query( $connect, $sql )){
    while ($row = mysqli_fetch_assoc($result)) {
    $row_array['OrderID'] = $row['OrderID'];
    $row_array['CustomerID'] = $row['CustomerID'];
    $row_array['CustomerLN'] = $row['CustomerLN'];
    $row_array['CustomerFN'] = $row['CustomerFN'];
    $row_array['CustomerPHONE'] = $row['CustomerPHONE'];
    $row_array['Date_TakenON'] = $row['sDate_TakenON'];
    $row_array['Date_Forthe'] = $row['Date_Forthe'];
    $row_array['generalComment'] = $row['generalComment'];

    array_push($return_arr,$row_array);
   }
 }

 

//echo '<script>console.log('.$myData[0]['produit'].')</script>';

//returns data as JSON format

mysqli_close($connect);
echo json_encode($return_arr);
?>