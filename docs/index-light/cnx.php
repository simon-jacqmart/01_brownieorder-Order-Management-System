<?php

$host = 'localhost';
$db='id2294856_browniebase';
$user='id2294856_browniecommande';
$pass='brownie77';

//$cnx= new PDO('mysql:host='.$host.'; dbname='.$db.'; user='.$user.'; pass='.$pass.'');
$cnx = mysqli_connect("localhost", "id2294856_browniecommande", "brownie77", "id2294856_browniebase");
if (mysqli_connect_error()) {

    echo "Problem";
            
    die ("Database Connection Error");

    
}
?>