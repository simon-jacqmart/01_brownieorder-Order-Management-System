<?php
//echo "In php Orders";
include("connection.php");
$data = array();
//Get everything from Orders
$sql="SELECT * FROM Orders ORDER BY OrderID DESC";
$return_arr = array();	
	
/*$result = $connect->query($sql);
if ($result->num_rows > 0) {

    $userData = $result->fetch_assoc();
    $data['status'] = 'ok';
    $data['result'] = $userData;
}else{
    $data['status'] = 'err';
    $data['result'] = '';
}
echo json_encode($data);*/

if ($result = mysqli_query( $connect, $sql )){
    while ($row = mysqli_fetch_assoc($result)) {
    $row_array['OrderID'] = $row['OrderID'];
    $row_array['CustomerLN'] = $row['CustomerLN'];
    $row_array['CustomerFN'] = $row['CustomerFN'];
    $row_array['CustomerPHONE'] = $row['CustomerPHONE'];
    $row_array['Date_TakenON'] = $row['Date_TakenON'];
    $row_array['Date_Forthe'] = $row['Date_Forthe'];
    $row_array['generalcomment'] = $row['generalcomment'];

    array_push($return_arr,$row_array);
   }
 }

//echo '<script>console.log('.$myData[0]['produit'].')</script>';

//returns data as JSON format

mysqli_close($connect);
echo json_encode($return_arr);
?>