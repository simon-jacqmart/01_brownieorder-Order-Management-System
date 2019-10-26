<?php
echo "hello";
include("connection.php");
$newOrderTable=$_POST["newOrderData"];
$obj = stripcslashes($newOrderTable);
$newOrderTableDecode = json_decode($obj, TRUE);
$var1= $newOrderTableDecode[0]['produit'];
$var1 = mysqli_real_escape_string($connect, $var1);
echo $var1;

$newOrderFirstName=$_POST["newOrderFirstName"];
$newOrderFirstName=mysqli_real_escape_string($connect, $newOrderFirstName);

$newOrderLastName=$_POST["newOrderLastName"];
$newOrderLastName=mysqli_real_escape_string($connect, $newOrderLastName);

$newOrderPhone=$_POST["newOrderPhone"];
$newOrderPhone=mysqli_real_escape_string($connect, $newOrderPhone);

$newOrderDate=$_POST["newOrderDate"];
$newOrderDate=mysqli_real_escape_string($connect, $newOrderDate);

$newOrderCustomerID=$_POST["newOrderCustomerID"];
$newOrderCustomerID=mysqli_real_escape_string($connect, $newOrderCustomerID);

$newOrderGlobalComment=$_POST["newOrderGlobalComment"];
$newOrderGlobalComment=mysqli_real_escape_string($connect, $newOrderGlobalComment);

echo $newOrderGlobalComment;

$sql = "SELECT MAX(OrderID) as 'max' FROM Orders";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
// output data of each row
	while($row = $result->fetch_assoc()) {
		//echo "OK OK.11";
		//echo "<BR>";
		$highest_id=$row['max'];
		//echo $highest_id;
		//echo "<BR>";		
}
	} else {
			//echo "0 results";
	}
	
$highest_id=$highest_id+1;
$Date_TakenON=	date("Y-m-d");

$sql="INSERT INTO Orders(CustomerID, CustomerLN, CustomerFN, CustomerPHONE, Date_TakenON, Date_Forthe, OrderID, generalcomment) 
	VALUES  ('$newOrderCustomerID','$newOrderLastName','$newOrderFirstName', '$newOrderPhone', '$Date_TakenON','$newOrderDate', '$highest_id', '$newOrderGlobalComment')";
	
	
if(mysqli_query($connect, $sql)){
   echo "Records inserted successfully2.";
} else{
    echo "ERROR:  Not able to execute";
}

foreach ($newOrderTableDecode as $row) {
    //Multiple insert query

    $saveproductCODE= mysqli_real_escape_string($connect, $row['code']);
    $saveproductNAME= mysqli_real_escape_string($connect, $row['produit']);
    $saveproductNUMBER=mysqli_real_escape_string($connect, $row['nbre']);
    $saveproductWEIGHT=mysqli_real_escape_string($connect, $row['poids']);
    $saveproductSV=mysqli_real_escape_string($connect, $row['SV']);
    $saveproductPERS=mysqli_real_escape_string($connect, $row['pers']);
    $saveAutreInfo= mysqli_real_escape_string($connect, $row['comment']);
    $query = "INSERT INTO OrderDetails (OrderID, ProductID, Description , Quantity, Weight ,sous_vide, nbre_pers, autre_info) 
    VALUES ('$highest_id','$saveproductCODE','$saveproductNAME','$saveproductNUMBER','$saveproductWEIGHT','$saveproductSV','$saveproductPERS','$saveAutreInfo')";
    
    //$q = mysqli_query($connect, $query) or die (mysqli_error($connect));
    if(mysqli_query($connect, $query)) {
        $msg= "OK".$newOrderFirstName;
    } else {
       $msg = "Something wrong! Please try again.";
    }

}

//echo '<script>console.log('.$myData[0]['produit'].')</script>';

echo $msg;
mysqli_close($connect);
?>