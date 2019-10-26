<?php


include('cnx.php');

$try=$_POST['name'];

$sql = "SELECT * FROM search WHERE name like '%".$try."%' OR numero LIKE '%".$try."%'";
$array = $cnx->query($sql);

foreach($array as $key) {

?>
<div id="user"><img width="50" height="50" src="<?php echo $key['image']; ?>" id="pic" /><span><?php echo $key['name']; ?></span><span><?php echo $key['numero']; ?></span></div>


<?php

}


?>