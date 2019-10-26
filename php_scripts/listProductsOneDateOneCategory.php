<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>
      
        Liste 
      
    </title>
    </head>
    <body>
<?php
echo "In liste Order";
include("connection.php");
?>
<table>
<thead>
<tr>
<th>Produit</th>
<th>Pour le</th>
<th>Commande</th>
</tr>
</thead>
<tbody>
<?php
//$data = array();
//Get everything from Orders
$selectedProduct="PUR PORC A L AIL";
$sql="SELECT Orders.OrderID as OrderID , 
            Orders.Date_Forthe as Date_Forthe , 
            OrderDetails.Description as Description

            FROM Orders 
            INNER JOIN OrderDetails ON Orders.OrderID=OrderDetails.OrderID 
            WHERE Date_Forthe ='2018-12-11'";
$return_arr = array();	
	

if ($result = mysqli_query( $connect, $sql )){
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
    <tr>
       
    <td> <?php echo $row['Description']; ?></td>
    <td> <?php echo $row['Date_Forthe']; ?></td>
    <td> <?php echo $row['OrderID']; ?></td>
    </tr>
    <?php
    $row_array['OrderID'] = $row['OrderID'];
    $row_array['Date_Forthe'] = $row['Date_Forthe'];
    $row_array['Description'] = $row['Description'];


    array_push($return_arr,$row_array);
   }
 }
?>
</tbody>
</table>
<BR>
<BR>
<table>
<tbody>
<?php
//$data = array();
//Get everything from Orders
$selectedProduct="PUR PORC A L AIL";
$sql="SELECT DISTINCT OrderDetails.Description as Description
            FROM Orders 
            INNER JOIN OrderDetails ON Orders.OrderID=OrderDetails.OrderID 
            WHERE Date_Forthe ='2018-12-11' 
            ORDER BY OrderDetails.Description";
$return_arr = array();	
echo $sql;
echo "<BR>" ;	
$distinctProducts=array();
$i=0;

if ($result = mysqli_query( $connect, $sql )){
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
    <tr>
    <td> <?php echo $row['Description']; ?></td>
    </tr>
    <?php
    $distinctProducts[$i] = $row['Description'];
    $i=$i+1;



   }
 }

?>
</tbody>
</table>
<BR>
<BR>

<?php
 echo "<BR>";
 echo "the number of distinct product is ";
 
$maxi=$i-1;
echo $i;
echo "<BR>";

 for ($i=0; $i <=$maxi; $i++){

    $myp=$distinctProducts[$i];
    echo $myp;
    ?>
    <table>
    <thead>
    <tr>
    <th>Produit</th>
    <th>Pour le</th>
    <th>Commande</th>
    <th>Nombre</th>
    <th>Poids</th>
    <th>Nom</th>
    <th>SV</th>
    <th>Nb Pers</th>
    <th>Commentaire</th>
    </tr>
    </thead>
    <tbody>
    <?php



    $sql="SELECT Orders.OrderID as OrderID , 
    Orders.Date_Forthe as Date_Forthe , 
    OrderDetails.Description as Description,
    OrderDetails.Quantity as Quantity,
    OrderDetails.Weight as Weight,
    Orders.CustomerLN as CustomerLN,
    OrderDetails.sous_vide as sous_vide,
    OrderDetails.nbre_pers as nbre_pers,
    OrderDetails.autre_info as autre_info
    FROM Orders 
    INNER JOIN OrderDetails ON Orders.OrderID=OrderDetails.OrderID 
    WHERE Date_Forthe ='2018-12-11'AND OrderDetails.Description='$myp'";
            ?>
            <table>
            <tbody>
            <?php

            if ($result = mysqli_query( $connect, $sql )){
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                    <tr>
                    <td> <?php echo $row['Description']; ?></td>
                    <td> <?php echo $row['Date_Forthe']; ?></td>
                    <td> <?php echo $row['OrderID']; ?></td>
                    <td> <?php echo $row['Quantity']; ?></td>
                    <td> <?php echo $row['Weight']; ?></td>
                    <td> <?php echo $row['CustomerLN']; ?></td>
                    <td> <?php echo $row['sous_vide']; ?></td>
                    <td> <?php echo $row['nbre_pers']; ?></td>
                    <td> <?php echo $row['autre_info']; ?></td>
                    </tr>
                    <?php
                    $row_array['OrderID'] = $row['OrderID'];
                    $row_array['Date_Forthe'] = $row['Date_Forthe'];
                    $row_array['Description'] = $row['Description'];


                    array_push($return_arr,$row_array);
                    }
            }
            ?>
            </table>
            </tbody>
            <BR>

            <?php
            ?>
            
            <table>
            <thead>
            <th>Nombre</th>
            <th>Occurence</th>
            </thead>
            <tbody>
            <?php

            //$data = array();
            //Get everything from Orders


            $sql="SELECT DISTINCT OrderDetails.Quantity as Quantity, COUNT(OrderDetails.Quantity) as count
                        FROM Orders 
                        INNER JOIN OrderDetails ON Orders.OrderID=OrderDetails.OrderID 
                        WHERE Date_Forthe ='2018-12-11' AND OrderDetails.Description='$myp'
                        GROUP BY OrderDetails.Quantity";
                


            if ($result = mysqli_query( $connect, $sql)){
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                <tr>
                <td> <?php echo $row['Quantity']; ?></td>
                <td> <?php echo $row['count']; ?></td>
                </tr>
                <?php




                }
            }

            ?>
            </tbody>
            </table>
            <BR>



            <?php
 }
//echo '<script>console.log('.$myData[0]['produit'].')</script>';

//returns data as JSON format
echo "<BR>";

?>

<table>
<thead>
<th>Nombre</th>
<th>Occurence</th>
</thead>
<tbody>
<?php
$selectedProduct="PUR PORC A L AIL";
echo $selectedProduct;
echo "<BR>" ;	
$sql="SELECT DISTINCT OrderDetails.Quantity as Quantity, COUNT(OrderDetails.Quantity) as count
            FROM Orders 
            INNER JOIN OrderDetails ON Orders.OrderID=OrderDetails.OrderID 
            WHERE Date_Forthe ='2018-12-11' AND OrderDetails.Description='$selectedProduct'
            GROUP BY OrderDetails.Quantity";

echo $sql;	
if ($result = mysqli_query( $connect, $sql)){
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
    <tr>
    <td> <?php echo $row['Quantity']; ?></td>
    <td> <?php echo $row['count']; ?></td>
    </tr>
    <?php
   }
 }
?>
</tbody>
</table>
<BR>
<table>
<thead>
<th>Nombre</th>
<th>Occurence</th>
</thead>
<tbody>
<?php
$selectedProduct="PUR PORC A L AIL";
echo $selectedProduct;
echo "<BR>" ;	
$sql="SELECT DISTINCT OrderDetails.Weight as Weight, COUNT(OrderDetails.Weight) as count
            FROM Orders 
            INNER JOIN OrderDetails ON Orders.OrderID=OrderDetails.OrderID 
            WHERE Date_Forthe ='2018-12-11' AND OrderDetails.Description='$selectedProduct'
            GROUP BY OrderDetails.Weight DESC";

echo $sql;	
if ($result = mysqli_query( $connect, $sql)){
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
    <tr>
    <td> <?php echo $row['Weight']; ?></td>
    <td> <?php echo $row['count']; ?></td>
    </tr>
    <?php
   }
 }
?>
</tbody>
</table>




<BR>
<?PHP
for ($i=0; $i <=$maxi; $i++){

    echo $distinctProducts[$i]."<br>";
 }
//echo '<script>console.log('.$myData[0]['produit'].')</script>';

//returns data as JSON format
echo "<BR>";

mysqli_close($connect);
echo json_encode($return_arr);
?>
</body>
</html>