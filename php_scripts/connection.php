<?php
/*
$connect = mysqli_connect("localhost", "id2294856_browniecommande", "brownie77", "id2294856_browniebase");
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }
//sitegtound database: browniew_orderBase
//site ground username: browniew_command

*/
$username="browniew_command";
$password="brownie77";
$database="browniew_orderBase";

$connect = mysqli_connect("localhost", $username, $password, $database);
        
        if (mysqli_connect_error()) {
            
            
            die ("Database Connection Error");
            
        }

?>
