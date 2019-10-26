
<?php
include("connection.php");
?>

<?php


$sql="SELECT DISTINCT OrderDetails.Description as Description
            FROM Orders 
            INNER JOIN OrderDetails ON Orders.OrderID=OrderDetails.OrderID 
            WHERE Date_Forthe ='2018-12-11' 
            ORDER BY OrderDetails.Description";
$return_arr = array(
    'distinctProducts' =>array(),
    'recap' =>array(
        'details' => array()
    )

    
);//end	


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
    $return_arr['recap'][$i]=$myp;
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
    WHERE Date_Forthe ='2018-12-11'AND OrderDetails.Description='$myp'";


          if ($result = mysqli_query( $connect, $sql )){
                $a=0;
                    while ($row = mysqli_fetch_assoc($result)) {

                    
                    /*$return_arr["recap"][$i][$a]=array('Description' => $row['Description'],
                                                        'Date_Forthe' => $row['Date_Forthe'],
                    'OrderID' =>$row['OrderID'],
                    'Quantity' => $row['Quantity'],
                    'Weight' => $row['Weight'],
                    'CustomerLN' => $row['CustomerLN'],
                    'sous_vide' => $row['sous_vide'],
                    'nbre_pers' => $row['nbre_pers'],
                    'autre_info' => $row['autre_info'],
                    );*/
                    //$return_arr["recap"][$i]['details'][$a] = $row['Description'];
                   // $return_arr["recap"][$i]['details'][$a] = $row['Date_Forthe'];

                    $a=$a+1;
                    //array_push($return_arr["recap"],$row_array);
                    }
          }

             }
            ?>
  

            <?php
            /*
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


*/
            //<?php
 //}
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
