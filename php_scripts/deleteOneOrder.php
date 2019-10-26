<?php


include("connection.php");


$modifyOrderID=$_POST["modifyOrderID"];
$modifyOrderID=mysqli_real_escape_string($connect, $modifyOrderID);
echo $modifyOrderID;

$sql = "DELETE FROM Orders WHERE OrderID='$modifyOrderID' ";

if(mysqli_query($connect, $sql)){
    echo ("La commande est supprimee \r\n");
 } else {
    echo ("Probleme, veuillez reessayer plus tard, contactez l'administrateur si le probleme persiste \r\n");
 }

 $sql = "DELETE FROM OrderDetails WHERE OrderID='$modifyOrderID' ";

if(mysqli_query($connect, $sql)){
    echo ("commande details supprimes");
 } else {
    echo ("Probleme suppression details, veuillez reessayer plus tard, contactez l'administrateur si le probleme persiste");
 }

mysqli_close($connect);
?>