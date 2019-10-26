<?php
//echo "In php Orders";
include("connection.php");
//$data = array();
//Get everything from Orders
$sql="SELECT * FROM products";
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
    $row_array['product_id'] = $row['product_id'];
    $row_array['product_name'] = $row['product_name'];
    $row_array['category_id'] = $row['category_id'];

    array_push($return_arr,$row_array);
   }
 }

//echo '<script>console.log('.$myData[0]['produit'].')</script>';

//returns data as JSON format

mysqli_close($connect);
echo json_encode($return_arr);
?>