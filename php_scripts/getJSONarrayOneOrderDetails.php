<?php
//echo "In php One Order";
include("connection.php");
$rowNumberSavedOrders=$_POST["rowNumberSavedOrders"];
$rowNumberSavedOrders=mysqli_real_escape_string($connect, $rowNumberSavedOrders);
//$data = array();
//Get everything from Orders
$sql="SELECT * FROM OrderDetails WHERE OrderID=$rowNumberSavedOrders";
$return_arr = array();	
	

if ($result = mysqli_query( $connect, $sql )){
    while ($row = mysqli_fetch_assoc($result)) {
    $row_array['OrderID'] = $row['OrderID'];
    $row_array['ProductID'] = $row['ProductID'];
    $row_array['Description'] = $row['Description'];
    $row_array['Quantity'] = $row['Quantity'];
    $row_array['Weight'] = $row['Weight'];
    $row_array['sous_vide'] = $row['sous_vide'];
    $row_array['nbre_pers'] = $row['nbre_pers'];
    $row_array['autre_info'] = $row['autre_info'];

    array_push($return_arr,$row_array);
   }
 }

//echo '<script>console.log('.$myData[0]['produit'].')</script>';

//returns data as JSON format

mysqli_close($connect);
echo json_encode($return_arr);
?>