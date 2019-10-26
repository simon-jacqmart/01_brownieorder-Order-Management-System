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

$modifyOrderID=$_POST["modifyOrderID"];
$modifyOrderID=mysqli_real_escape_string($connect, $modifyOrderID);

$modifyOrderDate_TakenON=$_POST["modifyOrderDate_TakenON"];
$modifyOrderDate_TakenON=mysqli_real_escape_string($connect, $modifyOrderDate_TakenON);
//echo $newOrderGlobalComment;

$sql = "DELETE FROM OrderDetails WHERE OrderID='$modifyOrderID' ";
$result = $connect->query($sql);

$Date_TakenON=	$modifyOrderDate_TakenON;

$sql="UPDATE Orders SET Date_Forthe='$newOrderDate', generalcomment='$newOrderGlobalComment' WHERE OrderID='$modifyOrderID' ";
	
	
	
if(mysqli_query($connect, $sql)){
   echo "Records updated successfully2.";
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
    VALUES ('$modifyOrderID','$saveproductCODE','$saveproductNAME','$saveproductNUMBER','$saveproductWEIGHT','$saveproductSV','$saveproductPERS','$saveAutreInfo')";
    
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