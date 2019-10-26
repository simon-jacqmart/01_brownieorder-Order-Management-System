
<?php
include("connection.php");
$recapDate=$_POST["recapDate"];
$recapDate=mysqli_real_escape_string($connect, $recapDate);
//echo $recapDate;
$sql="SELECT DISTINCT OrderDetails.Description as Description
            FROM Orders 
            INNER JOIN OrderDetails ON Orders.OrderID=OrderDetails.OrderID 
            WHERE Date_Forthe = '$recapDate' 
            ORDER BY OrderDetails.Description";
$return_arr = [
    'distinctProducts' =>[],
    'recap' =>[]
];	


$i=0;

if ($result = mysqli_query( $connect, $sql )){
    while ($row = mysqli_fetch_assoc($result)) {

    $return_arr['distinctProducts'][$i] = $row['Description'];
    $i=$i+1;



   }
 }

?>


<?php

 
$maxi=$i-1;
//echo $maxi;


 for ($i=0; $i <=$maxi; $i++){

    $myp=$return_arr['distinctProducts'][$i];
    $return_arr['recap'][$i]['name']=$myp;
    //echo $myp;


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
    WHERE Date_Forthe = '$recapDate' AND OrderDetails.Description='$myp'";


            if ($result = mysqli_query( $connect, $sql )){
                $a=0;
                $sumTotal=0;
                    while ($row = mysqli_fetch_assoc($result)) {

                    
                   /* $return_arr["recap"][$myp][$a]['Description'] = $row['Description'];
                    $return_arr["recap"][$myp][$a]['Date_Forthe'] = $row['Date_Forthe'];
                    $return_arr["recap"][$myp][$a]['OrderID'] = $row['OrderID'];
                    $return_arr["recap"][$myp][$a]['Quantity'] = $row['Quantity'];
                    $return_arr["recap"][$myp][$a]['Weight'] = $row['Weight'];
                    $return_arr["recap"][$myp][$a]['CustomerLN'] = $row['CustomerLN'];
                    $return_arr["recap"][$myp][$a]['sous_vide'] = $row['sous_vide'];
                    $return_arr["recap"][$myp][$a]['nbre_pers'] = $row['nbre_pers'];
                    $return_arr["recap"][$myp][$a]['autre_info'] = $row['autre_info'];
                    */
                    $return_arr['recap'][$i]['details'][$a]['Description']=$row['Description'];
                    $return_arr['recap'][$i]['details'][$a]['Date_Forthe']=$row['Date_Forthe'];
                    $return_arr['recap'][$i]['details'][$a]['OrderID']=$row['OrderID'];
                    $return_arr['recap'][$i]['details'][$a]['Quantity']=$row['Quantity'];
                    $sumTotal= $sumTotal + $row['Quantity'];
                    $return_arr['recap'][$i]['details'][$a]['Weight']=$row['Weight'];
                    $return_arr['recap'][$i]['details'][$a]['CustomerLN']=$row['CustomerLN'];
                    $return_arr['recap'][$i]['details'][$a]['sous_vide']=$row['sous_vide'];
                    $return_arr['recap'][$i]['details'][$a]['nbre_pers']=$row['nbre_pers'];
                    $return_arr['recap'][$i]['details'][$a]['autre_info']=$row['autre_info'];
                    
                    //$return_arr["recap"][$i][$a]['Description'] = $row['Description'];
                    

                    $a=$a+1;
                    //array_push($return_arr["recap"],$row_array);

                    }
                    $return_arr['recap'][$i]['total2']=$sumTotal;
                    
            }

        

                     

            $sql="SELECT DISTINCT OrderDetails.Quantity as Quantity, COUNT(OrderDetails.Quantity) as count
                        FROM Orders 
                        INNER JOIN OrderDetails ON Orders.OrderID=OrderDetails.OrderID 
                        WHERE Date_Forthe = '$recapDate' AND OrderDetails.Description='$myp'
                        GROUP BY OrderDetails.Quantity";
                


            if ($result = mysqli_query( $connect, $sql)){
                $a=0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $return_arr['recap'][$i]['occurencenombre'][$a]['nombre']=$row['Quantity'];
                    $return_arr['recap'][$i]['occurencenombre'][$a]['count']=$row['count'];
                    //echo $row['Quantity'];
                    //echo $row['count'];
                    $a=$a+1;

                }
            }


            $sql="SELECT DISTINCT OrderDetails.Weight as Weight, COUNT(OrderDetails.Weight) as count
            FROM Orders 
            INNER JOIN OrderDetails ON Orders.OrderID=OrderDetails.OrderID 
            WHERE Date_Forthe = '$recapDate' AND OrderDetails.Description='$myp'
            GROUP BY OrderDetails.Weight DESC";
    


            if ($result = mysqli_query( $connect, $sql)){
                $a=0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $return_arr['recap'][$i]['occurenceweight'][$a]['weight']=$row['Weight'];
                    $return_arr['recap'][$i]['occurenceweight'][$a]['count']=$row['count'];
                    //echo $row['Quantity'];
                    //echo $row['count'];
                    $a=$a+1;

                }
            }


 }
 
//echo '<script>console.log('.$myData[0]['produit'].')</script>';

//returns data as JSON format
/*echo "<BR>";

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
*/
mysqli_close($connect);
echo json_encode($return_arr);
?>
