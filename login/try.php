<?php
    include("connection.php");
    $myemail="bla@bla.com";
    $myemail=mysqli_real_escape_string($connect, $myemail);
    //echo $myemail;
    echo "1<BR>";
    $mypass="hehe";
    $mypass=mysqli_real_escape_string($connect, $mypass);
    $mypass=md5($mypass);
    //echo $mypass;
    echo "2<BR>";
    
    //$query = "INSERT INTO `users` (email, pass) VALUES ( '$myemail', '$mypass')";
    $sql="INSERT INTO brownieUsers (email, browniepassword) 
    VALUES  ('$myemail','$mypass')";

/*$sql="INSERT INTO cart (customerLN, customerFN) 
VALUES  ('$myemail','$mypass')";*/
    //echo $sql;
    //echo "<BR>";

    if (mysqli_query($connect , $sql)) {

        echo "hello";
    }

?>